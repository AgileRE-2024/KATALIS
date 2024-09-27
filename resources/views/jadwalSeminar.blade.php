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

        /* For minimized sidebar */
        .sidebar.minimized {
            width: 80px; /* Width when minimized */
        }

        /* Make sure the content area stretches to fill the remaining space */
        .main-panel {
            flex-grow: 1; /* Allow main panel to grow */
            background-color: #f5f7ff; /* Set background color matching content */
            padding: 20px; /* Optional padding */
            margin-left: 10px; /* Prevent content from touching sidebar */
        }

        /* Center the content */
        .content-wrapper {
            max-width: 1200px; /* Set max-width for the content */
            margin: 0 auto; /* Center the content */
            padding: 20px;
        }

        /* Optional: Adjust background color of the right empty space */
        .page-body-wrapper {
            background-color: #f8f9fa; /* Set to the same color as main-panel */
        }

        /* Custom styles for table */
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
            background-color: #4b49ac;
        }

        /* Countdown styles */
        .countdown {
            font-weight: bold;
            color: #ff5722;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .detail-info {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('components.navbar')
        <div class="container-fluid page-body-wrapper">
            <!-- Sidebar -->
            @include('components.sidebarfix')
            <!-- Main Panel -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <h4 class="card-title">Jadwal Seminar</h4>
                    <p class="card-description">
                        Berikut adalah jadwal seminar yang telah diajukan. Countdown di kolom terakhir menunjukkan waktu yang tersisa menuju seminar.
                    </p>
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul PKL</th>
                                    <th>Tempat PKL</th>
                                    <th>Dosen Pembimbing PKL</th>
                                    <th>Tanggal Seminar</th>
                                    <th>Laporan PKL (PDF)</th>
                                    <th>Bukti Persetujuan (PDF)</th>
                                    <th>Countdown</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Baris 1 -->
                                <tr>
                                    <td>1</td>
                                    <td>Pengembangan Aplikasi Mobile</td>
                                    <td>PT. Teknologi Maju</td>
                                    <td>Dr. Budi Santoso</td>
                                    <td>2024-12-15</td>
                                    <td><a href="#">Download</a></td>
                                    <td><a href="#">Download</a></td>
                                    <td><span class="countdown" data-date="2024-12-15"></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 
                            {{ date('Y') }}. Premium 
                            <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.
                        </span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with 
                            <i class="ti-heart text-danger ml-1"></i>
                        </span>
                    </div>
                </footer>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="../../vendors/select2/select2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/file-upload.js"></script>
    <script src="../../js/typeahead.js"></script>
    <script src="../../js/select2.js"></script>
    <!-- End custom js for this page-->

    <!-- Countdown Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const countdownElements = document.querySelectorAll('.countdown');

            countdownElements.forEach(element => {
                const seminarDate = new Date(element.getAttribute('data-date')).getTime();

                const updateCountdown = setInterval(() => {
                    const now = new Date().getTime();
                    const distance = seminarDate - now;

                    if (distance < 0) {
                        clearInterval(updateCountdown);
                        element.innerHTML = "Seminar telah berlangsung";
                        return;
                    }

                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    element.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
                }, 1000);
            });
        });
    </script>
</body>

</html>
