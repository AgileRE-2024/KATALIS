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

        /* Garis Pembatas */
        .divider {
            width: 100%;
            height: 2px;
            background-color: #ddd;
            margin: 20px 0;
        }

        /* Detail Informasi Siswa */
        .student-details {
            margin-top: 100px;
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
            .student-details .column {
                width: 100%;
            }
        }

        .form-group {
      display: flex;
      align-items: center;
      margin-bottom: 16px;
      font-size: 16px
    }

    .form-label {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
      width: 100px;
      font-weight: bold;
      
    }

    .form-field {
      flex: 1;
      padding: 8px 8px;
      border: none;
      border-bottom: 1px solid transparent;
      font-size: 14px;
      background-color: transparent;
      cursor: default;
    }

    .form-field.editable {
      border-color: #0077b6;
      cursor: text;
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
                                    
                                    <h4 class="card-title">Pengajuan Surat (dobel klik to change) </h4>

                                    <form class ="forms-sample" action="{{route('worda.index')}}" method="POST">

                                        <div class="student-details">

                                            <!-- Kolom Pertama -->
                                            <div class="column">

                                                <div class="form-group">
                                                    <label for="prodi" class="form-label">Prodi:</label>
                                                    <input id="prodi" class="form-field" contenteditable="false"></input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="doswal" class="form-label">doswal:</label>
                                                    <div id="doswal" class="form-field" contenteditable="false">Nania nuzulita</div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="wkt_pelaksanaan" class="form-label">wkt_pelaksanaan:</label>
                                                    <div id="wkt_pelaksanaan" class="form-field" contenteditable="false">Nania nuzulita</div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="koprodi" class="form-label">koprodi:</label>
                                                    <div id="koprodi" class="form-field" contenteditable="false">Nania nuzulita</div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="nip_koprodi" class="form-label">nip_koprodi:</label>
                                                    <div id="nip_koprodi" class="form-field" contenteditable="false">Nania nuzulita</div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="dosbeng" class="form-label">dosbeng:</label>
                                                    <div id="dosbeng" class="form-field" contenteditable="false">Nania nuzulita</div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="wkt_pelaksanaan" class="form-label">wkt_pelaksanaan:</label>
                                                    <div id="wkt_pelaksanaan" class="form-field" contenteditable="false">Nania nuzulita</div>
                                                </div>

                                                
                                            

                                            </div>

                                            <!-- Kolom Kedua -->
                                            <div class="column">

                                                <div class="form-group">

                                                    <label for="surat_ditujukan_kepada" class="form-label">surat_ditujukan_kepada:</label>
                                                    <div id="surat_ditujukan_kepada" class="form-field" contenteditable="false">Sistem Informasi</div>

                                                </div>

                                                <div class="form-group">
                                                    <label for="nama_lembaga" class="form-label">nama_lembaga:</label>
                                                    <div id="nama_lembaga" class="form-field" contenteditable="false">Sistem Informasi</div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="alamat" class="form-label">alamat:</label>
                                                    <div id="alamat" class="form-field" contenteditable="false">Sistem Informasi</div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="keperluan" class="form-label">keperluan:</label>
                                                    <div id="keperluan" class="form-field" contenteditable="false">Sistem Informasi</div>
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


                                    </form>

                                    <!-- Garis Pembatas -->
                                    <div class="divider"></div>
                                
                                    <form class ="forms-sample" action="{{route('worda.index')}}" method="POST">
                                        @csrf

                                        <div class="container">
                                            <div class="form-group mb-3">
                                                <label for="jumlah_mahasiswa">Jumlah Mahasiswa:</label>
                                                <select class="form-control" id="jumlah_mahasiswa" name="jumlah_mahasiswa" onchange="showFields()">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>

                                            <!-- Student 1 (Always visible) -->
                                            <div class="form-group mb-3">
                                                <label for="nama">Nama Lengkap Ketua:</label>
                                                <input type="text" class="form-control" id="nama" name="nama">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="nim">NIM Ketua:</label>
                                                <input type="text" class="form-control" id="nim" name="nim">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="notelp">Notelp:</label>
                                                <input type="text" class="form-control" id="notelp" name="notelp">
                                            </div>

                                            <!-- Student 2 (Initially hidden) -->
                                            <div id="student2" style="display: none;">
                                                <div class="form-group mb-3">
                                                    <label for="nama2">Nama Lengkap 2:</label>
                                                    <input type="text" class="form-control" id="nama2" name="nama2">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="nim2">NIM 2:</label>
                                                    <input type="text" class="form-control" id="nim2" name="nim2">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="notelp2">Notelp2:</label>
                                                <input type="text" class="form-control" id="notelp2" name="notelp2">
                                            </div>
                                            </div>

                                            <!-- Student 3 (Initially hidden) -->
                                            <div id="student3" style="display: none;">
                                                <div class="form-group mb-3">
                                                    <label for="nama3">Nama Lengkap 3:</label>
                                                    <input type="text" class="form-control" id="nama3" name="nama3">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="nim3">NIM 3:</label>
                                                    <input type="text" class="form-control" id="nim3" name="nim3">
                                                </div>
                                                <div class="form-group mb-3">
                                                <label for="notelp3">Notelp3:</label>
                                                <input type="text" class="form-control" id="notelp3" name="notelp3">
                                            </div>
                                            </div>
                                        </div>

                                        <script>
                                        function showFields() {
                                            const count = document.getElementById('jumlah_mahasiswa').value;
                                            
                                            // Student 2 fields
                                            const student2 = document.getElementById('student2');
                                            student2.style.display = count >= 2 ? 'block' : 'none';
                                            
                                            // Student 3 fields
                                            const student3 = document.getElementById('student3');
                                            student3.style.display = count >= 3 ? 'block' : 'none';
                                        }
                                        </script>

                                        

                                        <div class="form-group">
                                            <label for="nim">prodi:</label>
                                            <input type="text" id="prodi" name="prodi" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label for="doswal">doswal:</label>
                                            <input type="text" id="doswal" name="doswal" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="surat_ditujukan_kepada">surat_ditujukan_kepada:</label>
                                            <input type="text" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label for="nama_lembaga">nama_lembaga:</label>
                                            <input type="text" id="nama_lembaga" name="nama_lembaga" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="alamat">alamat:</label>
                                            <input type="text" id="alamat" name="alamat" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="keperluan">keperluan:</label>
                                            <input type="text" id="keperluan" name="keperluan" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="waktu_pelaksanaan">waktu_pelaksanaan:</label>
                                            <input type="text" id="waktu_pelaksanaan" name="waktu_pelaksanaan" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="tembusan">tembusan:</label>
                                            <input type="text" id="tembusan" name="tembusan" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="date">date:</label>
                                            <input type="date" id="date" name="date" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="ko_prodi">ko_prodi:</label>
                                            <input type="text" id="ko_prodi" name="ko_prodi" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="dosbing">dosbing:</label>
                                            <input type="text" id="dosbing" name="dosbing" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="nip_koprodi">nip_koprodi:</label>
                                            <input type="text" id="nip_koprodi" name="nip_koprodi" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="nip_dosbing">nip_dosbing:</label>
                                            <input type="text" id="nip_dosbing" name="nip_dosbing" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                                            <button type="reset" class="btn btn-light">Reset</button>
                                        </div>

                                        

                                        
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

</body>

</html>

<script>
    // Sample data for form fields
const sampleData = {
    prodi: "Teknik Informatika",
    doswal: "Dr. Ahmad Suherman, S.Kom., M.Kom.",
    surat_ditujukan_kepada: "Kepala Departemen Teknik Informatika",
    nama_lembaga: "Universitas Teknologi Digital",
    alamat: "Jl. Pendidikan No. 123, Jakarta Pusat",
    keperluan: "Pengajuan Proposal Tugas Akhir",
    waktu_pelaksanaan: "1 Januari 2025 - 30 Juni 2025",
    tembusan: "1. Wakil Dekan\n2. Kepala Program Studi",
    date: "2024-11-05", // Current date in YYYY-MM-DD format
    ko_prodi: "Dr. Sarah Wijaya, M.T.",
    dosbing: "Prof. Dr. Budi Santoso, M.Sc.",
    nip_koprodi: "198505152010121002",
    nip_dosbing: "197603242005011004"
};

// Function to fill all form fields
function autofillForm() {
    // Loop through all properties in sampleData
    Object.keys(sampleData).forEach(fieldId => {
        const inputElement = document.getElementById(fieldId);
        if (inputElement) {
            inputElement.value = sampleData[fieldId];
        }
    });
}

// Add autofill button to the form
const formGroup = document.querySelector('.form-group:last-child');
const autofillButton = document.createElement('button');
autofillButton.type = 'button';
autofillButton.className = 'btn btn-secondary ml-2';
autofillButton.textContent = 'Autofill';
autofillButton.onclick = autofillForm;
formGroup.appendChild(autofillButton);

// Automatically fill the form when the page loads
document.addEventListener('DOMContentLoaded', autofillForm);
</script>