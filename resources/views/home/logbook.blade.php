<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            color: black;
            border-bottom: 1px solid #D9CEC6;
        }

        .left-header h1 {
            margin: 0;
        }

        .right-header {
            display: flex;
            align-items: center;
        }

        .user-info {
            margin-right: 20px;
            text-align: right;
        }

        .user-info p {
            margin: 0;
            font-weight: bold;
        }

        .form-container {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"], 
        .form-group input[type="file"], 
        .form-group input[type="date"], 
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group textarea {
            resize: vertical;
            height: 100px;
        }

        .form-group button {
            padding: 10px 15px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #1c60a7;
        }

        .button-link {
            display: inline-block;
            padding: 10px 15px;
            background-color: #D9CEC6;
            color: black;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            position: relative;
            transition: background-color 0.3s ease;
        }

        .button-link::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background-color: rgba(0, 0, 0, 0.1);
            z-index: -1;
            border-radius: 8px;
        }

        .button-link:hover {
            background-color: #f5f5f5;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <x-sidebar></x-sidebar>
    
    <div class="content">
        <x-header></x-header>

        <div class="main-content">
            <p>Ini adalah halaman Profil.</p>

            <!-- Logbook Section -->
            <div class="form-container">
                <h2>Logbook</h2>
                <form id="logbook-form">
                    <div class="form-group">
                        <label for="logbook-date">Tanggal:</label>
                        <input type="date" id="logbook-date" name="logbook-date">
                    </div>
                    <div class="form-group">
                        <label for="logbook-activity">Kegiatan:</label>
                        <input type="text" id="logbook-activity" name="logbook-activity">
                    </div>
                    <div class="form-group">
                        <label for="logbook-result">Hasil Kegiatan:</label>
                        <textarea id="logbook-result" name="logbook-result"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="logbook-documentation">Dokumentasi:</label>
                        <input type="file" id="logbook-documentation" name="logbook-documentation">
                    </div>
                    <button type="submit">Tambah Logbook</button>
                </form>

                <h3>Histori Logbook</h3>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Kegiatan</th>
                            <th>Hasil Kegiatan</th>
                            <th>Dokumentasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2024-09-15</td>
                            <td>Pengembangan Fitur</td>
                            <td>Fitur berhasil ditambahkan</td>
                            <td><a href="#">Lihat Dokumentasi</a></td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>

            <!-- Kartu Kendali Bimbingan Section -->
            <div class="form-container">
                <h2>Kartu Kendali Bimbingan</h2>
                <form id="kartu-bimbingan-form">
                    <div class="form-group">
                        <label for="kartu-bimbingan-date">Tanggal:</label>
                        <input type="date" id="kartu-bimbingan-date" name="kartu-bimbingan-date">
                    </div>
                    <div class="form-group">
                        <label for="kartu-bimbingan-result">Hasil Bimbingan:</label>
                        <textarea id="kartu-bimbingan-result" name="kartu-bimbingan-result"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kartu-bimbingan-approval">Approval:</label>
                        <input type="checkbox" id="kartu-bimbingan-approval" name="kartu-bimbingan-approval">
                        <label for="kartu-bimbingan-approval">Sudah disetujui</label>
                    </div>
                    <button type="submit">Tambah Kartu Kendali Bimbingan</button>
                </form>

                <h3>Histori Kartu Kendali Bimbingan</h3>
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Hasil Bimbingan</th>
                            <th>Approval</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2024-09-15</td>
                            <td>Diskusi tentang progress proyek</td>
                            <td>Disetujui</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
