<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class DosenController extends Controller
{
    public function index()
    {
        $dosen = auth()->user();
        if(!$dosen){
            return redirect()->route('loginfix');
        }

        $mahasiswaBimbingan = User::where('dosen_id', $dosen->id)
            ->with(['logbooks', 'jadwalKonsultasi' ,'seminar'])->get();

        return view('dosen.anakBimbing', compact('mahasiswaBimbingan'));
    }

    public function detilPKL($nim)
    {
        $mahasiswa = User::where('nim', $nim)
            ->with(['surats']) // Relasi surat untuk mendapatkan data tempat PKL
            ->firstOrFail();

        if (!$mahasiswa) {
            abort(404, 'User tidak ditemukan');
        }

        $surats = \DB::table('surat_users')
            ->join('surats', 'surat_users.id_surat', '=', 'surats.id_surat')
            ->where('surat_users.nim', $mahasiswa->nim)
            ->orderBy('surats.created_at', 'desc') // Atau gunakan 'surats.id_surat' jika perlu
            ->get();

        $suratTerbaru = $surats->first();

        return view('dosen.detilPKL', compact('mahasiswa', 'suratTerbaru'));
    }



    // Menyimpan data dosen baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'nip' => 'required|string|unique:dosen',
            'email' => 'required|string|email|unique:dosen',
            'password' => 'required|string|min:8',
            'tanggal_lahir' => 'required|date',
            'alamat_kantor' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'bidang_keahlian' => 'required|string|max:255',
        ]);

        Dosen::create([
            'name' => 'Eko Purniawan',                      // Nama dosen
            'nip' => '198001011990021001',                   // NIP yang unik
            'email' => 'ekopurniawan@gmail.com',           // Email yang unik
            'password' => Hash::make('password123'),        // Enkripsi password
            'tanggal_lahir' => '1980-01-01',                 // Tanggal lahir (YYYY-MM-DD)
            'alamat_kantor' => 'Jl. Pendidikan No. 1',      // Alamat kantor
            'no_hp' => '08123456789',                        // Nomor HP
            'bidang_keahlian' => 'Ilmu Komputer',            // Bidang keahlian
        ]);
    
        return response()->json(['message' => 'Data dosen berhasil ditambahkan!'], 201);
    }

    public function isi()
    {
        // Fetch all dosens with the count of mahasiswaBimbingan
        $dosens = Dosen::withCount('mahasiswaBimbingan')->get();

        return view('pov_koor/daftarDosen', compact('dosens'));
    }

}
