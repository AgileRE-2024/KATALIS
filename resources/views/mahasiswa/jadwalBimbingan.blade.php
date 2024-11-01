<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <style>
        /* Custom CSS for sidebar */
        .sidebar {
            width: 250px; /* Set desired sidebar width */
            transition: width 0.3s ease; /* Smooth transition for width change */
        }

        .sidebar.minimized {
            width: 80px; /* Width when minimized */
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

        /* Custom styles for table */
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
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
                                        Form ini digunakan untuk mengatur jadwal konsultasi dengan dosen pembimbing terkait PKL
                                    </p>
                                    <form class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputDate">Tanggal Konsultasi</label>
                                            <input type="date" class="form-control" id="exampleInputDate" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTime">Waktu Konsultasi</label>
                                            <input type="time" class="form-control" id="exampleInputTime" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTopik">Topik yang Akan Dibahas</label>
                                            <textarea class="form-control" id="exampleInputTopik" rows="4" placeholder="Masukkan topik atau pertanyaan yang ingin dibahas" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Atur Jadwal</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>

                                    <!-- Tabel histori pengajuan jadwal bimbingan -->
                                    <h4 class="card-title mt-4">Histori Pengajuan Jadwal Bimbingan</h4>
                                    <div class="table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal Konsultasi</th>
                                                    <th>Waktu Konsultasi</th>
                                                    <th>Topik</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2024-10-01</td>
                                                    <td>10:00 AM</td>
                                                    <td>Progress Laporan PKL</td>
                                                    <td><span class="badge badge-success">Disetujui</span></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>2024-09-25</td>
                                                    <td>02:00 PM</td>
                                                    <td>Proposal PKL</td>
                                                    <td><span class="badge badge-warning">Menunggu Persetujuan</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>2024-09-15</td>
                                                    <td>09:00 AM</td>
                                                    <td>Persiapan PKL</td>
                                                    <td><span class="badge badge-danger">Ditolak</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
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
    <script src="../../js/file-upload.js"></script>
    <script src="../../js/typeahead.js"></script>
    <script src="../../js/select2.js"></script>
</body>

</html>
