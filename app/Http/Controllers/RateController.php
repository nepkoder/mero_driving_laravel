<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rate;
class RateController extends Controller
{
    public function create(){

        return view('backend.Management.ratemanagement');
    }

    public function store(Request $request){

        $validated =$request ->validate([
            'service_type' => 'required|string|max:255',
            'vehicle_type' => 'required|string|max:255',
            'rate_amount' => 'required|numeric|min:0',
            'duration' => 'required|integer|min:1',
            'description' => 'nullable|string',
    ]);

    Rate::create($validated);
        return redirect()->route('ratemanagement')
                         ->with('success', 'Rate added successfully!');
    



    }
}

