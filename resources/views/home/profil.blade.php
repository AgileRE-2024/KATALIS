<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background-color: #EBDFD7; /* Content background color */
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            color: black;
            border-bottom: 1px solid #D9CEC6 !important;
            margin-bottom: 20px; /* Add space below header */
        }

        .profile-container {
            display: flex;
            align-items: center; /* Vertically center */
            justify-content: center; /* Horizontally center */
            gap: 20px;
            border-bottom: 1px solid #D9CEC6; /* Border color for profile container */
            padding-bottom: 20px; /* Add padding below profile container */
            background-color: #EBDFD7; /* Light background for readability */
            border-radius: 4px; /* Rounded corners */
            border: 1px solid #ddd; /* Border around the profile container */
        }

        .profile-photo, .profile-form {
            flex: 1;
            max-width: 500px; /* Ensure content doesn't exceed a certain width */
        }

        .profile-photo {
            display: flex;
            justify-content: center; /* Center the photo within its container */
            align-items: center; /* Center the photo vertically */
        }

        .profile-photo img {
            width: 320px;
            height: 340px;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: 1;
            border-radius: 113px;
            overflow: hidden;
        }

        .profile-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .profile-form .form-group {
            display: flex;
            flex-direction: column;
        }

        .profile-form label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .profile-form p {
            margin: 0;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9; /* Light background for readability */
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
        <x-header>Dosen Pembimbing</x-header>

        <div class="main-content">
            <div class="profile-container">
                <!-- Profile Photo -->
                <div class="profile-photo">
                    <img src="{{ asset('assets/images/v3_710.png') }}" alt="Profile Photo"> 
                </div>

                <!-- Profile Information -->
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
