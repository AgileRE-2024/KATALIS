<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\JadwalKonsultasi;
use App\Models\SeminarApplication;
use Carbon\Carbon;

class DashboardDosenController extends Controller
{
    public function index()
    {
        $dosen = Auth::guard('dosen')->user();

        $anakBimbingTotal = Surat::where('dosbing_name', Auth::user()->name)
            ->where('wkt_end', '<', now())
            ->count();

        // Ambil jumlah anak bimbingan yang statusnya aktif (sesuai dengan logika aktif yang Anda inginkan)
        $anakBimbingAktif = Surat::where('dosbing_name', Auth::user()->name)
            ->where('status_assign', 'active') // atau kondisi aktif lainnya
            ->count();

        // Ambil jumlah validasi bimbingan dengan status waiting approval
        $validasiBimbingan = JadwalKonsultasi::where('status', 'waiting approval')
            ->where('user_id', Auth::user()->id)
            ->count();

        // Ambil jumlah seminar yang akan datang (semua seminar yang grade-nya null)
        $seminarAkanDatang = SeminarApplication::whereNull('grade')
            ->where('dosen_pembimbing', Auth::user()->name)
            ->count();


        // Kirim data dosen ke view
        return view('dosen.dashboardDosen', compact('dosen', 'anakBimbingTotal', 'anakBimbingAktif', 'validasiBimbingan', 'seminarAkanDatang'));
    }

    public function index1()
    {
        $dosen = Auth::guard('dosen')->user();
        
        // Kirim data dosen ke view
        return view('dosen.dosenprofil', compact('dosen'));
    }
}
