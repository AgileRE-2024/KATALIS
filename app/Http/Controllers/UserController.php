<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function getUser(Request $request)
    {
        $user = User::where('nim', $request->nim)->first();

        if ($user) {
            return response()->json([
                'success' => true,
                'data' => [
                    'name' => $user->name,
                    'no_hp' => $user->no_hp,
                ],
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'NIM not found',
        ]);
    }

    public function show()
    {
        $user = Auth::user();

        if (!$user) {
            abort(404, 'User tidak ditemukan');
        }

        return view('/mahasiswa/profilds', compact('user'));
    }

    public function showInfoPKL()
    {
        $user = Auth::user();

        if (!$user) {
            abort(404, 'User tidak ditemukan');
        }

        $surats = \DB::table('surat_users')
            ->join('surats', 'surat_users.id_surat', '=', 'surats.id_surat')
            ->where('surat_users.nim', $user->nim)
            ->orderBy('surats.created_at', 'desc') // Atau gunakan 'surats.id_surat' jika perlu
            ->get();

        $suratTerbaru = $surats->first(); 

        return view('/mahasiswa/informasipkl', compact('user', 'suratTerbaru'));
    }

    public function reject($suratId)
    {
        $user = Auth::user();

        // Pastikan user ada
        if (!$user) {
            abort(404, 'User tidak ditemukan');
        }

        // Temukan semua surat_users berdasarkan id_surat
        $suratUsers = \DB::table('surat_users')
                        ->where('id_surat', $suratId)
                        ->get(); // Ambil semua data surat_users yang memiliki id_surat yang sama

        // Pastikan surat_users tidak kosong
        if ($suratUsers->isNotEmpty()) {
            // Ubah is_active menjadi 2 untuk semua surat dengan id_surat yang sama
            \DB::table('surat_users')
                ->where('id_surat', $suratId)
                ->update(['is_active' => 2]);

            // Menghapus id_dosen pada semua user yang memiliki id_surat yang sama
            \DB::table('users')
                ->whereIn('nim', $suratUsers->pluck('nim')) // Ambil semua nim yang terkait dengan id_surat
                ->update(['dosen_id' => null]); // Hapus id_dosen
        } else {
            return redirect()->route('worda')->with('error', 'Surat tidak ditemukan.');
        }

        // Redirect ke halaman pengajuan surat
        return redirect()->route('worda')->with('success', 'Surat ditolak dan id_dosen dihapus.');
    }

    public function updateData(Request $request)
    {
        $request->validate([
            'proposal' => 'required|mimes:pdf',
            'surat_penerimaan' => 'required|mimes:pdf',
        ]);

        $user = Auth::user(); // Ambil pengguna yang sedang login

        // Proses unggah file proposal
        if ($request->hasFile('proposal')) {
            $proposalPath = $request->file('proposal')->storeAs(
                'proposals',
                time() . '_' . $request->file('proposal')->getClientOriginalName(),
                'public'
            );
            $user->proposal_pkl = $proposalPath;
        }

        // Proses unggah file surat penerimaan
        if ($request->hasFile('surat_penerimaan')) {
            $suratPath = $request->file('surat_penerimaan')->storeAs(
                'surat_penerimaan',
                time() . '_' . $request->file('surat_penerimaan')->getClientOriginalName(),
                'public'
            );
            $user->surat_penerimaan = $suratPath;
        }

        $user->save(); // Simpan data ke database

        return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }




}