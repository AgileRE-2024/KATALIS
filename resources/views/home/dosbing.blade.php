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

        .message-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            justify-content: center;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        .message-text {
            display: flex;
            align-items: center;
            font-size: 18px;
            color: #333;
        }

        .message-text i {
            font-size: 24px;
            margin-right: 10px;
            color: #f39c12; /* Set color of alert icon */
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
            position: relative; /* Position relative for ::before */
            transition: background-color 0.3s ease;
        }

        .button-link::before {
            content: ''; /* Empty content to create a box */
            position: absolute;
            top: -10px; /* Adjust positioning */
            left: -10px;
            right: -10px;
            bottom: -10px;
            background-color: rgba(0, 0, 0, 0.1); /* Light gray box */
            z-index: -1; /* Ensure it's behind the button */
            border-radius: 8px; /* Border radius for the rectangle */
        }

        .button-link:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <x-sidebar></x-sidebar>
    
    <div class="content">
        <x-header></x-header>

        <div class="main-content">
            <div class="message-container">
                <div class="message-text">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Mohon maaf anda belum mempunyai dosen pembimbing</span>
                </div>
                <a href="formPengajuanDosbing" class="button-link">Ajukan permohonan dosen pembimbing</a>
            </div>
        </div>
    </div>
</body>
</html>
