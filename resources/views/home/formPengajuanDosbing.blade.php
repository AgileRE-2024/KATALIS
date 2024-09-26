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
            background-color: #EBDFD7; /* Page background color */
            margin: 0;
            font-family: Arial, sans-serif;
        }

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
            border-bottom: 1px solid #D9CEC6 !important;
        }

        .form-container {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9; /* Background color for the form container */
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .required-label::after {
            content: " *";
            color: #B80A0A;
        }

        .form-group input[type="text"], .form-group input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #fff; /* Input background color for readability */
        }

        .form-group input[type="checkbox"], .form-group input[type="radio"] {
            margin-right: 10px;
        }

        .form-group button {
            padding: 10px 15px;
            background-color: #D9CEC6;
            color: black;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: white;
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

        .radio-group {
            display: flex;
            align-items: center;
            gap: 20px; /* Space between radio buttons */
        }
    </style>
</head>
<body>
    <x-sidebar></x-sidebar>
    
    <div class="content">
        <x-header>Dosen Pembimbing</x-header>

        <div class="main-content">
            <div class="form-container">
                <form id="pkl-form" onsubmit="return validateForm()" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="topik-pkl" class="required-label">Rencana Judul/Topik PKL:</label>
                        <input type="text" id="topik-pkl" name="topik-pkl" required>
                    </div>
                    <div class="form-group">
                        <label for="nama-perusahaan" class="required-label">Nama Perusahaan/Organisasi:</label>
                        <input type="text" id="nama-perusahaan" name="nama-perusahaan" required>
                    </div>
                    <div class="form-group">
                        <label for="draft-proposal" class="required-label">Draft Proposal PKL (format .pdf):</label>
                        <input type="file" id="draft-proposal" name="draft-proposal" accept="application/pdf" required> <!-- Only PDF files -->
                    </div>
                    <div class="form-group">
                        <label class="required-label">Pilih Kategori PKL:</label>
                        <div class="radio-group">
                            <label><input type="radio" name="kategori" value="individu" required> Individu</label>
                            <label><input type="radio" name="kategori" value="berkelompok" required> Berkelompok</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama-kelompok">Nama Kelompok Lainnya (jika ada):</label>
                        <input type="text" id="nama-kelompok" name="nama-kelompok">
                    </div>
                    <div class="form-group">
                        <button type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>  

    <script>
        function validateForm() {
            var topikPkl = document.getElementById("topik-pkl").value;
            var namaPerusahaan = document.getElementById("nama-perusahaan").value;
            var draftProposal = document.getElementById("draft-proposal").value;
            var kategori = document.querySelector('input[name="kategori"]:checked');

            if (!topikPkl || !namaPerusahaan || !draftProposal || !kategori) {
                alert("Semua field wajib diisi kecuali Nama Kelompok.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
