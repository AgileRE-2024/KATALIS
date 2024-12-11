<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <style>
        .main-panel {
            flex-grow: 1;
            background-color: #f5f7ff;
            padding: 20px;
            margin-left: 10px;
        }

        .content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
        }

        .info-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .info-card h4 {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .info-card p, .info-card .form-control {
            font-size: 16px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-light {
            background-color: #f8f9fa;
            border-color: #f8f9fa;
        }

        .btn-light:hover {
            background-color: #e2e6ea;
            border-color: #dae0e5;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('components.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('components.sidebarfix')
            <div class="main-panel">
                <div class="content-wrapper">
                    <h2>Informasi PKL</h2>

                    <div class="info-card">
                        <h4>Nama Perusahaan:</h4>
                        <p>{{ $suratTerbaru->nama_lembaga ?? 'Tidak ada informasi' }}</p>

                        <h4>Alamat Perusahaan:</h4>
                        <p>{{ $suratTerbaru->alamat ?? 'Tidak ada informasi' }}</p>

                        <!-- Form Input for Editable Fields -->
                        <form method="POST" action="{{ route('updateData') }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Periode PKL (Date Input) -->
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>Periode Start:</h4>
                                    <p>{{ $suratTerbaru->wkt_start ?? 'Tidak ada informasi' }}</p>
                                </div>
                                <div class="col-md-6">
                                    <h4>Periode Berakhir:</h4>
                                    <p>{{ $suratTerbaru->wkt_end ?? 'Tidak ada informasi' }}</p>
                                </div>
                            </div>

                            <!-- Surat Permohonan (File Upload) -->
                            <h4>Surat Permohonan:</h4>
                            @if ($suratTerbaru)
                                <p>
                                    <a href="{{ asset('storage/' . str_replace('../storage/app/public/', '', $suratTerbaru->filepath)) }}">{{ $suratTerbaru->filename ?? 'Tidak ada Surat' }}</a>
                                    </a>
                                </p>
                            @else
                                <p>Surat tidak ditemukan.</p>
                            @endif

                            <!-- Proposal (File Upload) -->
                            <h4>Proposal:</h4>
                            @if ($user->proposal_pkl)
                                <p><a href="{{ asset('storage/' . $user->proposal_pkl) }}" target="_blank">Lihat Proposal</a></p>
                            @else
                                <p>Belum diunggah</p>
                                <input type="file" class="form-control mb-3" name="proposal" accept=".pdf" required>
                            @endif

                            <!-- Surat Penerimaan (File Upload) -->
                            <h4>Surat Penerimaan:</h4>
                            @if ($user->surat_penerimaan)
                                <p><a href="{{ asset('storage/' . $user->surat_penerimaan) }}" target="_blank">Lihat Surat Penerimaan</a></p>
                            @else
                                <p>Belum diunggah</p>
                                <input type="file" class="form-control mb-3" name="surat_penerimaan" accept=".pdf" required>
                            @endif

                            <button type="submit" class="btn btn-primary">Diterima dan Update Data</button>

                            <!-- Tombol Ditolak -->
                            <a href="{{ route('reject', ['suratId' => $suratTerbaru->id_surat]) }}" class="btn btn-light">Ditolak</a>

                            
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
