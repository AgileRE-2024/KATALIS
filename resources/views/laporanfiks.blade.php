<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <style>
        /* Custom CSS for main content */
        .main-panel {
            flex-grow: 1;
            background-color: #f5f7ff;
            padding: 20px;
            margin-left: 10px;
        }

        .content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
        }

        .form-container {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 5px; /* Set margin to 5px from the sidebar and screen edges */
            background-color: #fff;
            width: calc(100% - 10px); /* Set width of the box to 80% minus margins */
        }

        .form-container h2 {
            margin-bottom: 15px;
            font-size: 20px; /* You can adjust this size */
        }

        .header-title {
            text-align: left; /* Align the title to the left */
            margin-bottom: 20px; /* Space below title */
            font-size: 24px; /* Title font size */
            font-weight: bold; /* Make the title bold */
        }

        .form-group {
            margin-bottom: 15px;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            padding: 5px 10px; /* Reduced padding for smaller button */
            font-size: 14px; /* Reduced font size */
            text-decoration: none;
            border-radius: 4px;
            margin-top: 10px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        @include('components.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('components.sidebarfix')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="header-title">Laporan</div> <!-- Title aligned left and bold -->

                    <div class="main-content">

                        <!-- Laporan Akhir PKL Section -->
                        <div class="form-container">
                            <h2>Laporan Akhir PKL</h2>
                            <form id="laporan-pkl-form">
                                <div class="form-group">
                                    <label for="laporan-pkl-file">Upload Laporan Akhir PKL (PDF):</label>
                                </div>
                                <div class="form-group">
                                    <input type="file" id="laporan-pkl-file" name="laporan-pkl-file" accept=".pdf">
                                    <div id="file-error" class="error" style="display:none;">Only PDF files are allowed.</div>
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah Laporan Akhir PKL</button>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
