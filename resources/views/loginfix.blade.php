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
      font-family: 'Noto Sans', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-image: url('{{ asset('assets/images/unair.jpg') }}');
      background-size: cover;
      background-position: center;
      position: relative;
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
      max-width: 450px;
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
      <img src="{{ asset('assets/images/logofix.png') }}" alt="Login Image">
    </div>
    <h1>LOGIN</h1>
    <form action="{{ route('loginfix') }}" method="POST">
      @csrf
      <label for="email">Email</label>
      <input type="text" class="form-control" name="email" placeholder="Email" id="email" required>

      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password" id="password" required>

      <button type="submit" class="btn-get-started scrollto">Login</button>
    </form>
    <p>
      <a href="/register">Don't have an account?</a>
    </p>
  </div>
</body>
</html>
