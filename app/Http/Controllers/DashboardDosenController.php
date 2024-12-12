<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardDosenController extends Controller
{
        public function index()
        {
            $dosen = Auth::guard('dosen')->user();
            // dd($dosen);
            
            // Kirim data dosen ke view
            return view('dosen.dashboardDosen', compact('dosen'));
        }

    public function index1()
    {
        $dosen = Auth::guard('dosen')->user();
        
        // Kirim data dosen ke view
        return view('dosen.dosenprofil', compact('dosen'));
    }
}
