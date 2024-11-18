<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardDosenController extends Controller
{
    public function index()
    {
        // Mengambil user yang sedang login
        $user = auth()->user();
        
        // Ambil data dosen terkait berdasarkan dosen_id dari tabel users
        $dosen = $user->dosen;  
        
        // Kirim data dosen ke view
        return view('dosen.dashboardDosen', compact('dosen'));
    }

    public function index1()
    {
        // Mengambil user yang sedang login
        $user = auth()->user();
        
        // Ambil data dosen terkait berdasarkan dosen_id dari tabel users
        $dosen = $user->dosen;  
        
        // Kirim data dosen ke view
        return view('dosen.dosenprofil', compact('dosen'));
    }
}
