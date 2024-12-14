<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SuratUser;
use App\Models\Surat;

class DashboardKoorController extends Controller
{
    public function index()
    {
        $koor = Auth::guard('koordinator')->user();
        $jumlahPKLAktif = Surat::whereNotNull('dosbing_name')->count();
        $jumlahAssign = Surat::whereNull('dosbing_name')->count();

        return view('pov_koor.dashboardKoor', compact('koor', 'jumlahPKLAktif', 'jumlahAssign'));
    }
}
