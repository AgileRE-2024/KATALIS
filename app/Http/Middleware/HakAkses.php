<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dosen;
use App\Models\Koordinator;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\KoordinatorController;


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
    public function handle(Request $request, Closure $next, string $role)
    {
        $user = Auth::user();

        // Cek apakah pengguna sudah login
        if (!$user) {
            return redirect('/loginfix')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Periksa role berdasarkan guard
        switch ($role) {
            case 'users':
                if (Auth::guard('web')->check()) {
                    return $next($request);
                }
                break;

            case 'dosen':
                if (Auth::guard('dosen')->check()) {
                    return $next($request);
                }
                break;

            case 'koordinator':
                if (Auth::guard('koordinator')->check()) {
                    return $next($request);
                }
                break;

            default:
                return redirect('/loginfix')->with('error', 'Role tidak dikenali.');
        }

        return redirect('/loginfix')->with('error', 'Akses ditolak.');

    }

}