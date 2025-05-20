<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicles;

class VehicleController extends Controller
{
    public function create(){
        return view('backend.Vehicles.vehiclemanagement');
        

    }

    public function store(Request $request){

        $validated = $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1950|max:' . (date('Y') + 1),
            'plate_number' => 'required|string|max:255|unique:vehicles',
            'vehicle_type' => 'required|string|max:255',
            'mileage' => 'required|numeric|min:0',
            'features' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',


        ]);
        // Handle Profile Photo upload if provided
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('vehicles', 'public');
            $validated['photo']= $photoPath;
        }

        Vehicles::create($validated);

        return redirect()->route('vehiclemanagement')->with('success', 'Vehicle added successfully!');


    }
     public function records(){
        $records=vehicles::all();

    return view('backend.Vehicles.Vehiclelist',compact('records'));
    }
}
