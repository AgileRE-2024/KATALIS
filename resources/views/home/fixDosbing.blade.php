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
            margin-bottom: 20px; /* Add space below header */
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

        .profile-container {
            display: flex;
            align-items: center; /* Vertically center */
            justify-content: center; /* Horizontally center */
            gap: 20px;
            border-bottom: 1px solid #D9CEC6; /* Optional: Add border-bottom to profile container */
            padding-bottom: 20px; /* Add padding below profile container */
        }

        .profile-photo, .profile-form {
            flex: 1;
            max-width: 500px; /* Optional: Ensure content doesn't exceed a certain width */
        }

        .profile-photo {
            display: flex;
            justify-content: center; /* Center the photo within its container */
            align-items: center; /* Center the photo vertically */
        }

        .profile-photo img {
            width: 100%;
            height: auto;
            max-width: 150px; /* Ensure image is not too large */
            object-fit: cover;
            border-radius: 50%;
        }

        .profile-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .profile-form p {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9; /* Light background for readability */
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group p {
            margin: 0;
        }

        button {
            padding: 10px 15px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1c60a7;
        }
    </style>
</head>
<body>
    <x-sidebar></x-sidebar>
    
    <div class="content">
        <x-header></x-header>

        <div class="main-content">
            <div class="profile-container">
                <!-- Foto Profil -->
                <div class="profile-photo">
                    <img src="path-to-your-photo.jpg" alt="Foto Profil">
                </div>

                <!-- Pernyataan Profil -->
                <div class="profile-form">
                    <div class="form-group">
                        <label for="full-name">Nama Lengkap:</label>
                        <p id="full-name">Pak Bu AUSHUAW</p>
                    </div>
                    <div class="form-group">
                        <label for="nim">NIP:</label>
                        <p id="nim">187221053</p>
                    </div>
                    <div class="form-group">
                        <label for="program-study">Email:</label>
                        <p id="program-study">dosen@gmail.com</p>
                    </div>
                    <div class="form-group">
                        <label for="email">Nomor HP:</label>
                        <p id="email">11236386428723</p>
                    </div>
                    <div class="form-group">
                        <label for="phone">Alamat:</label>
                        <p id="phone">Jalan xygsduybsd</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
