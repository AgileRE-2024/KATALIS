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
            // Autentikasi berhasil, dapatkan user yang sedang login
            $user = Auth::user();

            // Redirect berdasarkan role pengguna
            if ($user->role === 'mahasiswa') {
                return redirect()->route('dashboard')->with('message', 'Login successful!');
            } elseif ($user->role === 'dosen') {
                return redirect()->route('dashboardDosen')->with('message', 'Login successful!');
            } elseif ($user->role === 'koor') {
                return redirect()->route('dashboardKoor')->with('message', 'Login successful!');
            } else {
                // Jika role tidak sesuai atau tidak dikenal, arahkan ke halaman default
                return redirect()->route('defaultRoute')->with('message', 'Login successful!');
            }
        }

        // Autentikasi gagal, kembali ke halaman login dengan pesan error
        return redirect()->back()->with('error', 'Invalid credentials.')->withInput();
    }
}