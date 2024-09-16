<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-color: #EBDFD7; /* Warna latar belakang halaman */
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            background-color: #EBDFD7; /* Warna latar belakang khusus untuk konten */
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

        .download-button {
            display: inline-block;
            color: #2980b9;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            margin-right: 10px;
        }

        .download-button i {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <x-sidebar></x-sidebar>
    
    <div class="content">
        <x-header>Download</x-header>

        <div class="main-content">

            <!-- Tabel Logo -->
            <div class="form-container">
                <h2>Logo</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Logo</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Logo Unair (Biru)</td>
                            <td><a href="#" class="download-button"><i class="fas fa-download"></i> Download</a></td>
                        </tr>
                        <tr>
                            <td>Lambang Universitas Airlangga</td>
                            <td><a href="#" class="download-button"><i class="fas fa-download"></i> Download</a></td>
                        </tr>
                        <tr>
                            <td>Logo Smart University</td>
                            <td><a href="#" class="download-button"><i class="fas fa-download"></i> Download</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Tabel Template -->
            <div class="form-container">
                <h2>Template</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Template</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Template Surat Pengantar PKL</td>
                            <td><a href="#" class="download-button"><i class="fas fa-download"></i> Download</a></td>
                        </tr>
                        <tr>
                            <td>Template Proposal</td>
                            <td><a href="#" class="download-button"><i class="fas fa-download"></i> Download</a></td>
                        </tr>
                        <tr>
                            <td>Template Laporan Akhir</td>
                            <td><a href="#" class="download-button"><i class="fas fa-download"></i> Download</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
