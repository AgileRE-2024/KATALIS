<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logbook;
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
