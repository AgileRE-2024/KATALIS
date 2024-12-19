<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
<style>
    /* Custom CSS for sidebar */
    .sidebar {
        width: 250px; /* Set desired sidebar width */
        transition: width 0.3s ease; /* Smooth transition for width change */
    }

    /* For minimized sidebar */
    .sidebar.minimized {
        width: 80px; /* Width when minimized */
    }

    /* Make sure the content area stretches to fill the remaining space */
    .main-panel {
        flex-grow: 1; /* Allow main panel to grow */
        background-color: #f5f7ff; /* Set background color matching content */
        padding: 20px; /* Optional padding */
        margin-left: 10px; /* Prevent content from touching sidebar */
    }

    /* Center the content */
    .content-wrapper {
        max-width: 1200px; /* Set max-width for the content */
        margin: 0 auto; /* Center the content */
    }

    /* Optional: Adjust background color of the right empty space */
    .page-body-wrapper {
        background-color: #f8f9fa; /* Set to the same color as main-panel */
    }

    .card-title {
    margin-bottom: 10px; /* Kurangi jarak bawah judul */
    }

    .forms-sample {
        margin-top: 100; /* Kurangi jarak atas form */
    }

    /* Garis Pembatas */
    .divider {
        width: 100%;
        height: 2px;
        background-color: #ddd;
        margin: 20px 0;
    }

    /* Detail Informasi Siswa */
    .student-details {
        display: flex;
        justify-content: space-between;
        text-align: left;
        padding-left: 20px;
        flex-wrap: wrap;
    }

    .student-details .column {
        width: 48%;
        margin-bottom: 15px;
    }

    .student-details p {
        font-size: 16px;
        margin-bottom: 50px;
    }

    .student-details p strong {
        font-weight: bold;
    }

    /* Media Query untuk Responsivitas */
    @media (max-width: 768px) {
        .student-details {
            flex-direction: column;
        }

        .student-details .column {
            width: 100%;
            margin-bottom: 20px;
        }
    }

    /* Form Group Styling */
    .form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 16px;
    font-size: 16px;
    }

    .form-label {
        margin-bottom: 8px;
        font-family: 'Arial', sans-serif;
        font-size: 16px;
        font-weight: bold;
    }

    .form-field {
        flex: 1;
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
        background-color: #fff;
        box-sizing: border-box; /* Pastikan padding tidak menambah ukuran */
    }


    /* Menambahkan border dan background untuk input yang harus diisi */
    .form-field.required {
        background-color: #e9f7fc; /* Warna latar belakang lebih cerah untuk input wajib */
        border-color: #0077b6;
    }

    .form-field:focus {
        border-color: #0077b6;
        outline: none;

        .hidden {
        display: none;
        }

    }

    /* Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-family: Arial, sans-serif;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    input {
        width: 90%;
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .readonly {
        border: none;
        outline: none;
    }
</style>

</head>

<body>
    
    <div class="container-scroller">
        @include('components.navbarKoor')

        <div class="container-fluid page-body-wrapper">
            
            @include('components.sidebarKoor')

            <div class="main-panel">
                
                <div class="content-wrapper">
                    
                    <div class="row">
                        
                        <div class="col-12 grid-margin stretch-card">
                            
                            <div class="card">
                                
                                <div class="card-body">
                                    
                                    <h4 class="card-title">Pengajuan Surat</h4>

                                    <form class ="forms-sample" action="" method="POST" id=tableForm>
                                        @csrf

                                        <div class="student-details">
                                            <!-- Kolom Pertama -->
                                            <div class="column">
                                            <div class="form-group">
                                                <label for="prodi" class="form-label">Prodi:</label>
                                                <input type="text" id="prodi" class="form-field" name="prodi" value=" data->prodi" readonly>
                                            </div>

                                                <div class="form-group">
                                                    <label for="doswal" class="form-label">doswal:</label>
                                                    <input id="doswal" class="form-field" name="doswal" value=" data->doswal_name" contenteditable="false"></input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="wkt_pelaksanaan" class="form-label">Waktu Pelaksanaan:</label>
                                                    <div style="display: flex; gap: 10px;">

                                                        <input type="date" 
                                                        id="tanggal_mulai" 
                                                        name="tanggal_mulai" 
                                                        class="form-control"
                                                        value="2023-03-21" 
                                                        required> 
                                                    
                                                        <input type="date" 
                                                        id="tanggal_selesai" 
                                                        name="tanggal_selesai" 
                                                        class="form-control"
                                                        value="2023-03-21" 
                                                        required> 

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="koprodi" class="form-label">koprodi:</label>
                                                    <input id="koprodi" name="koprodi" class="form-field" value=" data->koprodi_name" contenteditable="false"></input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="nip_koprodi" class="form-label">nip_koprodi:</label>
                                                    <input id="nip_koprodi" name="nip_koprodi" class="form-field" value=" data->koprodi_nip" contenteditable="false"></input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="dosbing" class="form-label">Dosbing:</label>
                                                    <select id="dosbing" name="dosbing" class="form-field">
                                                        <option value="">-- Pilih Dosen --</option>
                                                    
                                                    </select>
                                                    <!-- Hidden input to hold the selected dosbing name -->
                                                    <input id="dosbing_name" name="dosbing_name" type="hidden" class="form-field" value=" data->dosbing_name">
                                                    <input id="dosbing_nip" type="hidden" name="dosbing_nip" class="form-field" value=" dosen->nip">
                                                    
                                                    
                                                    
                                                </div>
                                            </div>

                                            <!-- Kolom Kedua -->
                                            <div class="column">

                                                <div class="form-group">

                                                    <label for="surat_ditujukan_kepada" class="form-label">surat_ditujukan_kepada:</label>
                                                    <input id="surat_ditujukan_kepada" name="surat_ditujukan_kepada" value=" data->surat_ditujukan_kepada" class="form-field" contenteditable="false"></input>

                                                </div>

                                                <div class="form-group">
                                                    <label for="nama_lembaga" class="form-label">nama_lembaga:</label>
                                                    <input id="nama_lembaga" name="nama_lembaga" class="form-field" value=" data->nama_lembaga" contenteditable="false"></input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="alamat" class="form-label">alamat:</label>
                                                    <input id="alamat" name="alamat" class="form-field" value=" data->alamat" contenteditable="false"></input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="keperluan" class="form-label">keperluan:</label>
                                                    <input id="keperluan" name="keperluan" class="form-field" value=" data->keperluan" contenteditable="false"></input>
                                                </div>

                                                <script>
                                                    document.querySelectorAll('.form-field').forEach(field => {
                                                    field.addEventListener('dblclick', () => {
                                                        field.classList.add('editable');
                                                        field.setAttribute('contenteditable', 'true');
                                                    });

                                                    field.addEventListener('blur', () => {
                                                        field.classList.remove('editable');
                                                        field.setAttribute('contenteditable', 'false');
                                                    });
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <table id="myTable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>No. Telp</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    
                                        

                                            <input type="hidden" name="row_count" id="rowCount">
                                            <input type="hidden" name="id_surat" id="id_surat" value=" data->id_surat">
                                        </tbody>
                                    </table>



                                        <div class="form-group">
                                            
                                            <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                                            <button type="reset" class="btn btn-light">Reset</button>
                                        </div>

                                        <!-- Garis Pembatas -->
                                    <div class="divider"></div>
                                    <table id="statusPengajuanTable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Status Pengajuan</th>
                                                <th>Lihat Pengajuan</th>
                                                <th>Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td id="tanggalPengajuan1">2024-11-20</td>
                                                <td id="statusPengajuan1">Pending</td>
                                                <td>
                                                    <a href="#" id="lihatPengajuan1">Lihat Pengajuan</a>
                                                </td>
                                                <td>
                                                    <button type="button" id="downloadBtn1" class="btn btn-primary mr-2" disabled onclick="downloadFile(1)">
                                                        Download
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    


</body>

</html>


