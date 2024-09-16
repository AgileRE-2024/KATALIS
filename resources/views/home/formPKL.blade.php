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

        .form-group input[type="text"], .form-group input[type="file"], .form-group input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group textarea {
            resize: vertical; /* Allows vertical resizing */
            height: 100px; /* Default height */
        }

        .form-group input[type="checkbox"] {
            margin-right: 10px;
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
            position: relative; /* Position relative for ::before */
            transition: background-color 0.3s ease;
        }

        .button-link::before {
            content: ''; /* Empty content to create a box */
            position: absolute;
            top: -10px; /* Adjust positioning */
            left: -10px;
            right: -10px;
            bottom: -10px;
            background-color: rgba(0, 0, 0, 0.1); /* Light gray box */
            z-index: -1; /* Ensure it's behind the button */
            border-radius: 8px; /* Border radius for the rectangle */
        }

        .button-link:hover {
            background-color: #f5f5f5;
        }

    </style>
</head>
<body>
    <x-sidebar></x-sidebar>
    
    <div class="content">
        <x-header></x-header>

        <div class="main-content">
            <div class="form-container">
                <form id="pkl-form">
                    <div class="form-group">
                        <label for="topik-pkl">Nama Perusahaan:</label>
                        <input type="text" id="topik-pkl" name="topik-pkl">
                    </div>
                    <div class="form-group">
                        <label for="alamat-perusahaan">Alamat Perusahaan:</label>
                        <input type="text" id="alamat-perusahaan" name="alamat-perusahaan">
                    </div>
                    <div class="form-group">
                        <label for="role">Role:</label>
                        <input type="text" id="role" name="role">
                    </div>
                    <div class="form-group">
                        <label for="durasi-pkl-start">Durasi PKL (Tanggal Mulai):</label>
                        <input type="date" id="durasi-pkl-start" name="durasi-pkl-start">
                    </div>
                    <div class="form-group">
                        <label for="durasi-pkl-end">Durasi PKL (Tanggal Akhir):</label>
                        <input type="date" id="durasi-pkl-end" name="durasi-pkl-end">
                    </div>
                    <div class="form-group">
                        <label for="surat-permohonan">Surat Permohonan PKL:</label>
                        <input type="file" id="surat-permohonan" name="surat-permohonan">
                    </div>
                    <div class="form-group">
                        <label for="surat-penerimaan">Surat Penerimaan PKL:</label>
                        <input type="file" id="surat-penerimaan" name="surat-penerimaan">
                    </div>

                    <a href="fixPKL" class="button-link">Simpan</a>
                </form>
            </div>
        </div>
    </div>  
</body>
</html>
