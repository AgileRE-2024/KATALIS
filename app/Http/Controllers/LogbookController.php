<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logbook;
use App\Models\User;

use Illuminate\Support\Facades\Auth;


class LogbookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }

    public function index()
    {
        $user = Auth::user();
        $logbooks = $user->logbooks; 
        return view('/mahasiswa/logbook', compact('logbooks')); // Kirim data ke view
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
        $logbooks = Logbook::where('user_id', $user_id)->get();

        // Kirim data logbooks ke tampilan
        return view('dosen.detilLogbook', compact('logbooks'));
    }




    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kegiatan' => 'required|string',
            'dokumentasi' => 'required|file|mimes:png|max:2048', // Validasi file
        ]);

        // Menyimpan file ke storage
        $fileName = time() . '.' . $request->dokumentasi->extension();
        $request->dokumentasi->storeAs('uploads', $fileName, 'public');

        // Menyimpan data ke database
        Logbook::create([
            'user_id' => Auth::id(),
            'tanggal' => $request->tanggal,
            'kegiatan' => $request->kegiatan,
            'dokumentasi' => $fileName,
        ]);

        return redirect()->back()->with('success', 'Logbook berhasil disimpan!')->with('file_name', $fileName);
    }
}
