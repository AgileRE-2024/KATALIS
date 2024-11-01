<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bimbingan;

class BimbinganController extends Controller
{
    public function index()
    {
        // Ambil semua data bimbingan dari database
        $bimbingans = Bimbingan::all();
        return view('mahasiswa/kartuKendaliBimbingan', compact('bimbingans')); // Pastikan nama view sesuai
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'tanggal_bimbingan' => 'required|date',
            'hasil_bimbingan' => 'required|string',
            'dokumentasi_bimbingan' => 'nullable|image|mimes:png|max:2048',
        ]);

        // Simpan data ke database
        $bimbingan = new Bimbingan();
        $bimbingan->tanggal_bimbingan = $request->tanggal_bimbingan;
        $bimbingan->hasil_bimbingan = $request->hasil_bimbingan;

        // Proses upload gambar
        if ($request->hasFile('dokumentasi_bimbingan')) {
            $file = $request->file('dokumentasi_bimbingan');
            $filePath = $file->store('uploads', 'public'); // Menyimpan ke storage/app/public/uploads
            $bimbingan->dokumentasi_bimbingan = $filePath;
        }

        $bimbingan->save();

        return redirect()->back()->with('success', 'Jadwal bimbingan berhasil ditambahkan.');
    }
}
