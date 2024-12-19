<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <style>
        /* Custom CSS for message container */
        .content {
            text-align: center;
            margin-top: 50px;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .message-container {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            text-align: center;
        }

        .message-text {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        .message-text i {
            color: #ffcc00;
            margin-right: 10px;
        }

        .button-link {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .button-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        @include('components.navbar')
        
        <div class="container-fluid page-body-wrapper">
            @include('components.sidebarfix')

            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Profile Section -->
                    <div class="profile-card">
zz
                        <!-- Informasi Dosen (Nama, Jabatan, NIP) di tengah -->
                        <div class="profile-info">
                            <h2>Nabila S.si. M.si</h2>
                            <h4>Departemen Matematika</h4>
                            <h4>NIP: 197001011990021001</h4>
                        </div>

                        <!-- Garis Pembatas -->
                        <div class="divider"></div>

                        <!-- Detail Informasi Dosen -->
                        <div class="profile-details">
                            <!-- Kolom Pertama -->
                            <div class="column">
                                <p><strong>Nama:</strong> Nabila S.si. M.si</p>
                                <p><strong>Departemen:</strong> Matematika</p>
                                <p><strong>NIP:</strong> 197001011990021001</p>
                                <p><strong>Tanggal Lahir:</strong> 01 Januari 2004</p>
                            </div>

                            <!-- Kolom Kedua -->
                            <div class="column">
                                <p><strong>Alamat Kantor:</strong> Gedung B, Lantai 2, Universitas Airlangga</p>
                                <p><strong>Email:</strong> nabila@gmail.ac.id</p>
                                <p><strong>Nomor HP:</strong> 08123456789</p>
                                <p><strong>Bidang Keahlian:</strong> Sistem Informasi, Data Science</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
</body>

</html>

