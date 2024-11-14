<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalKonsultasi;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

    public function dosen($user_id)
    {
        // Ambil dosen yang sedang login
        $dosen_id = Auth::user()->id;

        // Periksa apakah dosen yang sedang login membimbing mahasiswa dengan user_id tersebut
        $mahasiswa = User::findOrFail($user_id);

        // Validasi: jika dosen yang login bukan pembimbing mahasiswa ini, arahkan kembali
        if ($mahasiswa->dosen_id != $dosen_id) {
            // Mengarahkan dosen ke halaman lain jika tidak sesuai
            return redirect()->route('anakBimbing')->with('error', 'Anda tidak berhak mengakses logbook mahasiswa ini.');
        }

        // Ambil data logbook berdasarkan user_id yang diteruskan dalam URL
        $jadwal_konsultasis = JadwalKonsultasi::where('user_id', $user_id)->get();

        // Kirim data logbooks ke tampilan
        return view('dosen.detilBimbingan', compact('jadwal_konsultasis'));
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
