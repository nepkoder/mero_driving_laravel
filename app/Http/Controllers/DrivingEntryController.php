<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userdata;
use App\Models\Customer;
use App\Models\DrivingEntry;

class DrivingEntryController extends Controller
{
    public function create()
    {
        $customers = Customer::all();
        $trainers = Userdata::where('role', 'trainer')->get(); // Assuming 'trainer' role is added
        return view('backend.Entry.EntryManagement', compact('customers', 'trainers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'entry_type' => 'required|in:membership,guest',
            'customer_id' => 'required_if:entry_type,membership|nullable|exists:customer,id',
            'guest_name' => 'required_if:entry_type,guest|nullable|string|max:255',
            'entry_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'payment_method' => 'required|string',
            'trainer_id' => 'required|exists:userdata,id',
        ]);

        DrivingEntry::create([
            'entry_type' => $request->entry_type,
            'customer_id' => $request->customer_id,
            'guest_name' => $request->guest_name,
            'entry_date' => $request->entry_date,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'payment_method' => $request->payment_method,
            'trainer_id' => $request->trainer_id,
        ]);

        return redirect()->back()->with('success', 'Driving entry created successfully.');
    }

public function records()
{
    $entries = DrivingEntry::with(['customer', 'trainer'])->latest()->get();
    return view('backend.Entry.Entrylist', compact('entries'));
}

}

