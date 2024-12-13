<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardKoorController extends Controller
{
    public function index()
    {
        $koor = Auth::guard('koordinator')->user();

        return view('pov_koor.dashboardKoor', compact('koor'));
    }
}
