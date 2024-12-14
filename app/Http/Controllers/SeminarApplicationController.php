<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeminarApplication;
use Illuminate\Support\Facades\Auth;
use App\Models\Surat;  

class SeminarApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $seminarApplications = SeminarApplication::all(); // Fetch all applications
        return view('/mahasiswa/jadwalSeminar', compact('seminarApplications')); // Pass applications to the view
    }

    public function create()
    {
        return view('/mahasiswa/formPengajuanSeminar'); // Replace with the actual view path
    }

    public function store(Request $request)
    {
        try {
            // Validate the request
            $request->validate([
                'judul_pkl' => 'required|string|max:255',
                'tempat_pkl' => 'required|string|max:255',
                'dosen_pembimbing' => 'required|string|max:255',
                'tanggal_seminar' => 'required|date',
                'laporanPKL' => 'required|file|mimes:pdf|max:2048',
                'BuktiPersetujuan' => 'required|file|mimes:pdf|max:2048',
            ]);

            // Get current logged in user's ID
            $userId = Auth::id();

            // Check if user already has an application
            $existingApplication = SeminarApplication::where('user_id', $userId)->first();
            if ($existingApplication) {
                return redirect()->back()->with('error', 'You have already submitted an application.');
            }

            // Handle file uploads
            $laporanPKLPath = $request->file('laporanPKL')->store('uploads/laporan_pkl', 'public');
            $buktiPersetujuanPath = $request->file('BuktiPersetujuan')->store('uploads/bukti_persetujuan', 'public');

            // Create new application with user_id
            SeminarApplication::create([
                'user_id' => $userId,  // Add the user_id here
                'judul_pkl' => $request->input('judul_pkl'),
                'tempat_pkl' => $request->input('tempat_pkl'),
                'dosen_pembimbing' => $request->input('dosen_pembimbing'),
                'tanggal_seminar' => $request->input('tanggal_seminar'),
                'laporan_pkl' => $laporanPKLPath,
                'bukti_persetujuan' => $buktiPersetujuanPath,
            ]);

            return redirect()->back()->with('success', 'Seminar application submitted successfully.');
        } catch (\Exception $e) {
            \Log::error('Error saving seminar application: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error saving application: ' . $e->getMessage());
        }
    }
}
