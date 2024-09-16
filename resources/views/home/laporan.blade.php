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
            background-color: #EBDFD7; /* Warna latar belakang halaman */
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            background-color: #EBDFD7; /* Warna latar belakang khusus untuk konten */
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            color: black;
            border-bottom: 1px solid #D9CEC6;
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

        .form-group input[type="text"], 
        .form-group input[type="file"], 
        .form-group input[type="date"], 
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .form-group textarea {
            resize: vertical;
            height: 100px;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <x-sidebar></x-sidebar>
    
    <div class="content">
        <x-header>Laporan</x-header>

        <div class="main-content">

            <!-- Laporan Akhir PKL Section -->
            <div class="form-container">
                <h2>Laporan Akhir PKL</h2>
                <form id="laporan-pkl-form">
                    <div class="form-group">
                        <label for="laporan-pkl-file">Upload Laporan Akhir PKL:</label>
                        <input type="file" id="laporan-pkl-file" name="laporan-pkl-file">
                    </div>
                    <button type="submit">Tambah Laporan Akhir PKL</button>
                </form>
            </div>

            <!-- Submission Status Section -->
            <div class="form-container">
                <h2>Submission Status</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Submission Status</th>
                            <th>Grading Status</th>
                            <th>Time Remaining</th>
                            <th>Last Modified</th>
                            <th>Submission Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Submitted</td>
                            <td>Graded</td>
                            <td>2 days</td>
                            <td>2024-09-14</td>
                            <td>Good progress, keep it up!</td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
