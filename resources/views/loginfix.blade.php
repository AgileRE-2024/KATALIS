<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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
      font-family: 'Noto Sans', sans-serif; /* Terapkan font Noto Sans */
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-image: url('{{ asset('assets/images/unair.jpg') }}');
      background-size: cover;
      background-position: center;
      position: relative;
    }

    /* Overlay untuk mengurangi opacity latar belakang */
    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5); /* Opacity 50% */
      z-index: 1;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center; /* Untuk menempatkan logo di tengah */
      max-width: 450px;
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
      padding: 40px;
      position: relative;
      z-index: 2; /* Agar container berada di atas overlay */
    }

    /* Logo styling */
    .logo img {
      max-width: 100px; /* Sesuaikan ukuran logo */
      margin-bottom: 20px; /* Tambahkan jarak antara logo dan form */
    }

    /* Form styling */
    .login {
      width: 100%;
    }

    form {
      margin: auto;
      width: 100%;
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

    /* Input styling */
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

    /* Tautan lupa kata sandi */
    a {
      text-decoration: none;
      color: #444444;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
      <img src="{{ asset('assets/images/logofix.png') }}" alt="Login Image">
    </div>
    <div class="login">
      <form action="/loginproses" method="post">
        <h1>LOGIN</h1>
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username" id="username" required>
        
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>
        
        <a href="/dashboard" class="btn-get-started scrollto">Login</a>
        <p>
          <a href="/register">Don't have an account?</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
