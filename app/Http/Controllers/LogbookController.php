<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logbook;

class LogbookController extends Controller
{
    public function index()
{
    $logbooks = Logbook::all(); // Ambil semua data logbook
    return view('logbook', compact('logbooks')); // Kirim data ke view
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
            'tanggal' => $request->tanggal,
            'kegiatan' => $request->kegiatan,
            'dokumentasi' => $fileName,
        ]);

        return redirect()->back()->with('success', 'Logbook berhasil disimpan!')->with('file_name', $fileName);
    }
}
