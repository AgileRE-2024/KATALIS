<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardMahasiswaController extends Controller
{
    public function index()
    {
        return view('dashboard'); // Ganti dengan nama view dashboard Anda
    }
}
