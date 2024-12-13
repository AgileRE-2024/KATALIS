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

        .left-column, .right-column {
            width: 50%;
            display: flex;
            flex-direction: column;
        }

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

        .main-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            border-radius: 20px;
            z-index: 1;
        }

        .main-card .card-body {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .small-card {
            width: 100%;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            margin-bottom: 20px;
            padding: 20px;
            height: 190px;
            display: flex;
            flex-direction: column;
        }

        .card-light-green {
            background-color: #81c784;
            color: black;
        }

        .card-light-danger {
            background-color: #e57373;
            color: white;
        }

        .small-card .card-body .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: left;
        }

        .small-card .card-body .card-content {
            font-size: 16px;
            color: #0e0e0e;
        }

        .right-column {
            display: flex;
            flex-direction: column;
        }

        /* Student Info Section */
        .student-info {
            display: flex;
            margin-top: 40px;
            align-items: flex-start;
        }

        .student-photo {
            text-align: center;
            margin-right: 20px;
        }

        .student-photo img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        .student-details {
            flex: 2;
        }

        .student-details h4 {
            margin-bottom: 15px;
            font-size: 18px;
        }

        .student-details p {
            margin-bottom: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        @include('components.navbarKoor')

        <div class="container-fluid page-body-wrapper">
            @include('components.sidebarKoor')

            <div class="main-panel">
                <div class="welcome-message">
                    Welcome, {{ $koor ? $koor->name : 'Guest' }}
                </div>

                <!-- Card Container -->
                <div class="card-container">
                    <!-- Left Column (Main Card) -->
                    <div class="left-column col-md-6">
                        <div class="card main-card">
                            <div class="card-body">
                                <p class="mb-4"> </p>
                                <p class="fs-30 mb-2">"Success is not the key to happiness. Happiness is the key to success."</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column (2x1 layout of cards) -->
                    <div class="right-column col-md-6">
                        <div class="small-card card-light-green">
                            <div class="card-body">
                                <p class="card-title">Jumlah PKL Aktif</p>
                                <p class="card-content">30</p>
                            </div>
                        </div>

                        <div class="small-card card-light-danger">
                            <div class="card-body">
                                <p class="card-title">Jumlah Pembimbing Harus Ditentukan</p>
                                <p class="card-content">5</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                
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

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>
</html>
