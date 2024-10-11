<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Link Google Font Noto Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Global styles */
        body {
            font-family: 'Noto Sans', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('{{ asset('assets/images/unair.jpg') }}');
            background-size: cover;
            background-position: center;
            position: relative;
            padding: 40px 0;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 50%;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            padding: 40px;
            position: relative;
            z-index: 2;
        }

        .logo img {
            max-width: 100px;
            margin-bottom: 20px;
        }

        .form-container {
            display: flex;
            width: 100%;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .form-left, .form-right {
            width: 48%;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
        }

        hr {
            border: none;
            border-bottom: 2px solid #444444;
            margin: 20px 0;
        }

        p {
            text-align: center;
            margin-bottom: 20px;
        }

        form label {
            display: block;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #444444;
            border-radius: 5px;
        }

        .btn-get-started {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #444444;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-get-started:hover {
            background-color: #555555;
        }

        a {
            text-decoration: none;
            color: #444444;
        }

        a:hover {
            text-decoration: underline;
        }

        .actions {
            text-align: center;
            width: 100%;
        }

        .actions a {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('assets/images/logofix.png') }}" alt="Logo">
        </div>
        <h1>Register</h1>
        
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-container">
                <!-- Left form -->
                <div class="form-left">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" id="name" required>
                    
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" name="nim" placeholder="NIM" id="nim" required>
                    
                    <label for="program_studi">Program Studi</label>
                    <input type="text" class="form-control" name="program_studi" placeholder="Program Studi" id="program_studi" required>
                    
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" id="alamat" required>
                </div>

                <!-- Right form -->
                <div class="form-right">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email" required>
                    
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
                    
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" name="no_hp" placeholder="No HP" id="no_hp" required>
                    
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
                    
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password" id="password_confirmation" required>
                </div>
            </div>

            <div class="actions">
                <button type="submit" class="btn-get-started scrollto">Register</button>
                <a href="loginfix">Sudah punya akun?</a>
            </div>
        </form>
    </div>
</body>
</html>
