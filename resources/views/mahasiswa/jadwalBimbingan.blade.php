<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <style>
        .sidebar { width: 250px; transition: width 0.3s ease; }
        .sidebar.minimized { width: 80px; }
        .main-panel { flex-grow: 1; background-color: #f5f7ff; padding: 20px; margin-left: 10px; }
        .content-wrapper { max-width: 1200px; margin: 0 auto; }
        .page-body-wrapper { background-color: #f8f9fa; }
        table { width: 100%; margin-top: 20px; border-collapse: collapse; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 12px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('components.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('components.sidebarfix')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jadwal Konsultasi Bimbingan</h4>
                                    <p class="card-description">
                                        Form ini digunakan untuk mengatur jadwal konsultasi dengan dosen pembimbing terkait PKL
                                    </p>
                                    
                                    <!-- Success message display -->
                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif
                                    
                                    <form class="forms-sample" method="POST" action="{{ url('/jadwalBimbingan') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputDate">Tanggal Konsultasi</label>
                                            <input type="date" class="form-control" name="tanggal_konsultasi" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTime">Waktu Konsultasi</label>
                                            <input type="time" class="form-control" name="waktu_konsultasi" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTopik">Topik yang Akan Dibahas</label>
                                            <textarea class="form-control" name="topik" rows="4" placeholder="Masukkan topik atau pertanyaan yang ingin dibahas" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Atur Jadwal</button>
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </form>

                                    <!-- Consultation History Table -->
                                    <h4 class="card-title mt-4">Histori Bimbingan</h4>
                                    <div class="table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal Konsultasi</th>
                                                    <th>Waktu Konsultasi</th>
                                                    <th>Topik</th>
                                                    <th>Status</th>
                                                    <th>Hasil Bimbingan</th>
                                                    <th>Dokumentasi Bimbingan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($jadwal_konsultasis as $index => $jadwal)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $jadwal->tanggal_konsultasi }}</td>
                                                        <td>{{ $jadwal->waktu_konsultasi }}</td>
                                                        <td>{{ $jadwal->topik }}</td>
                                                        <td>
                                                            <span class="badge 
                                                                @if ($jadwal->status == 'Approved') badge-success
                                                                @elseif ($jadwal->status == 'Waiting Approval') badge-warning
                                                                @elseif ($jadwal->status == 'Revised') badge-danger
                                                                @else badge-secondary
                                                                @endif">
                                                                {{ $jadwal->status }}
                                                            </span>
                                                        </td>
                                                        <td>
                                                            @if($jadwal->hasil_bimbingan)
                                                                <img src="{{ asset('storage/' . $jadwal->hasil_bimbingan) }}" alt="Hasil Bimbingan" width="50">
                                                            @endif
                                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#hasilModal{{ $index }}">Input Hasil</button>
                                                        </td>
                                                        <td>
                                                            @if($jadwal->dokumentasi_bimbingan)
                                                                <img src="{{ asset('storage/' . $jadwal->dokumentasi_bimbingan) }}" alt="Dokumentasi Bimbingan" width="50">
                                                            @endif
                                                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#dokumentasiModal{{ $index }}">Input Dokumentasi</button>
                                                        </td>
                                                    </tr>

                                                    <!-- Hasil Bimbingan Modal -->
                                                    <div class="modal fade" id="hasilModal{{ $index }}" tabindex="-1" aria-labelledby="hasilModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="hasilModalLabel">Upload Hasil Bimbingan</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="{{ url('/uploadHasil', $jadwal->id) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <input type="file" name="hasil_bimbingan" accept="image/*" required>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary">Upload</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Dokumentasi Bimbingan Modal -->
                                                    <div class="modal fade" id="dokumentasiModal{{ $index }}" tabindex="-1" aria-labelledby="dokumentasiModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="dokumentasiModalLabel">Upload Dokumentasi Bimbingan</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="{{ url('/uploadDokumentasi', $jadwal->id) }}" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <input type="file" name="dokumentasi_bimbingan" accept="image/*" required>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary">Upload</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="../../vendors/select2/select2.min.js"></script>
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
</body>

</html>
