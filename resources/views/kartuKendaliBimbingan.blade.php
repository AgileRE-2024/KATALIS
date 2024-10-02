<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <style>
        /* Custom CSS for sidebar */
        .sidebar {
            width: 250px;
            transition: width 0.3s ease;
        }

        .sidebar.minimized {
            width: 80px;
        }

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

        .page-body-wrapper {
            background-color: #f8f9fa;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .badge-success, .badge-warning, .badge-danger {
            padding: 5px 10px;
            border-radius: 12px;
            color: white;
        }

        .badge-warning {
            color: black;
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
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Kartu Kendali Bimbingan</h4>
                                    <p class="card-description">
                                        Form ini digunakan untuk mengatur jadwal konsultasi dengan dosen pembimbing terkait PKL
                                    </p>
                                    <!-- Form untuk menambahkan data -->
                                    <form class="forms-sample" id="bimbinganForm">
                                        <div class="form-group">
                                            <label for="tanggalBimbingan">Tanggal Bimbingan</label>
                                            <input type="date" class="form-control" id="tanggalBimbingan" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="hasilBimbingan">Hasil Bimbingan</label>
                                            <textarea class="form-control" id="hasilBimbingan" rows="4" placeholder="Masukkan topik atau pertanyaan yang ingin dibahas" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Dokumentasi Bimbingan (PNG)</label>
                                            <input type="file" id="dokumentasiBimbingan" name="img[]" class="file-upload-default" accept=".png">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled placeholder="Dokumentasi Bimbingan (PNG)">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button" onclick="triggerFileUpload()">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Tambah</button>
                                        <button type="reset" class="btn btn-light">Cancel</button>
                                    </form>

                                    <!-- Tabel untuk menampilkan data -->
                                    <h4 class="card-title mt-4">Histori Bimbingan</h4>
                                    <div class="table-responsive">
                                        <table id="tabelBimbingan">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Tanggal Bimbingan</th>
                                                    <th>Hasil Bimbingan</th>
                                                    <th>Dokumentasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Baris baru akan ditambahkan di sini -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="../../vendors/select2/select2.min.js"></script>
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <script src="../../js/file-upload.js"></script>
    <script src="../../js/typeahead.js"></script>
    <script src="../../js/select2.js"></script>

    <script>
        let bimbinganCounter = 1;

        // Menangani form submit
        document.getElementById('bimbinganForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Mencegah form submit default

            // Ambil data dari form
            let tanggalBimbingan = document.getElementById('tanggalBimbingan').value;
            let hasilBimbingan = document.getElementById('hasilBimbingan').value;
            let dokumentasiBimbingan = document.getElementById('dokumentasiBimbingan').files[0];

            // Cek apakah file dokumentasi ada dan apakah itu file PNG
            let dokumentasiLink = "";
            if (dokumentasiBimbingan && dokumentasiBimbingan.type === 'image/png') {
                dokumentasiLink = `<a href="#">Download PNG</a>`;
            } else {
                alert("Hanya file PNG yang diperbolehkan.");
                return;
            }

            // Tambahkan baris baru ke tabel
            let tabelBimbingan = document.getElementById('tabelBimbingan').getElementsByTagName('tbody')[0];
            let newRow = tabelBimbingan.insertRow();
            newRow.innerHTML = `
                <tr>
                    <td>${bimbinganCounter}</td>
                    <td>${tanggalBimbingan}</td>
                    <td>${hasilBimbingan}</td>
                    <td>${dokumentasiLink}</td>
                </tr>
            `;

            // Update nomor
            bimbinganCounter++;

            // Reset form setelah submit
            document.getElementById('bimbinganForm').reset();
        });

        function triggerFileUpload() {
            document.getElementById('dokumentasiBimbingan').click();
        }
    </script>
</body>

</html>
