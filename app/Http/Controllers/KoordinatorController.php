<?php

namespace App\Http\Controllers;

use App\Models\Koordinator;
use App\Models\SuratUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KoordinatorController extends Controller
{
    // Menyimpan data koordinator baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|string|unique:koordinators',
            'email' => 'required|string|email|unique:koordinators',
            'password' => 'required|string|min:8',
            'tanggal_lahir' => 'required|date',
            'alamat_kantor' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'bidang_keahlian' => 'required|string|max:255',
        ]);

        // Buat data koordinator baru
        Koordinator::create([
            'name' => 'Ayu Sari',                          // Nama koordinator
            'nip' => '198001012000021002',                 // NIP yang unik
            'email' => 'ayusari@gmail.com',              // Email yang unik
            'password' => Hash::make('password123'),      // Enkripsi password
            'tanggal_lahir' => '1980-02-02',               // Tanggal lahir (YYYY-MM-DD)
            'alamat_kantor' => 'Jl. Pendidikan No. 2',    // Alamat kantor
            'no_hp' => '08123456780',                      // Nomor HP
            'bidang_keahlian' => 'Manajemen Pendidikan',    // Bidang keahlian
        ]);

        return response()->json(['message' => 'Data koordinator berhasil ditambahkan!'], 201);
    }

    public function index()
    {
        $pengajuans = SuratUser::all();
        return view('pov_koor/assignPembimbing', compact('pengajuans'));
    }

    public function index2()
    {
        $pengajuans = SuratUser::all();
        return view('pov_koor/pklAktif', compact('pengajuans'));
    }

   
}
