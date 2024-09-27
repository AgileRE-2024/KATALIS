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

        .badge-success {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 12px;
        }

        .badge-warning {
            background-color: #ffc107;
            color: black;
            padding: 5px 10px;
            border-radius: 12px;
        }

        .badge-danger {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border-radius: 12px;
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
                                    <h4 class="card-title">Logbook</h4>
                                    <p class="card-description">
                                        Form ini digunakan untuk mengatur jadwal konsultasi dengan dosen pembimbing terkait PKL
                                    </p>
                                    <form class="forms-sample">
                                        <div class="form-group">
                                            <label for="exampleInputDate">Tanggal</label>
                                            <input type="date" class="form-control" id="exampleInputDate" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputTopik">Kegiatan</label>
                                            <textarea class="form-control" id="exampleInputTopik" rows="4" placeholder="Kegiatan" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Dokumentasi Kegiatan</label>
                                            <input type="file" name="img[]" class="file-upload-default" accept=".png">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled placeholder="Dokumentasi Kegiatan (PNG)">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Atur Jadwal</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>

                                    <!-- Tabel berdasarkan input dari form -->
                                    <h4 class="card-title mt-4">Histori Logbook</h4>
                                    <div class="table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal</th>
                                                    <th>Kegiatan</th>
                                                    <th>Dokumentasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>2024-09-27</td>
                                                    <td>Progress Laporan PKL</td>
                                                    <td><a href="#">Download PNG</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>2024-09-20</td>
                                                    <td>Penyusunan Proposal</td>
                                                    <td><a href="#">Download PNG</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>2024-09-10</td>
                                                    <td>Diskusi Persiapan PKL</td>
                                                    <td><a href="#">Download PNG</a></td>
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
    <script src="../../js/file-upload.js"></script>
    <script src="../../js/typeahead.js"></script>
    <script src="../../js/select2.js"></script>
</body>

</html>
