<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <style>
        body {
            background-color: #f5f7ff;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Kotak Profil */
        .profile-card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 60px 20px 20px;
            position: relative;
            text-align: center;
            margin-top: 40px;
        }

        /* Foto Profil */
        .profile-photo {
            position: absolute;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Nama Siswa dan Jurusan/NIM */
        .profile-info {
            margin-top: 30px;
            text-align: center; /* Agar teks ini berada di tengah */
        }

        .profile-info h2 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .profile-info h4 {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }

        /* Garis Pembatas */
        .divider {
            width: 100%;
            height: 2px;
            background-color: #ddd;
            margin: 20px 0;
        }

        /* Detail Informasi Siswa */
        .student-details {
            display: flex;
            justify-content: space-between;
            text-align: left;
            padding-left: 20px;
            flex-wrap: wrap;
        }

        .student-details .column {
            width: 48%;
            margin-bottom: 15px;
        }

        .student-details p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .student-details p strong {
            font-weight: bold;
        }

        /* Media Query untuk Responsivitas */
        @media (max-width: 768px) {
            .student-details .column {
                width: 100%;
            }
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            transition: width 0.3s ease;
        }

        .sidebar.minimized {
            width: 80px;
        }

        /* Main Panel */
        .main-panel {
            flex-grow: 1;
            background-color: #f8f9fa;
            padding: 20px;
            margin-left: 10px;
        }

        .content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
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
                    <!-- Profile Section -->
                    <div class="profile-card">
                        <!-- Foto Profil -->
                        <img src="./assets/images/faces/face28.jpg" alt="Foto Profil" class="profile-photo">


                        <!-- Informasi Siswa (Nama, NIM, Jurusan) di tengah -->
                        <div class="profile-info">
                            <h2>{{Auth::user()->name}}</h2>
                            <h4>{{Auth::user()->program_studi}}</h4>
                            <h4>{{Auth::user()->nim}}</h4>
                        </div>

                        <!-- Garis Pembatas -->
                        <div class="divider"></div>

                        <!-- Detail Informasi Siswa -->
                        <div class="student-details">
                            <!-- Kolom Pertama -->
                            <div class="column">
                                <p><strong>Nama:</strong> {{Auth::user()->name}}</p>
                                <p><strong>Jurusan:</strong> {{Auth::user()->program_studi}}</p>
                                <p><strong>NIM:</strong> {{Auth::user()->nim}}</p>
                                <p><strong>Tanggal Lahir:</strong> {{Auth::user()->tanggal_lahir}}</p>
                            </div>

                            <!-- Kolom Kedua -->
                            <div class="column">
                                <p><strong>Alamat:</strong> {{Auth::user()->alamat}}</p>
                                <p><strong>Alamat Asal:</strong> EMANG ADA DI DATABASE????</p>
                                <p><strong>Email:</strong> {{Auth::user()->email}}</p>
                                <p><strong>Nomor HP:</strong> {{Auth::user()->no_hp}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Scripts -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <script src="../../js/template.js"></script>
</body>

</html>
