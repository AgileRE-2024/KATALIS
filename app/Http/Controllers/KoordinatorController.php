<?php

namespace App\Http\Controllers;

use App\Models\Koordinator;
use App\Models\SuratUser;
use App\Models\Surat;
use App\Models\Dosen;
use App\Models\User;
use Illuminate\Support\Facades\DB;


use Mpdf\Mpdf;
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
        $pengajuans = SuratUser::whereHas('surat', function ($query) {
            $query->whereNotNull('dosbing_name');
        })
            ->get()
            ->groupBy('nim')
            ->map(function ($group) {
                return $group->sortByDesc('id')->first();
            });

        return view('pov_koor/pklAktif', ['pengajuans' => $pengajuans->values()]);
    }



    public function getSurat($id_surat){
        $data = Surat::where('id_surat', $id_surat)->first();
        $dete = SuratUser::where('id_surat', $id_surat)->get();
        $dosens = Dosen::all();
        return view('pov_koor/koor_auto', compact (['data', 'id_surat', 'dete', 'dosens']));
    }

    public function store2form(Request $request)
    {
        // Store form data in session
        $request->session()->put('form_data', [
            'prodi' => $request->prodi,
            'doswal' => $request->doswal,

            'nim' => $request->nim1,
            'name' => $request->name1,
            'no_hp' => $request->no_hp1,

            'nim2' => $request->nim2,
            'name2' => $request->name2,
            'no_hp2' => $request->no_hp2,

            // TEMPORARY DOANG! HARUS GANTI
            'nim3' => $request->nim3,
            'name3' => $request->name3,
            'no_hp3' => $request->no_hp3,

            'surat_ditujukan_kepada' => $request->surat_ditujukan_kepada,
            'nama_lembaga' => $request->nama_lembaga,
            'alamat' => $request->alamat,

            'keperluan' => $request->keperluan,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'tembusan' => $request->tembusan,

            'koprodi' => $request->koprodi,
            'nip_koprodi' => $request->nip_koprodi,
            'dosbing' => $request->dosbing,
            'nip_dosbing' => $request->dosbing_nip,

            'rowCount' => $request->row_count+1,
            'id_surat' => $request->id_surat,
            
        ]);

        return redirect()->route('wordc/view/pdf');
    }

    public function up_pdf(Request $request)
    {
        $formData = $request->session()->get('form_data', []);
        $uniq = $formData['id_surat'];
        
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(view('auto_proposal/hasil', compact('formData')));
        $mpdf->Output();

        $filename = 'proposal_' . $uniq . '.pdf';
        $filepath = ('../storage/app/public/' . $filename);
        $mpdf->Output($filepath, 'F');

        // Insert dosbing to database surat
        Surat::where('id_surat', $uniq)->update(['dosbing_name' => $formData['dosbing']]);

        // Insert dosbing to database user (Request Winwin)
        $nims = array_filter([
            $formData['nim'] ?? null,
            $formData['nim2'] ?? null,
            $formData['nim3'] ?? null
        ]);

        // Cari id dosen dengan nip sekian
        $id = Dosen::where('nip', $formData['nip_dosbing'])->first()->id;
        foreach ($nims as $nim) {
            User::where('nim', $nim)->update(['dosen_id' => $id]);
        }

        // Optional: Clear the session data after processing
        $request->session()->forget('form_data');

        // Optional: Return a response or redirect with the filename
        return response()->download($filepath, $filename);
                
    
    }
}