<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function index()
    {
        $seminars = Seminar::with(['mahasiswa', 'dosen'])->get();
        return view('seminar.index', compact('seminars'));
    }

    public function create()
    {
        return view('seminar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_seminar' => 'required|date',
            'dosen_id' => 'required|exists:dosen,id',
            'mahasiswa_id' => 'required|exists:users,id',
        ]);

        Seminar::create($request->all());

        return redirect()->route('seminar.index')->with('success', 'Seminar berhasil ditambahkan!');
    }

    public function show($id)
    {
        $seminar = Seminar::with(['mahasiswa', 'dosen'])->findOrFail($id);
        return view('seminar.show', compact('seminar'));
    }

    public function edit($id)
    {
        $seminar = Seminar::findOrFail($id);
        return view('seminar.edit', compact('seminar'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal_seminar' => 'required|date',
        ]);

        $seminar = Seminar::findOrFail($id);
        $seminar->update($request->all());

        return redirect()->route('seminar.index')->with('success', 'Seminar berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $seminar = Seminar::findOrFail($id);
        $seminar->delete();

        return redirect()->route('seminar.index')->with('success', 'Seminar berhasil dihapus!');
    }
}