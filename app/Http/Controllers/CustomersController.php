<?php
namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomersController extends Controller
{
    // Show the login page
    public function login()
    {
        return view('backend.login.page-login');
    }

    // Handle the login attempt
    public function store(Request $request)
    {
        // Validate email and password
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Redirect to the intended route (dashboard or the page the user tried to visit)
            return redirect()->intended(route('dashboard'))->with('success', 'Login successful!');
        }

        // Redirect back with an error message if authentication fails
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    // Show the dashboard page (this method is now simplified)
    public function dashboardPage()
    {
        return view('dashboard');
    }
}

