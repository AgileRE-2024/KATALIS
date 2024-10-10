<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    public function index(Request $request){
        $nama = $request->nama;
        $nim = $request->nim;
        $notelp = $request->notelp;
        $prodi = $request->prodi;
        $doswal = $request->doswal;
        $surat_ditujukan_kepada = $request->surat_ditujukan_kepada;
        $nama_lembaga = $request->nama_lembaga;
        $alamat = $request->alamat;
        $keperluan = $request->keperluan;
        $waktu_pelaksanaan = $request->waktu_pelaksanaan;
        $tembusan = $request->tembusan;
        $date = $request->date;
        $ko_prodi = $request->ko_prodi;
        $dosbing = $request->dosbing;
        $nip_koprodi = $request->nip_koprodi;
        $nip_dosbing = $request->nip_dosbing;

        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('auto_proposal/PERMOHONAN_SURAT_PENELITIAN.docx');

        $phpWord->setValues([
            'nama' => $nama,
            'nim' => $nim,
            'notelp' => $notelp,
            'prodi' => $prodi,
            'doswal' => $doswal,
            'surat_ditujukan_kepada' => $surat_ditujukan_kepada,
            'nama_lembaga' => $nama_lembaga,
            'alamat' => $alamat,
            'keperluan' => $keperluan,
            'waktu_pelaksanaan' => $waktu_pelaksanaan,
            'tembusan' => $tembusan,
            'date' => $date,
            'ko_prodi' => $ko_prodi,
            'dosbing' => $dosbing,
            'nip_koprodi' => $nip_koprodi,
            'nip_dosbing' => $nip_dosbing

        ]);

        $phpWord->saveAs('auto_proposal/hasilEdit.docx');
    }
}

