<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Siswa - Aamir Khan</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7ff;
        }

        /* Navbar */
        .navbar {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 24px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        /* Sidebar */
        .sidebar {
            width: 200px;
            height: 100vh;
            background-color: #2c3e50;
            position: fixed;
            top: 50px; /* Di bawah navbar */
            left: 0;
            padding-top: 20px;
            color: white;
            z-index: 900;
        }

        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #34495e;
        }

        /* Main Content */
        .main-panel {
            margin-left: 220px; /* Offset dari sidebar */
            padding: 20px;
            margin-top: 70px; /* Offset dari navbar */
        }

        .profile-container {
            width: 100%;
            max-width: 600px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            text-align: center;
        }

        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            position: absolute;
            top: -75px;
            left: 50%;
            transform: translateX(-50%);
            border: 5px solid white;
        }

        .profile-info {
            margin-top: 100px;
        }

        .profile-info h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .profile-info h4 {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
        }

        .profile-divider {
            border-top: 1px solid #ccc;
            margin: 20px 0;
        }

        /* Detail Informasi */
        .details-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .details-item {
            width: 48%;
            margin-bottom: 10px;
        }

        .details-item h5 {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }

        .details-item p {
            font-size: 14px;
            color: #777;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-panel {
                margin-left: 0;
                padding: 10px;
            }

            .profile-container {
                width: 90%;
            }

            .details-item {
                width: 100%;
            }

            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                top: 0;
            }

            .navbar {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        Sistem Informasi Siswa
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#">Dashboard</a>
        <a href="#">Profil Siswa</a>
        <a href="#">Nilai</a>
        <a href="#">Pengaturan</a>
    </div>

    <!-- Main Panel -->
    <div class="main-panel">
        <div class="profile-container">
            <!-- Foto Profil -->
            <img src="https://via.placeholder.com/150" alt="Profile Photo" class="profile-photo">
            
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
</body>
</html>
