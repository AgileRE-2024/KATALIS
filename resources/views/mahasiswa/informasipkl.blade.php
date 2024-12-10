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
                        <form method="POST" action="{{ url('/submit-informasi-pkl') }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Role (Input) -->
                            <h4>Role:</h4>
                            <input type="text" class="form-control mb-3" name="role" placeholder="Masukkan Role Anda" required>

                            <!-- Periode PKL (Date Input) -->
                            {{-- <h4>Periode PKL:</h4> --}}
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
                            <p>
                                @if($suratTerbaru->filepath)
                                    <a href="{{ asset('storage/' . $suratTerbaru->filepath) }}" target="_blank">Surat Permohonan</a>
                                @else
                                    Tidak ada informasi
                                @endif
                            </p>

                            <!-- Surat Penerimaan (File Upload) -->
                            <h4>Surat Penerimaan:</h4>
                            <input type="file" class="form-control mb-3" name="surat_penerimaan" accept=".pdf" required>

                            <!-- Submit and Cancel Buttons -->
                            <button type="submit" class="btn btn-primary">Simpan Informasi PKL</button>
                            <a href="{{ url('/') }}" class="btn btn-light">Batal</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
