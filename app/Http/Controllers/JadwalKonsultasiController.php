<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalKonsultasi;
use Illuminate\Support\Facades\Auth;

class JadwalKonsultasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index()
    {
        $user = Auth::user();
        $jadwal_konsultasis = $user->jadwalKonsultasi;
        return view('mahasiswa/jadwalBimbingan', compact('jadwal_konsultasis'));
    }

    public function store(Request $request)
    {
        // Ambil ID user yang sedang login
        $user_id = Auth::id();

        // Validasi input
        $request->validate([
            'tanggal_konsultasi' => 'required|date',
            'waktu_konsultasi' => 'required|date_format:H:i',
            'topik' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        JadwalKonsultasi::create([
            'user_id' => Auth::id(), 
            'tanggal_konsultasi' => $request->tanggal_konsultasi,
            'waktu_konsultasi' => $request->waktu_konsultasi,
            'topik' => $request->topik,
        ]);

        return redirect()->back()->with('success', 'Jadwal konsultasi berhasil ditambahkan.');
    }

    public function uploadHasil(Request $request, $id)
    {
        $request->validate([
            'hasil_bimbingan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->file('hasil_bimbingan')) {
            $path = $request->file('hasil_bimbingan')->store('hasil_bimbingan', 'public');
            $jadwal = JadwalKonsultasi::find($id);
            $jadwal->hasil_bimbingan = $path;
            $jadwal->save();
        }

        return redirect()->back()->with('success', 'Hasil Bimbingan berhasil diunggah');
    }

    public function uploadDokumentasi(Request $request, $id)
    {
        $request->validate([
            'dokumentasi_bimbingan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->file('dokumentasi_bimbingan')) {
            $path = $request->file('dokumentasi_bimbingan')->store('dokumentasi_bimbingan', 'public');
            $jadwal = JadwalKonsultasi::find($id);
            $jadwal->dokumentasi_bimbingan = $path;
            $jadwal->save();
        }

        return redirect()->back()->with('success', 'Dokumentasi Bimbingan berhasil diunggah');
    }
}
