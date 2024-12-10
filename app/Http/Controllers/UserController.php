<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function getUser(Request $request)
    {
        $user = User::where('nim', $request->nim)->first();

        if ($user) {
            return response()->json([
                'success' => true,
                'data' => [
                    'name' => $user->name,
                    'no_hp' => $user->no_hp,
                ],
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'NIM not found',
        ]);
    }

    public function show()
    {
        $user = Auth::user();

        if (!$user) {
            abort(404, 'User tidak ditemukan');
        }

        return view('/mahasiswa/profilds', compact('user'));
    }

    public function showInfoPKL()
{
    $user = Auth::user();

    if (!$user) {
        abort(404, 'User tidak ditemukan');
    }

    $surats = \DB::table('surat_users')
        ->join('surats', 'surat_users.id_surat', '=', 'surats.id_surat')
        ->where('surat_users.nim', $user->nim)
        ->orderBy('surats.created_at', 'desc') // Atau gunakan 'surats.id_surat' jika perlu
        ->get();

    // Mengambil surat terbaru (pertama dalam hasil query)
    $suratTerbaru = $surats->first(); // Mengambil surat terbaru

    return view('/mahasiswa/informasipkl', compact('user', 'suratTerbaru'));
}


}