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
            background-color: #EBDFD7;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            background-color: #EBDFD7;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            color: black;
            border-bottom: 1px solid #D9CEC6 !important;
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
        .form-group input[type="date"], 
        .form-group input[type="file"],
        .form-group input[disabled] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f5f5f5;
            color: #555;
        }

        .form-group textarea {
            resize: vertical;
            height: 100px;
        }
    </style>
</head>
<body>
    <x-sidebar></x-sidebar>
    
    <div class="content">
        <x-header>Informasi PKL</x-header>

        <div class="main-content">
            <div class="form-container">
                <form id="pkl-form">
                    <div class="form-group">
                        <label for="topik-pkl">Nama Perusahaan:</label>
                        <input type="text" id="topik-pkl" name="topik-pkl" value="Perusahaan xyz" disabled>
                    </div>
                    <div class="form-group">
                        <label for="alamat-perusahaan">Alamat Perusahaan:</label>
                        <input type="text" id="alamat-perusahaan" name="alamat-perusahaan" value="Jalan jsdheieife" disabled>
                    </div>
                    <div class="form-group">
                        <label for="role">Role:</label>
                        <input type="text" id="role" name="role" value="Data Analyst" disabled>
                    </div>
                    <div class="form-group">
                        <label for="durasi-pkl-start">Durasi PKL (Tanggal Mulai):</label>
                        <input type="date" id="durasi-pkl-start" name="durasi-pkl-start" value="2024-10-12" disabled>
                    </div>
                    <div class="form-group">
                        <label for="durasi-pkl-end">Durasi PKL (Tanggal Akhir):</label>
                        <input type="date" id="durasi-pkl-end" name="durasi-pkl-end" value="2025-01-12" disabled>
                    </div>
                    <div class="form-group">
                        <label for="surat-permohonan">Surat Permohonan PKL:</label>
                        <input type="text" id="surat-permohonan" name="surat-permohonan" value="laporan.pdf" disabled>
                    </div>
                    <div class="form-group">
                        <label for="surat-penerimaan">Surat Penerimaan PKL:</label>
                        <input type="text" id="surat-penerimaan" name="surat-penerimaan" value="laporan.pdf" disabled>
                    </div>

                    <!-- Button 'Ubah' telah dihapus -->
                </form>
            </div>
        </div>
    </div>  
</body>
</html>
