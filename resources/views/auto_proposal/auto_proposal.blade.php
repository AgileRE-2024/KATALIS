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
        margin-top: 30px;
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

    .readonly {
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    cursor: not-allowed;
}

    .remove-row {
        padding: 0 6px;
        margin-left: auto;
        font-size: 18px;
        line-height: 1;
    }

    #addButtonRow {
        background-color: #f8f9fa;
    }

    #addButtonRow td {
        padding: 10px;
    }

    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem;
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
                                    
                                    <h4 class="card-title">Histori Pengajuan Surat</h4>

                                    <table id="statusPengajuanTable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Tujuan Pengajuan</th>
                                                <th>Status Pengajuan</th>
                                                <th>Download Pengajuan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($surats as $surat)
                                            <tr>
                                                <td id="tanggalPengajuan">{{ $surat->nama_lembaga ?? 'Tidak ada informasi' }}</td>
                                                
                                                <td id="statusPengajuan1">
                                                    @if ($surat->is_active == 1 && !$surat->dosen_id)
                                                        <!-- Status Pending -->
                                                        <p>Status: Pending</p>
                                                    @elseif ($surat->is_active == 1 && $surat->dosen_id)
                                                        <!-- Status Pengajuan Selesai -->
                                                        <p>Status: Pengajuan Selesai</p>
                                                    @elseif ($surat->is_active == 2)
                                                        <!-- Status PKL Ditolak -->
                                                        <p>Status: PKL Ditolak</p>
                                                    @else
                                                        <p>Status: Tidak Dikenal</p>
                                                    @endif
                                                </td>
                                                
                                                <td>
                                                    <a href="#" id="lihatPengajuan1">
                                                        @if ($surat)
                                                            <p>
                                                                <a href="{{ asset('storage/' . str_replace('../storage/app/public/', '', $surat->filepath)) }}" target="_blank">
                                                                    Download Surat
                                                                </a>
                                                            </p>
                                                        @else
                                                            <p>Surat tidak ditemukan.</p>
                                                        @endif
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>

                                    </table>

                                    <h4 class="card-title">Pengajuan Surat Baru</h4>

                                    <form class ="forms-sample" action="{{route('store.form')}}" method="POST" id=tableForm>
                                        @csrf

                                        <div class="student-details">
                                            <!-- Kolom Pertama -->
                                            <div class="column">
                                            <div class="form-group">
                                                <label for="prodi" class="form-label">Prodi:</label>
                                                <input type="text" id="prodi" class="form-field" name="prodi" readonly>
                                            </div>

                                                <div class="form-group">
                                                    <label for="doswal" class="form-label">Dosen Wali:</label>
                                                    <input id="doswal" class="form-field" name="doswal" contenteditable="false"></input>
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
                                                    <label for="koprodi" class="form-label">Kepala Prodi:</label>
                                                    <input id="koprodi" name="koprodi" class="form-field" contenteditable="false"></input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="nip_koprodi" class="form-label">NIP Kepala Prodi:</label>
                                                    <input id="nip_koprodi" name="nip_koprodi" class="form-field" contenteditable="false"></input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="dosbing" class="form-label">Dosen Pembimbing:</label>
                                                    <input id="dosbing" name="dosbing" class="form-field" contenteditable="false" disabled></input>
                                                </div>
                                            </div>

                                            <!-- Kolom Kedua -->
                                            <div class="column">

                                                <div class="form-group">

                                                    <label for="surat_ditujukan_kepada" class="form-label">Surat Ditujukan Kepada:</label>
                                                    <input id="surat_ditujukan_kepada" name="surat_ditujukan_kepada" class="form-field" contenteditable="false"></input>

                                                </div>

                                                <div class="form-group">
                                                    <label for="nama_lembaga" class="form-label">Nama Lembaga:</label>
                                                    <input id="nama_lembaga" name="nama_lembaga" class="form-field" contenteditable="false"></input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="alamat" class="form-label">Alamat:</label>
                                                    <input id="alamat" name="alamat" class="form-field" contenteditable="false"></input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="keperluan" class="form-label">Keperluan:</label>
                                                    <input id="keperluan" name="keperluan" class="form-field" contenteditable="false"></input>
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
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <input type="text" id="nim" name="nim" value="{{ Auth::user()->nim }}" readonly class="readonly">
                                                </td>
                                                <td>
                                                    <input type="text" class="readonly" id="name" name="name" value="{{ Auth::user()->name }}" readonly>
                                                </td>
                                                <td>
                                                    <input type="text" class="readonly" id="no_hp" name="no_hp" value="{{ Auth::user()->no_hp }}" readonly>
                                                </td>
                                            </tr>
                                            <tr id="addButtonRow">
                                                <td colspan="4" class="text-center">
                                                    <button type="button" id="addRowBtn" class="btn btn-primary btn-sm">+ Tambah Anggota</button>
                                                </td>
                                            </tr>
                                            <input type="hidden" name="row_count" id="rowCount">
                                        </tbody>
                                    </table>
                                        <div class="form-group">
                                            
                                            <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                                            <button type="reset" class="btn btn-light">Reset</button>
                                        </div>

                                        
                                    <div class="divider"></div>
                                    

                                    <script>
                                        // Fungsi untuk mengatur tombol download berdasarkan status
                                        function updateDownloadButton(rowNumber) {
                                            const status = document.getElementById(`statusPengajuan${rowNumber}`).innerText;
                                            const downloadBtn = document.getElementById(`downloadBtn${rowNumber}`);
                                            downloadBtn.disabled = status !== "Disetujui";
                                        }

                                        // Fungsi untuk mengunduh file (placeholder)
                                        function downloadFile(rowNumber) {
                                            alert(`Mengunduh file untuk pengajuan #${rowNumber}`);
                                        }

                                        // Fungsi untuk mengatur tautan "Lihat Pengajuan"
                                        function setLihatPengajuanLink(rowNumber, link) {
                                            const lihatPengajuan = document.getElementById(`lihatPengajuan${rowNumber}`);
                                            lihatPengajuan.href = link || "#";
                                            lihatPengajuan.target = "_blank"; // Membuka di tab baru
                                        }

                                        // Contoh: Mengatur tautan untuk pengajuan pertama
                                        setLihatPengajuanLink(1, "https://example.com/histori-pengajuan");
                                    </script>
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

   <script>
    document.addEventListener('DOMContentLoaded', function() {
        const table = document.getElementById('myTable');
        const tbody = table.querySelector('tbody');
        const addButtonRow = document.getElementById('addButtonRow');
        const addRowBtn = document.getElementById('addRowBtn');
        let rowCounter = 1; // Start with 1 since we have the logged-in user

        function createNewRow(rowNum) {
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${rowNum}</td>
                <td>
                    <input type="text" id="nim${rowNum}" name="nim${rowNum}" placeholder="Masukkan NIM">
                </td>
                <td>
                    <input type="text" class="readonly" id="name${rowNum}" name="name${rowNum}" readonly>
                </td>
                <td>
                    <input type="text" class="readonly" id="no_hp${rowNum}" name="no_hp${rowNum}" readonly>
                    <button type="button" class="btn btn-danger btn-sm ml-auto remove-row">×</button>
                </td>
            `;

            // Add event listener for the remove button
            const removeBtn = newRow.querySelector('.remove-row');
            removeBtn.addEventListener('click', function() {
                newRow.remove();
                renumberRows();
                updateRowCount();
            });

            return newRow;
        }

        function renumberRows() {
            const rows = tbody.querySelectorAll('tr:not(#addButtonRow)');
            rows.forEach((row, index) => {
                row.querySelector('td:first-child').textContent = index + 1;
            });
        }

        function updateRowCount() {
            const rowCountInput = document.getElementById('rowCount');
            const rows = tbody.querySelectorAll('tr:not(#addButtonRow)');
            rowCountInput.value = rows.length;
        }

        function handleNimInput(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                const currentRow = event.target.closest('tr');
                const nim = event.target.value;
                
                // Get the corresponding name and phone inputs
                const nameInput = currentRow.querySelector('input[name^="name"]');
                const phoneInput = currentRow.querySelector('input[name^="no_hp"]');

                fetch(`/get-user?nim=${nim}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`HTTP error! status: ${response.status}`);
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            nameInput.value = data.data.name || '';
                            phoneInput.value = data.data.no_hp || '';
                        } else {
                            alert('Data tidak ditemukan');
                            nameInput.value = '';
                            phoneInput.value = '';
                        }
                    })
                    .catch(error => {
                        console.error('Detailed error:', error);
                        alert(`Error details: ${error.message}`);
                    });
            }
        }

        // Add Row Button Click Handler
        addRowBtn.addEventListener('click', function() {
            rowCounter++;
            const newRow = createNewRow(rowCounter);
            tbody.insertBefore(newRow, addButtonRow);
            
            // Add event listener to new NIM input
            const newNimInput = newRow.querySelector('input[name^="nim"]');
            newNimInput.addEventListener('keydown', handleNimInput);
            
            updateRowCount();
        });

        // Set initial row count
        updateRowCount();
    });
    </script>

    


</body>

</html>

<script>
    // Sample data for form fields
const sampleData = {
    prodi: "Sistem Informasi",
    doswal: "",
    surat_ditujukan_kepada: "",
    nama_lembaga: "",
    alamat: "",
    keperluan: "PKL Magang",
    tembusan: "",
    date: "2024-11-05", // Current date in YYYY-MM-DD format
    koprodi: "Pak Hendra",
    dosbing: "",
    nip_koprodi: "198505152010121002",
    nip_dosbing: ""
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


// Automatically fill the form when the page loads
document.addEventListener('DOMContentLoaded', autofillForm);
</script>

