<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use App\Models\SeminarApplication;
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

    public function indexDosen()
    {
        $seminarApplications = SeminarApplication::with('user')     
            ->select('id', 'user_id', 'tanggal_seminar', 'grade', 'status_lulus')
            ->get();

        return view('dosen.seminarDosen', compact('seminarApplications'));
    }

    public function saveGrade(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'seminar_id' => 'required|exists:seminar_applications,id',
            'kehadiran' => 'required|numeric|min:0|max:100',
            'pemahaman' => 'required|numeric|min:0|max:100',
            'kerja_tim' => 'required|numeric|min:0|max:100',
            'luaran' => 'required|numeric|min:0|max:100',
            'laporan' => 'required|numeric|min:0|max:100',
        ]);

        try {
            // Find the seminar first
            $seminar = SeminarApplication::find($request->seminar_id);
            if (!$seminar) {
                return response()->json(['message' => 'Data seminar tidak ditemukan.'], 404);
            }

            // Menghitung nilai akhir
            $totalNilai = ($request->kehadiran * 0.2) +
                ($request->pemahaman * 0.2) +
                ($request->kerja_tim * 0.2) +
                ($request->luaran * 0.2) +
                ($request->laporan * 0.2);

            // Menentukan grade huruf
            $grade = $this->convertGrade($totalNilai);

            // Only update grade and status_lulus
            $seminar->grade = $grade;
            $seminar->status_lulus = in_array($grade, ['A', 'AB', 'B', 'BC', 'C']) ? 'Lulus' : 'Tidak Lulus';
            $seminar->save();

            return response()->json([
                'success' => true,
                'message' => 'Nilai berhasil disimpan.',
                'data' => [
                    'grade' => $grade,
                    'status' => $seminar->status_lulus
                ]
            ]);
        } catch (\Exception $e) {
            \Log::error('Grade save error: ' . $e->getMessage());
            return response()->json(['message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }


    // Helper function to convert numeric grade to letter grade
    private function convertGrade($nilai)
    {
        if ($nilai >= 86)
            return 'A';
        if ($nilai >= 78)
            return 'AB';
        if ($nilai >= 70)
            return 'B';
        if ($nilai >= 62)
            return 'BC';
        if ($nilai >= 54)
            return 'C';
        if ($nilai >= 40)
            return 'D';
        return 'E';
    }



}