<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <style>
        /* Custom CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7ff;
            margin: 0;
        }

        /* Sidebar */
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

        /* Profil Card */
        .profile-card {
            position: relative;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 60px 20px 20px 20px;
            margin-top: 80px;
            border-radius: 20px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Gambar Profil */
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
        }

        /* Informasi Siswa */
        .profile-info h2 {
            font-size: 24px;
            margin-top: 40px;
            margin-bottom: 5px;
        }

        .profile-info h4 {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }

        /* Garis Pembatas */
        .profile-divider {
            width: 100%;
            height: 1px;
            background-color: #ddd;
            margin: 20px 0;
        }

        /* Detail Informasi */
        .details-section {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }

        .details-item {
            flex: 1;
            min-width: 45%;
            text-align: left;
        }

        .details-item h5 {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }

        .details-item p {
            color: #777;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Sidebar -->
    @include('components.sidebarfix')

    <!-- Main Panel -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="profile-card">
                <!-- Foto Profil -->
                <img src="/mnt/data/image.png" alt="Profile Photo" class="profile-photo">

                <!-- Informasi Profil -->
                <div class="profile-info">
                    <h2>Aamir Khan</h2>
                    <h4>123456789 - Teknik Informatika</h4>
                </div>

                <!-- Garis Pembatas -->
                <div class="profile-divider"></div>

                <!-- Detail Informasi -->
                <h3>Detail Informasi</h3>
                <div class="details-section">
                    <div class="details-item">
                        <h5>Alamat</h5>
                        <p>Jl. Mawar No. 123</p>
                    </div>
                    <div class="details-item">
                        <h5>Tanggal Lahir</h5>
                        <p>01 Januari 2000</p>
                    </div>
                    <div class="details-item">
                        <h5>Email</h5>
                        <p>aamir.khan@example.com</p>
                    </div>
                    <div class="details-item">
                        <h5>Nomor HP</h5>
                        <p>08123456789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
