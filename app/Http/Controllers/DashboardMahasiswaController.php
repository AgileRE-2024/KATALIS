<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Surat;
use App\Models\Logbook;
use App\Models\JadwalKonsultasi;

class DashboardMahasiswaController extends Controller
{
    public function index()
    {
        $user = auth()->user(); // Mengambil pengguna yang sedang login

        // Ambil data surat berdasarkan user login
        $surat = Surat::where('creator', $user->id)->first();

        // Deadline Laporan: 21 hari setelah wkt_end
        $deadlineLaporan = $surat ? Carbon\Carbon::parse($surat->wkt_end)->addDays(21)->format('d F Y') : 'Tidak Ada Data';

        // Hari Tersisa PKL: selisih antara wkt_end dan tanggal saat ini
        $hariTersisa = $surat ? Carbon\Carbon::now()->diffInDays(Carbon\Carbon::parse($surat->wkt_end), false) : 0;

        // Jumlah logbook untuk user login
        $jumlahLogbook = Logbook::where('user_id', $user->id)->count();

        // Jumlah konsultasi untuk user login
        $jumlahKonsultasi = JadwalKonsultasi::where('user_id', $user->id)->count();

        // Kirim data ke view
        return view('mahasiswa.dashboard', [
            'user' => $user,
            'deadlineLaporan' => $deadlineLaporan,
            'hariTersisa' => $hariTersisa > 0 ? $hariTersisa : 'Sudah Berakhir',
            'jumlahLogbook' => $jumlahLogbook,
            'jumlahKonsultasi' => $jumlahKonsultasi,
        ]);
    }

}
