<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255|unique:users,nim',
            'program_studi' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'tanggal_lahir' => 'required|date',
            'no_hp' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Save the user to the database
        User::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'program_studi' => $request->program_studi,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir,
            'no_hp' => $request->no_hp,
            'password' => Hash::make($request->password),
        ]);

        // Redirect or return a response
        return redirect()->route('home')->with('success', 'Registration successful!');
    }
}
