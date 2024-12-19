<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <style>
        .sidebar {
            width: 250px;
            transition: width 0.3s ease;
        }

        .sidebar.minimized {
            width: 80px;
        }

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

        .page-body-wrapper {
            background-color: #f8f9fa;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
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
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Jadwal Konsultasi Bimbingan</h4>
                                    <p class="card-description">
                                        Form ini digunakan untuk mengisi jadwal konsultasi dengan dosen pembimbing yang
                                        telah dijadwalkan sebelumnya
                                    </p>
                                    <p class="card-description">
                                        Untuk bagian hasil bimbingan dan dokumentasi bimbingan pada tabel setelah klik
                                        button tambah histori konsultasi
                                    </p>

                                    <!-- Success message display -->
                                    @if (session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    <form class="forms-sample" method="POST" action="{{ url('/jadwalBimbingan') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputDate">Tanggal Konsultasi</label>
                                            <input type="date" class="form-control" name="tanggal_konsultasi"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTime">Waktu Konsultasi</label>
                                            <input type="time" class="form-control" name="waktu_konsultasi" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTopik">Topik yang Dibahas</label>
                                            <textarea class="form-control" name="topik" rows="4"
                                                placeholder="Masukkan topik atau pertanyaan yang ingin dibahas" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Hasil Bimbingan (Kartu Kendali Bimbingan)</label>
                                            <input type="file" name="hasil_bimbingan" class="file-upload-default"
                                                accept=".png" id="fileInput" required>
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled
                                                    placeholder="Hasil Bimbingan (Kartu Kendali Bimbingan)"
                                                    id="fileName" value="">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button"
                                                        id="uploadButton">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Dokumentasi Bimbingan</label>
                                            <input type="file" name="dokumentasi_bimbingan"
                                                class="file-upload-default" accept=".png" id="fileInput2" required>
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled
                                                    placeholder="Hasil Bimbingan (Kartu Kendali Bimbingan)"
                                                    id="fileName2" value="">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button"
                                                        id="uploadButton2">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Tambah Histori
                                            Bimbingan</button>
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
                                                    <th>Hasil Bimbingan</th>
                                                    <th>Dokumentasi Bimbingan</th>
                                                    <th>Status</th>
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
                                                            @if ($jadwal->hasil_bimbingan)
                                                                <a href="{{ asset('storage/' . $jadwal->hasil_bimbingan) }}"
                                                                    target="_blank">Download Hasil Bimbingan</a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($jadwal->dokumentasi_bimbingan)
                                                                <a href="{{ asset('storage/' . $jadwal->dokumentasi_bimbingan) }}"
                                                                    target="_blank">Download Dokumentasi Bimbingan</a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <span
                                                                class="badge 
                                                                @if ($jadwal->status == 'Approved') badge-success
                                                                @elseif ($jadwal->status == 'Waiting Approval') badge-warning
                                                                @elseif ($jadwal->status == 'Revised') badge-danger
                                                                @else badge-secondary @endif">
                                                                {{ $jadwal->status }}
                                                            </span>
                                                        </td>
                                                    </tr>
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
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                            Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin
                                template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('uploadButton').addEventListener('click', function() {
            document.getElementById('fileInput').click();
        });

        document.getElementById('fileInput').addEventListener('change', function() {
            const fileName = this.files[0] ? this.files[0].name : '';
            document.getElementById('fileName').value = fileName;
        });

        document.getElementById('uploadButton2').addEventListener('click', function() {
            document.getElementById('fileInput2').click();
        });

        document.getElementById('fileInput2').addEventListener('change', function() {
            const fileName = this.files[0] ? this.files[0].name : '';
            document.getElementById('fileName2').value = fileName;
        });
    </script>

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
