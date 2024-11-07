<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('loginfix'); // Ganti dengan nama view login Anda
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed, redirect to dashboard
            return redirect()->route('dashboard')->with('message', 'Login successful!');
        }

        // Authentication failed, redirect back with error message
        return redirect()->back()->with('error', 'Invalid credentials.')->withInput();
    }
}
