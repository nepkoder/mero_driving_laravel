<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instructor;
class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Management.instructormanagement');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:instructor',
            'phone' => 'required|string|max:20',
            'license_no' => 'required|string|unique:instructor,license_no',
            'vehicle_type' => 'required|string',
            'description' => 'nullable|string'
        ]);
        Instructor::create($validated);

        return redirect()->route('instructormanagement')
                         ->with('success', 'Instructor added successfully!');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
