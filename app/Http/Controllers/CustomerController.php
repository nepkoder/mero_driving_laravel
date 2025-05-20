<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create(){
        return view('backend.Customer.customermanagement');
    }
    public function store(Request $request)

    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email',
            'address' => 'required|string|max:255',
        ]);
        customer::create($validated);
        return redirect()->route('customermanagement')
                         ->with('success', 'user added successfully!');
        //
    }

    public function records(){
        $records=Customer::all();

    return view('backend.Customer.Customerlist',compact('records'));
    }

}
