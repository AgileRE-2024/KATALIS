<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalKonsultasi;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Log;

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

    public function index1()
    {
        $dosen = Auth::guard('dosen')->user(); // Mendapatkan dosen yang sedang login
        if (!$dosen) {
            return redirect()->route('loginfix');
        }

        // Ambil semua jadwal konsultasi milik dosen yang sedang login
        $jadwals = JadwalKonsultasi::whereHas('user', function ($query) use ($dosen) {
            $query->where('dosen_id', $dosen->id);
        })
            ->orderBy('tanggal_konsultasi', 'asc')
            ->orderBy('waktu_konsultasi', 'asc')
            ->get();


        // Return the view with the jadwals data
        return view('dosen.jadwalBimbinganDosen', compact('jadwals'));
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
        $validated = $request->validate([
            'tanggal_konsultasi' => 'required|date',
            'waktu_konsultasi' => 'required|date_format:H:i',
            'topik' => 'required|string|max:255',
            'hasil_bimbingan' => 'nullable|file|mimes:png|max:2048',
            'dokumentasi_bimbingan' => 'nullable|file|mimes:png|max:2048',
        ]);


        $hasilBimbinganPath = $request->file('hasil_bimbingan')
            ? $request->file('hasil_bimbingan')->store('hasil_bimbingan', 'public')
            : null;

        $dokumentasiBimbinganPath = $request->file('dokumentasi_bimbingan')
            ? $request->file('dokumentasi_bimbingan')->store('dokumentasi_bimbingan', 'public')
            : null;

        JadwalKonsultasi::create([
            'user_id' => Auth::id(),
            'tanggal_konsultasi' => $validated['tanggal_konsultasi'],
            'waktu_konsultasi' => $validated['waktu_konsultasi'],
            'topik' => $validated['topik'],
            'hasil_bimbingan' => $hasilBimbinganPath,
            'dokumentasi_bimbingan' => $dokumentasiBimbinganPath,
            'status' => JadwalKonsultasi::STATUS_MENUNGGU,
        ]);

        return redirect()->back()->with('success', 'Jadwal konsultasi berhasil ditambahkan.');
    }


    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string|in:Approved,Waiting Approval,Revised',
        ]);

        $jadwal = JadwalKonsultasi::findOrFail($id);

        // Validasi apakah dosen yang login adalah pembimbing mahasiswa ini
        if ($jadwal->user->dosen_id != Auth::id()) {
            return redirect()->back()->with('error', 'Anda tidak memiliki akses untuk mengubah status jadwal ini.');
        }

        $jadwal->status = $request->status;
        $jadwal->save();

        return redirect()->back()->with('success', 'Status jadwal berhasil diperbarui.');
    }

}
