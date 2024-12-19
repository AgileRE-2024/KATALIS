<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Dosen;
use App\Models\Koordinator;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('loginfix'); // Ganti dengan nama view login Anda
    }

    public function login(Request $request)
    {
        // $credentials = $request->only('email', 'password');

        // // Coba login menggunakan tabel users
        // $user = User::where('email', $request->email)->first();
        // if ($user && Hash::check($request->password, $user->password)) {
        //     Auth::login($user);
        //     return $this->redirectUser($user);
        // }

        // // Coba login menggunakan tabel dosen
        // $dosen = Dosen::where('email', $request->email)->first();
        // if ($dosen && Hash::check($request->password, $dosen->password)) {
        //     Auth::login($dosen); // Ganti dengan metode login sesuai dosen
        //     return $this->redirectUser($dosen);
        // }

        // // Coba login menggunakan tabel koordinator
        // $koordinator = Koordinator::where('email', $request->email)->first();
        // if ($koordinator && Hash::check($request->password, $koordinator->password)) {
        //     Auth::login($koordinator); // Ganti dengan metode login sesuai koordinator
        //     return $this->redirectUser($koordinator);
        // }

        // // Jika semua metode gagal
        // return redirect()->back()->with('error', 'Invalid credentials.')->withInput();
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('dashboard');
        }

        if (Auth::guard('dosen')->attempt($credentials)) {
            $request->session()->regenerate();
            // dd(Auth::guard('dosen')->user());
            return redirect('dashboardDosen');
        }

        if (Auth::guard('koordinator')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('dashboardKoor');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    // protected function redirectUser($user)
    // {
    //     if ($user instanceof User) {
    //         // Redirect untuk user
    //         return redirect()->route('dashboard')->with('message', 'Login successful!');
    //     } elseif ($user instanceof Dosen) {
    //         // Redirect untuk dosen
    //         return redirect()->route('dashboardDosen')->with('message', 'Login successful!');
    //     } elseif ($user instanceof Koordinator) {
    //         // Redirect untuk koordinator
    //         return redirect()->route('dashboardKoor')->with('message', 'Login successful!');
    //     } else {
    //         // Jika role tidak sesuai atau tidak dikenal, arahkan ke halaman default
    //         return redirect()->route('defaultRoute')->with('message', 'Login successful!');
    //     }
    // }

    public function logout(Request $request)
    {
        // Logout dari semua guard
        Auth::guard('web')->logout();
        Auth::guard('dosen')->logout();
        Auth::guard('koordinator')->logout();

        // Invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login atau lainnya
        return redirect('/loginfix')->with('success', 'Berhasil logout.');
    }
}