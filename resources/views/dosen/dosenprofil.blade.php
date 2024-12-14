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

        /* Informasi Dosen */
        .profile-info {
            margin-top: 30px;
            text-align: center; 
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

        /* Detail Informasi Dosen */
        .profile-details {
            display: flex;
            justify-content: space-between;
            text-align: left;
            padding-left: 20px;
            flex-wrap: wrap;
        }

        .profile-details .column {
            width: 48%;
            margin-bottom: 15px;
        }

        .profile-details p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .profile-details p strong {
            font-weight: bold;
        }

        /* Media Query untuk Responsivitas */
        @media (max-width: 768px) {
            .profile-details .column {
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
        @include('components.navbarDosen')

        <div class="container-fluid page-body-wrapper">
            @include('components.sidebarDosen')

            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Profile Section -->
                    <div class="profile-card">
                        <!-- Informasi Dosen (Nama, Jabatan, NIP) di tengah -->
                        <div class="profile-info">
                            <h2>{{ $dosen->name }}</h2>
                            <h4>{{ $dosen->department }}</h4>
                            <h4>NIP: {{ $dosen->nip }}</h4>
                        </div>

                        <!-- Garis Pembatas -->
                        <div class="divider"></div>

                        <!-- Detail Informasi Dosen -->
                        <div class="profile-details">
                            <!-- Kolom Pertama -->
                            <div class="column">
                                <p><strong>Nama:</strong> {{ $dosen->name }}</p>
                                <p><strong>NIP:</strong> {{ $dosen->nip }}</p>
                                <p><strong>Tanggal Lahir:</strong> {{ $dosen->tanggal_lahir }}</p>
                            </div>

                            <!-- Kolom Kedua -->
                            <div class="column">
                                <p><strong>Email:</strong> {{ $dosen->email }}</p>
                                <p><strong>Nomor HP:</strong> {{ $dosen->no_hp }}</p>
                                <p><strong>Bidang Keahlian:</strong> {{ $dosen->bidang_keahlian }}</p>
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
