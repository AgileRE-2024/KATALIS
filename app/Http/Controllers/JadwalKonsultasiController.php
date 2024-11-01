<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalKonsultasi;

class JadwalKonsultasiController extends Controller
{
    public function index()
    {
        // Ambil semua jadwal konsultasi untuk histori
        $jadwal_konsultasis = JadwalKonsultasi::all();
        return view('mahasiswa/jadwalBimbingan', compact('jadwal_konsultasis'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'tanggal_konsultasi' => 'required|date',
            'waktu_konsultasi' => 'required|date_format:H:i',
            'topik' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        JadwalKonsultasi::create([
            'tanggal_konsultasi' => $request->tanggal_konsultasi,
            'waktu_konsultasi' => $request->waktu_konsultasi,
            'topik' => $request->topik,
        ]);

        return redirect()->back()->with('success', 'Jadwal konsultasi berhasil ditambahkan.');
    }
}
