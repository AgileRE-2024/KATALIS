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
        margin-top: 50px;
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
                                    
                                    <h4 class="card-title">Assign Dosbing</h4>

                                    <form class ="forms-sample" action="{{route('store.2form')}}" method="POST" id=tableForm>
                                        @csrf

                                        <div class="student-details">
                                            <!-- Kolom Pertama -->
                                            <div class="column">
                                            <div class="form-group">
                                                <label for="prodi" class="form-label">Prodi:</label>
                                                <input type="text" id="prodi" class="form-field" name="prodi" value="{{ $data->prodi }}" readonly>
                                            </div>

                                                <div class="form-group">
                                                    <label for="doswal" class="form-label">doswal:</label>
                                                    <input id="doswal" class="form-field" name="doswal" value="{{ $data->doswal_name }}" contenteditable="false"></input>
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
                                                    <input id="koprodi" name="koprodi" class="form-field" value="{{ $data->koprodi_name }}" contenteditable="false"></input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="nip_koprodi" class="form-label">nip_koprodi:</label>
                                                    <input id="nip_koprodi" name="nip_koprodi" class="form-field" value="{{ $data->koprodi_nip }}" contenteditable="false"></input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="dosbing" class="form-label">Dosbing:</label>
                                                    <select id="dosbing" name="dosbing" class="form-field">
                                                        <option value="">-- Pilih Dosen --</option>
                                                        @foreach($dosens as $dosen)
                                                            <option value="{{ $dosen->name }}"
                                                                @if($dosen->name == $data->dosbing_name) selected @endif>

                                                                {{ $dosen->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <!-- Hidden input to hold the selected dosbing name -->
                                                    <input id="dosbing_name" name="dosbing_name" type="hidden" class="form-field" value="{{ $data->dosbing_name }}">
                                                    <input id="dosbing_nip" type="hidden" name="dosbing_nip" class="form-field" value="{{ $dosen->nip }}">
                                                    
                                                    <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                        const dosbing = document.getElementById('dosbing');
                                                        const dosbing_nip = document.getElementById('dosbing_nip');
                                                        
                                                        // Parse the dosen data from the server
                                                        const dosens = @json($dosens);

                                                        dosbing.addEventListener('change', function() {
                                                            const selectedDosenName = this.value;
                                                            
                                                            // Find the dosen with matching name
                                                            const selectedDosen = dosens.find(dosen => dosen.name === selectedDosenName);
                                                            
                                                            // Update the NIP field
                                                            if (selectedDosen) {
                                                                dosbing_nip.value = selectedDosen.nip || '';
                                                            } else {
                                                                dosbing_nip.value = '';
                                                            }
                                                        });
                                                    });
                                                    </script>
                                                    
                                                </div>
                                            </div>

                                            <!-- Kolom Kedua -->
                                            <div class="column">

                                                <div class="form-group">

                                                    <label for="surat_ditujukan_kepada" class="form-label">surat_ditujukan_kepada:</label>
                                                    <input id="surat_ditujukan_kepada" name="surat_ditujukan_kepada" value="{{ $data->surat_ditujukan_kepada }}" class="form-field" contenteditable="false"></input>

                                                </div>

                                                <div class="form-group">
                                                    <label for="nama_lembaga" class="form-label">nama_lembaga:</label>
                                                    <input id="nama_lembaga" name="nama_lembaga" class="form-field" value="{{ $data->nama_lembaga }}" contenteditable="false"></input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="alamat" class="form-label">alamat:</label>
                                                    <input id="alamat" name="alamat" class="form-field" value="{{ $data->alamat }}" contenteditable="false"></input>
                                                </div>

                                                <div class="form-group">
                                                    <label for="keperluan" class="form-label">keperluan:</label>
                                                    <input id="keperluan" name="keperluan" class="form-field" value="{{ $data->keperluan }}" contenteditable="false"></input>
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
                                        @if($dete->count() > 0)
                                                @foreach($dete as $rowCount => $dete)
                                                    <tr>
                                                        <td>{{ $rowCount+1 }}</td>
                                                        <td><input type="text" id="nim{{ $rowCount+1 }}" name="nim{{ $rowCount+1 }}" value="{{ $dete->nim }}"></td>
                                                        <td><input type="text" class="readonly" id="name{{ $rowCount+1 }}" name="name{{ $rowCount+1 }}" value="{{ $dete->user->name }}" readonly></td>
                                                        <td><input type="text" class="readonly" id="no_hp{{ $rowCount+1 }}" name="no_hp{{ $rowCount+1 }}" value="{{ $dete->user->no_hp }}"readonly></td>
                                                    </tr>
                                                @endforeach
                                        @else
                                            <p>No related records found.</p>
                                        @endif
                                        

                                            <input type="hidden" name="row_count" id="rowCount">
                                            <input type="hidden" name="id_surat" id="id_surat" value="{{ $data->id_surat }}">
                                        </tbody>
                                    </table>



                                        <div class="form-group">
                                            
                                            <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                                            <button type="reset" class="btn btn-light">Reset</button>
                                        </div>

                                        <!-- Garis Pembatas -->
                                    <div class="divider"></div>

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
        let rowCounter = 1; // Starting with 3 since we already have 3 rows

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
                </td>
            `;
            return newRow;
        }

        function handleNimInput(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                const currentRow = event.target.closest('tr');
                const nim = event.target.value;
                const suffix = event.target.name.replace('nim', '');
                
                // Get the corresponding name and phone inputs
                const nameInput = currentRow.querySelector(`[name="name${suffix}"]`);
                const phoneInput = currentRow.querySelector(`[name="no_hp${suffix}"]`);

                fetch(`/get-user?nim=${nim}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            nameInput.value = data.data.name || '';
                            phoneInput.value = data.data.no_hp || '';
                            
                            // Check if this is the last row
                            const allRows = table.querySelectorAll('tbody tr');
                            if (currentRow === allRows[allRows.length - 1]) {
                                // Add new row
                                rowCounter++;
                                const newRow = createNewRow(rowCounter);
                                table.querySelector('tbody').appendChild(newRow);
                                
                                // Add event listener to new NIM input
                                const newNimInput = newRow.querySelector(`[name="nim${rowCounter}"]`);
                                newNimInput.addEventListener('keydown', handleNimInput);
                                
                                // Update hidden row count
                                document.getElementById('rowCount').value = rowCounter;
                            }
                        } else {
                            alert('Data tidak ditemukan');
                            nameInput.value = '';
                            phoneInput.value = '';
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat mengambil data.');
                    });
            }
        }

        // Add event listeners to existing NIM inputs
        const tableRows = table.querySelectorAll('tbody tr');
        tableRows.forEach((row) => {
            const nimInput = row.querySelector('input[name^="nim"]');
            nimInput.addEventListener('keydown', handleNimInput);
        });

        // Set initial row count
        document.getElementById('rowCount').value = rowCounter;
        });
    </script>

    


</body>

</html>


