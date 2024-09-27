<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
    <style>
        .container-scroller {
            display: flex;
            flex-direction: column;
        }

        .main-panel {
            display: flex;
            flex-direction: column;
            background-color: #f5f7ff;
            padding: 20px;
            margin-left: 10px;
        }

        .welcome-message {
            text-align: left;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        /* Card Container */
        .card-container {
            display: flex;
            justify-content: space-between;
        }

        /* Ensure both columns take up the same height */
        .left-column, .right-column {
            width: 50%;
            display: flex;
            flex-direction: column;
        }

        /* Main Card with background image */
        .main-card {
            width: 450px;
            height: 403px;
            margin-bottom: 20px;
            border-radius: 20px;
            background: url('./assets/images/dashboard/people.svg') no-repeat center center/cover;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Overlay for dimming the background image */
        .main-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4); /* Adjust this for darker overlay */
            border-radius: 20px;
            z-index: 1;
        }

        /* Content on top of the background */
        .main-card .card-body {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        /* Smaller cards */
        .small-card {
            width: 200px;
            flex-grow: 1;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            margin-bottom: 20px;
            padding: 20px; /* Jarak dalam kartu */
            height: 180px; /* Tinggi tetap untuk kartu */
            display: flex;
            flex-direction: column; /* Mengatur arah konten */
        }

        .card-light-green {
            background-color: #81c784;
            color: black;
        }

        .card-light-danger {
            background-color: #e57373;
            color: white;
        }

        .card-light-warning {
            background-color: #ffb74d;
            color: black;
        }

        .card-light-primary {
            background-color: #64b5f6;
            color: black;
        }

        /* Style untuk judul di small card */
        .small-card .card-body .card-title {
            font-size: 16px; /* Ukuran font judul */
            font-weight: bold; /* Membuat judul menjadi bold */
            margin-bottom: 10px; /* Jarak bawah judul */
            text-align: left; /* Menempatkan judul di kiri */
        }

        /* Style untuk isi kartu di small card */
        .small-card .card-body .card-content {

            font-size: 16px; /* Ukuran font isi kartu */
            color: #0e0e0e;

        }

        /* Ensure the rows of the right column take equal space */
        .row-2x2 {
            display: flex;
            justify-content: space-between;
            flex-grow: 1;
        }

        .row-2x2 > .col-md-6 {
            display: flex;
            flex-grow: 1;
        }

        /* Optional for spacing adjustments */
        .right-column .small-card {
            margin-left: 10px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        @include('components.navbar')

        <div class="container-fluid page-body-wrapper">
            @include('components.sidebarfix')

            <div class="main-panel">
                <div class="welcome-message">
                    Welcome, Aamir!
                </div>

                <!-- Card Container -->
                <div class="card-container">
                    <!-- Left Column (Main Card) -->
                    <div class="left-column col-md-6">
                        <div class="card main-card">
                            <div class="card-body">
                                <p class="mb-4">Motivational Quote</p>
                                <p class="fs-30 mb-2">"Success is not the key to happiness. Happiness is the key to success."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column (2x2 grid of cards) -->
                    <div class="right-column col-md-6">
                        <div class="row-2x2">
                            <div class="col-md-6 mb-4">
                                <div class="card small-card card-light-green">
                                    <div class="card-body">
                                        <p class="card-title">Deadline Laporan</p> <!-- Judul card -->
                                        <p class="card-content">30 September 2024</p> <!-- Isi card -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="card small-card card-light-danger">
                                    <div class="card-body">
                                        <p class="card-title">Hari Tersisa PKL</p> <!-- Judul card -->
                                        <p class="card-content">45 Hari</p> <!-- Isi card -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-2x2">
                            <div class="col-md-6 mb-4">
                                <div class="card small-card card-light-warning">
                                    <div class="card-body">
                                        <p class="card-title">Jumlah Logbook</p> <!-- Judul card -->
                                        <p class="card-content">15</p> <!-- Isi card -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="card small-card card-light-primary">
                                    <div class="card-body">
                                        <p class="card-title">Konsultasi Dilakukan</p> <!-- Judul card -->
                                        <p class="card-content">5</p> <!-- Isi card -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Student Info -->
                <div class="student-info">
                    <div class="student-photo">
                        <img src="{{ asset('images/student.jpg') }}" alt="Student Photo">
                    </div>
                    <div class="student-details">
                        <h4>Nama Siswa: John Doe</h4>
                        <p>Jurusan: Teknik Informatika</p>
                        <p>NIM: 123456789</p>
                    </div>
                    <div class="student-details">
                        <h4>Detail Informasi Siswa:</h4>
                        <p>Alamat: Jl. Pendidikan No. 10</p>
                        <p>TTL: 15 Mei 2002</p>
                        <p>Email: johndoe@mail.com</p>
                        <p>Telepon: 08123456789</p>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
                    </div>
                </footer>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="js/dataTables.select.min.js"></script>
</body>
</html>
