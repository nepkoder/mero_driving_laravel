<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;

class CustomersController extends Controller
{
    public function login()
    {
        return view('backend.Pages.page-login');
    }


    public function store(Request $request){
        // echo "<pre>";
        // print_r($request->all());
//for validation
        $request->validate([
            'username' => 'required|email',
            'password' => 'required',
        ]);
// store into database
        $customers = new Customers();
        $customers ->username = $request->username;
        $customers ->password = md5($request['password']);
        $customers ->save();

        return redirect()->back()->with('success', 'User created successfully!');

    }
}
