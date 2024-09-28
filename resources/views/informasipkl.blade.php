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

        .info-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
        }

        .info-card h4 {
            margin-bottom: 10px;
            font-size: 16px; /* Set font size for h4 to match p */
        }

        .info-card p {
            font-size: 16px; /* You can adjust this if you want a different size */
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-light {
            background-color: #f8f9fa;
            border-color: #f8f9fa;
        }

        .btn-light:hover {
            background-color: #e2e6ea;
            border-color: #dae0e5;
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
                    <h2>Informasi PKL</h2>

                    <div class="info-card">
                        <h4>Nama Perusahaan:</h4>
                        <p>PT. Maju Sejahtera</p>

                        <h4>Alamat Perusahaan:</h4>
                        <p>Jl. Kebon Jeruk No. 5, Jakarta</p>

                        <h4>Role:</h4>
                        <p>Frontend Developer</p>

                        <h4>Periode PKL:</h4>
                        <p>01 Jan 2024 - 01 Apr 2024</p>

                        <h4>Surat Permohonan:</h4>
                        <p><a href="#">Download</a></p>

                        <h4>Surat Penerimaan:</h4>
                        <p><a href="#">Download</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>

