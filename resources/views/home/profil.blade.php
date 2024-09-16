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
            margin: 0; /* Reset body margin */
            font-family: Arial, sans-serif;
            background-color: #EBDFD7; /* Background color for the body */
        }

        /* Sidebar Styling */
        x-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px; /* Sidebar width */
            background-color: #333; /* Dark sidebar */
            color: #fff;
            padding-top: 20px;
            padding-left: 10px;
        }

        /* Content Section */
        .content {
            margin-left: 250px; /* Ensure content does not overlap the sidebar */
            padding: 20px;
            background-color: #EBDFD7; /* Background color for content area */
        }

        /* Header Styling */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            color: black;
            border-bottom: 1px solid #D9CEC6;
            margin-bottom: 20px; 
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

        /* Profile Section Styling */
        .profile-container {
            display: flex;
            align-items: center; /* Vertically center */
            justify-content: center; /* Horizontally center */
            gap: 20px;
            border-bottom: 1px solid #D9CEC6;
            padding-bottom: 20px;
        }

        .profile-photo, .profile-form {
            flex: 1;
            max-width: 500px;
        }

        .profile-photo {
            display: flex;
            justify-content: center;
            align-items: center;
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

        .profile-form p {
            padding: 8px;
            border: 1px solid #D9CEC6;
            border-radius: 4px;
            background-color: #ffffff; /* White background for profile info */
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

        /* Button Styling */
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
    <!-- Sidebar -->
    <x-sidebar>
        <!-- Add your sidebar content here -->
        <p>Sidebar content</p>
    </x-sidebar>
    
    <!-- Main Content -->
    <div class="content">
        <x-header>Profil</x-header>

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
                        <p id="full-name">Eunike Alfrita MW</p>
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM:</label>
                        <p id="nim">187221053</p>
                    </div>
                    <div class="form-group">
                        <label for="program-study">Program Studi:</label>
                        <p id="program-study">Sistem Informasi</p>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <p id="email">winwinhara@gmail.com</p>
                    </div>
                    <div class="form-group">
                        <label for="phone">Nomor HP:</label>
                        <p id="phone">123456789</p>
                    </div>
                    <div class="form-group">
                        <label for="dosen-wali">Dosen Wali:</label>
                        <p id="dosen-wali">Pak xys</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
