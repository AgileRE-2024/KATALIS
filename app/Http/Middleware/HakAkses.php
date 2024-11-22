<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dosen;
use App\Models\Koordinator;
use Illuminate\Support\Facades\Auth;

class HakAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string  $table
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $table)
    {
        $user = Auth::user();

        // Cek apakah pengguna sudah login
        if (!$user) {
            return redirect('/loginfix')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Cek keberadaan pengguna di tabel yang sesuai
        switch ($table) {
            case 'users':
                // Cek apakah pengguna ada di tabel users
                if (User::where('id', $user->id)->exists()) {
                    return $next($request);
                }
                break;

            case 'dosen':
                // Cek apakah pengguna ada di tabel dosen
                if (Dosen::where('id', $user->id)->exists()) {
                    return $next($request);
                }
                break;

            case 'koordinator':
                // Cek apakah pengguna ada di tabel koordinator
                if (Koordinator::where('id', $user->id)->exists()) {
                    return $next($request);
                }
                break;
        }

        // Jika tidak ada akses, redirect ke halaman login
        return redirect('/loginfix')->with('error', 'Akses ditolak.');
    }
}