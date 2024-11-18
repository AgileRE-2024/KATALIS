<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mhs;


class WordController extends Controller
{

    public function display(Request $request)
    {
       return view('auto_proposal/auto_proposal');
    }

    public function store(Request $request)
    {
        // Store form data in session
        $request->session()->put('form_data', [
            'prodi' => $request->prodi,
            'doswal' => $request->doswal,

            'nim' => $request->nim,
            'name' => $request->name,
            'no_hp' => $request->no_hp,

            'nim2' => $request->nim2,
            'name2' => $request->name2,
            'no_hp2' => $request->no_hp2,

            'surat_ditujukan_kepada' => $request->surat_ditujukan_kepada,
            'nama_lembaga' => $request->nama_lembaga,
            'alamat' => $request->alamat,

            'keperluan' => $request->keperluan,
            'wkt_pelaksanaan' => $request->wkt_pelaksanaan,
            'tembusan' => $request->tembusan,

            'ko_prodi' => $request->ko_prodi,
            'nip_koprodi' => $request->nip_koprodi,
            'dosbing' => $request->dosbing,
            'nip_dosbing' => $request->nip_dosbing,
        ]);
        
        return redirect()->route('wordb/view/pdf');
    }

    public function index(Request $request)
    {
        // Retrieve the data from session
        $formData = $request->session()->get('form_data');
        
        // Pass data to the view
        return view('auto_proposal/hasil', compact('formData'));
    }

    public function download_pdf(Request $request)
    {
        $formData = $request->session()->get('form_data');

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(view('auto_proposal/hasil', compact('formData')));
        $mpdf->Output('PERMOHONAN_SURAT_PENELITIAN', 'D');
    }

    public function view_pdf(Request $request)
    {
        $formData = $request->session()->get('form_data');
        
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(view('auto_proposal/hasil', compact('formData')));
        $mpdf->Output();
    }
}

