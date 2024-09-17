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

        .form-group label .required {
            color: #B80A0A;
        }

        .form-group input[type="text"], 
        .form-group input[type="file"], 
        .form-group input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
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
    transition: background-color 0.3s ease;
    outline: none; /* Menghapus outline hitam saat tombol diklik */
    border: none;  /* Menghapus border tombol */
}

.button-link:hover {
    background-color: #f5f5f5;
}

    </style>
</head>
<body>
    <x-sidebar></x-sidebar>
    
    <div class="content">
        <x-header>Seminar</x-header>

        <div class="main-content">
            <div class="form-container">
                <form id="pkl-form">
                    <div class="form-group">
                        <label for="topik-pkl">Judul PKL: <span class="required">*</span></label>
                        <input type="text" id="topik-pkl" name="topik-pkl" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat-perusahaan">Tempat PKL: <span class="required">*</span></label>
                        <input type="text" id="alamat-perusahaan" name="alamat-perusahaan" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Dosen Pembimbing PKL: <span class="required">*</span></label>
                        <input type="text" id="role" name="role" required>
                    </div>
                    <div class="form-group">
                        <label for="durasi-pkl-start">Tanggal Seminar (Tanggal Mulai): <span class="required">*</span></label>
                        <input type="date" id="durasi-pkl-start" name="durasi-pkl-start" required>
                    </div>
                    <div class="form-group">
                        <label for="surat-permohonan">Laporan PKL (PDF): <span class="required">*</span></label>
                        <input type="file" id="surat-permohonan" name="surat-permohonan" accept=".pdf" required>
                    </div>
                    <div class="form-group">
                        <label for="surat-penerimaan">Bukti Persetujuan (PDF): <span class="required">*</span></label>
                        <input type="file" id="surat-penerimaan" name="surat-penerimaan" accept=".pdf" required>
                    </div>

                    <button type="submit" class="button-link">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('pkl-form').addEventListener('submit', function(event) {
            var isValid = true;

            // Validate that all required fields are filled
            document.querySelectorAll('input[required]').forEach(function(input) {
                if (!input.value) {
                    isValid = false;
                    alert(input.name + ' harus diisi.');
                }
            });

            // Validate that uploaded files are PDF
            var laporanFile = document.getElementById('surat-permohonan').files[0];
            var persetujuanFile = document.getElementById('surat-penerimaan').files[0];

            if (laporanFile && laporanFile.type !== 'application/pdf') {
                isValid = false;
                alert('Laporan PKL harus berupa file PDF.');
            }

            if (persetujuanFile && persetujuanFile.type !== 'application/pdf') {
                isValid = false;
                alert('Bukti Persetujuan harus berupa file PDF.');
            }

            // Prevent form submission if validation fails
            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
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

        .form-group label .required {
            color: #B80A0A;
        }

        .form-group input[type="text"], 
        .form-group input[type="file"], 
        .form-group input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
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
            transition: background-color 0.3s ease;
        }

        .button-link:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <x-sidebar></x-sidebar>
    
    <div class="content">
        <x-header>Seminar</x-header>

        <div class="main-content">
            <div class="form-container">
                <form id="pkl-form">
                    <div class="form-group">
                        <label for="topik-pkl">Judul PKL: <span class="required">*</span></label>
                        <input type="text" id="topik-pkl" name="topik-pkl" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat-perusahaan">Tempat PKL: <span class="required">*</span></label>
                        <input type="text" id="alamat-perusahaan" name="alamat-perusahaan" required>
                    </div>
                    <div class="form-group">
                        <label for="role">Dosen Pembimbing PKL: <span class="required">*</span></label>
                        <input type="text" id="role" name="role" required>
                    </div>
                    <div class="form-group">
                        <label for="durasi-pkl-start">Tanggal Seminar (Tanggal Mulai): <span class="required">*</span></label>
                        <input type="date" id="durasi-pkl-start" name="durasi-pkl-start" required>
                    </div>
                    <div class="form-group">
                        <label for="surat-permohonan">Laporan PKL (PDF): <span class="required">*</span></label>
                        <input type="file" id="surat-permohonan" name="surat-permohonan" accept=".pdf" required>
                    </div>
                    <div class="form-group">
                        <label for="surat-penerimaan">Bukti Persetujuan (PDF): <span class="required">*</span></label>
                        <input type="file" id="surat-penerimaan" name="surat-penerimaan" accept=".pdf" required>
                    </div>

                    <button type="submit" class="button-link">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('pkl-form').addEventListener('submit', function(event) {
            var isValid = true;

            // Validate that all required fields are filled
            document.querySelectorAll('input[required]').forEach(function(input) {
                if (!input.value) {
                    isValid = false;
                    alert(input.name + ' harus diisi.');
                }
            });

            // Validate that uploaded files are PDF
            var laporanFile = document.getElementById('surat-permohonan').files[0];
            var persetujuanFile = document.getElementById('surat-penerimaan').files[0];

            if (laporanFile && laporanFile.type !== 'application/pdf') {
                isValid = false;
                alert('Laporan PKL harus berupa file PDF.');
            }

            if (persetujuanFile && persetujuanFile.type !== 'application/pdf') {
                isValid = false;
                alert('Bukti Persetujuan harus berupa file PDF.');
            }

            // Prevent form submission if validation fails
            if (!isValid) {
                event.preventDefault();
            }
        });
    </script>
</body>
</html>
