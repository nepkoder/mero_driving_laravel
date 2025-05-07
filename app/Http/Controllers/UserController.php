<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Userdata;

class UserController extends Controller
{
    public function create()
    {
        return view('backend.Management.usermanagement');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'dob' => 'required|date',
            'role' => 'required|string',
            'phone' => 'required|string|max:20',
            'bio' => 'nullable|string',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Handle Profile Photo upload if provided
        $photoPath = null;
        if ($request->hasFile('profile_photo')) {
            $photoPath = $request->file('profile_photo')->store('profile_photos', 'public');
        }

        

        $validated['profile_photo'] = $photoPath;
        Userdata::create($validated);

        return redirect()->route('usermanagement')
                         ->with('success', 'user added successfully!');
        //
    }
}
