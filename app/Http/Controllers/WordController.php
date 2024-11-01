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
        $jumlah_mahasiswa = $request->jumlah_mahasiswa;



        $template_file = match ($jumlah_mahasiswa) {
            '1' => 'auto_proposal/PERMOHONAN_SURAT_PENELITIAN.docx',
            '2' => 'auto_proposal/PERMOHONAN_SURAT_PENELITIAN (2).docx',
            '3' => 'auto_proposal/PERMOHONAN_SURAT_PENELITIAN (3).docx',
            default => 'auto_proposal/PERMOHONAN_SURAT_PENELITIAN.docx',
        };


        // Optional fields with default empty string
        $nama2 = $request->input('nama2', '');
        $nama3 = $request->input('nama3', '');
        $nim2 = $request->input('nim2', '');
        $nim3 = $request->input('nim3', '');
        $notelp2 = $request->input('notelp2', '');
        $notelp3 = $request->input('notelp3', '');


        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor($template_file);

        $phpWord->setValues([
            'nama' => $nama,
            'nama2' => $nama2,
            'nama3' => $nama3,
            'nim' => $nim,
            'nim2' => $nim2,
            'nim3' => $nim3,
            'notelp' => $notelp,
            'notelp2' => $notelp3,
            'notelp3' => $notelp3,
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

