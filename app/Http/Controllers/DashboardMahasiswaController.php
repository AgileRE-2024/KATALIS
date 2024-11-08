<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardMahasiswaController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('mahasiswa.dashboard', ['user' => $user]); // Ganti dengan nama view dashboard Anda
    }
}
