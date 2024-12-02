<?php

namespace App\Http\Controllers;

use Mpdf\Mpdf;
use Illuminate\Http\Request;
use App\Models\Surat;
use App\Models\SuratUser;



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

            // TEMPORARY DOANG! HARUS GANTI
            'nim3' => $request->nim3,
            'name3' => $request->name3,
            'no_hp3' => $request->no_hp3,

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

            'rowCount' => $request->row_count-1,
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

        
        // Generate a unique filename
        $uniq = hexdec(uniqid());
        $filename = 'proposal_' . $uniq . '.pdf';
        
        // Full path where the file will be saved
        $filepath = ('../storage/app/public/' . $filename);
        
        // Save the PDF to the storage/app/ directory
        $mpdf->Output($filepath, 'F');

        // Insert filename into database
        $pdfRecord = new Surat();
        $pdfRecord->id_surat = $uniq;
        $pdfRecord->filename = $filename;
        $pdfRecord->filepath = $filepath;
        $pdfRecord->creator = $request->user()->nim;
        $pdfRecord->save();

        // Retrieve form data
        $formData = $request->session()->get('form_data', []);

        // Collect NIMs
        $nims = array_filter([
            $formData['nim'] ?? null,
            $formData['nim2'] ?? null,
            $formData['nim3'] ?? null
        ]);

        // Save NIMs to database
        foreach ($nims as $nim) {
            SuratUser::create([
                'nim' => $nim,
                'id_surat' => $uniq,
                'is_active' => 1,
            ]);
        }
        


        // Optional: Clear the session data after processing
        $request->session()->forget('form_data');

        // Optional: Return a response or redirect with the filename
        return response()->download($filepath, $filename);
                
    
    }

    public function masukdb(Request $request)
    {}
        
}

