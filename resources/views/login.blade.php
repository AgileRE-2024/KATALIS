<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="./assets/login.css" rel="stylesheet" />
    <title>EduWorkTrack - Login</title>
</head>
<body>
    <div class="scroll-container">
        <div class="v2_330">
            <div class="v2_331"></div>
            <!-- Kontainer form login -->
            <div class="v2_335">
                <div class="login-form">
                    <h1>Login</h1>
                    <h2>Silahkan login dengan email dan password!</h2>
                    <!-- Form login -->
                    <div class="input-group">
                        <div class="group">
                            <label for="email" class="label">Email Address</label>
                            <input id="email" type="text" class="email-input">
                        </div>
                        <div class="group">
                            <label for="password" class="label">Password</label>
                            <input id="password" type="password" class="password-input" data-type="password">
                        </div>
                    </div>
                    <div id="login-button" class="login-button">
                        <div class="name"></div>
                        <span><a href="{{ url('profiledosen') }}">Sign In</a></span>
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </div>
            </div>
            <!-- Kolom branding kiri -->
            <div class="v2_333">
                <span class="v2_334">EduWorkTrack</span>
                <div class="v3_365"></div>
            </div>
        </div>
    </div>
</body>
</html>
