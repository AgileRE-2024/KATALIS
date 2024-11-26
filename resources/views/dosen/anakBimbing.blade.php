<!DOCTYPE html>
<html lang="en">
@include('components.head')

<body>
    <div class="container-scroller">
        @include('components.navbarDosen')
        <div class="container-fluid page-body-wrapper">
            @include('components.sidebarDosen')

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <h3 class="font-weight-bold">Daftar Mahasiswa Bimbingan</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama Mahasiswa</th>
                                        <th>NIM</th>
                                        <th>Detail PKL</th>
                                        <th>Histori Logbook</th>
                                        <th>Histori Bimbingan</th>
                                        <th>Laporan</th>
                                        <th>Jadwal Seminar</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mahasiswaBimbingan as $mahasiswa)
                                        <tr>
                                            <td>{{ $mahasiswa->name }}</td>
                                            <td>{{ $mahasiswa->nim }}</td>
                                            <td>Detail PKL</td>
                                            <td>
                                                @if($mahasiswa->logbooks->isNotEmpty())
                                                    <a href="{{ route('detilLogbook', $mahasiswa->logbooks->first()->user_id) }}">
                                                        click here
                                                    </a>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                @if($mahasiswa->jadwalKonsultasi->isNotEmpty())
                                                    <a href="{{ route('detilBimbingan', $mahasiswa->jadwalKonsultasi->first()->user_id) }}">
                                                        click here
                                                    </a>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                @if ($mahasiswa->seminar->first()?->laporan_pkl)
                                                    <a href="{{ asset('storage/' . $mahasiswa->seminar->first()->laporan_pkl) }}" target="_blank">
                                                        Lihat Laporan
                                                    </a>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>{{ $mahasiswa->seminar->first()->tanggal_seminar ?? '-' }}</td>
                                            <td id="nilai-{{ $mahasiswa->id }}">
                                                <span class="clickable-nilai" 
                                                      data-toggle="modal"
                                                      data-target="#inputNilaiModal"
                                                      data-id="{{ $mahasiswa->id }}"
                                                      data-name="{{ $mahasiswa->name }}">
                                                    {{ $mahasiswa->grade ?? 'Input Nilai' }}
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Input Nilai -->
    <div class="modal fade" id="inputNilaiModal" tabindex="-1" role="dialog" aria-labelledby="inputNilaiModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="inputNilaiModalLabel">Input Nilai Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="penilaianForm">
                        <div class="form-group">
                            <label for="mahasiswaId">ID Mahasiswa</label>
                            <input type="text" class="form-control" id="mahasiswaId" disabled>
                        </div>
                        <div class="form-group">
                            <label for="mahasiswaName">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="mahasiswaName" disabled>
                        </div>
                        <div class="form-group">
                            <label for="kehadiran">Kehadiran, Disiplin, dan Etika (1-100, 20%)</label>
                            <input type="number" class="form-control" id="kehadiran" required>
                        </div>
                        <div class="form-group">
                            <label for="pemahaman">Pemahaman Masalah dan Solusi (1-100, 20%)</label>
                            <input type="number" class="form-control" id="pemahaman" required>
                        </div>
                        <div class="form-group">
                            <label for="kerjaTim">Kerja Tim (1-100, 20%)</label>
                            <input type="number" class="form-control" id="kerjaTim" required>
                        </div>
                        <div class="form-group">
                            <label for="luaran">Luaran dari Tempat PKL (1-100, 20%)</label>
                            <input type="number" class="form-control" id="luaran" required>
                        </div>
                        <div class="form-group">
                            <label for="laporan">Buku Laporan Praktik Kerja Lapangan (1-100, 20%)</label>
                            <input type="number" class="form-control" id="laporan" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="saveNilaiButton">Simpan Nilai</button>
                </div>
            </div>
        </div>
    </div>

    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script>
        // Script to populate the modal with selected mahasiswa data
        $('#inputNilaiModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id'); // Extract info from data-* attributes
            var name = button.data('name');

            var modal = $(this);
            modal.find('#mahasiswaId').val(id);
            modal.find('#mahasiswaName').val(name);
        });

        // Function to update the nilai in the table
        function updateNilaiInTable(mahasiswaId, grade) {
            var nilaiCell = document.getElementById(`nilai-${mahasiswaId}`);
            if (nilaiCell) {
                nilaiCell.textContent = grade; // Update the nilai dengan huruf
            }
        }

        // Add functionality to save the value when "Simpan Nilai" is clicked
        $('#saveNilaiButton').on('click', function() {
            var mahasiswaId = $('#mahasiswaId').val();
            var kehadiran = parseFloat($('#kehadiran').val()) || 0;
            var pemahaman = parseFloat($('#pemahaman').val()) || 0;
            var kerjaTim = parseFloat($('#kerjaTim').val()) || 0;
            var luaran = parseFloat($('#luaran').val()) || 0;
            var laporan = parseFloat($('#laporan').val()) || 0;

            // Calculate the total nilai
            const totalNilai = (kehadiran * 0.2) + (pemahaman * 0.2) + (kerjaTim * 0.2) + (luaran * 0.2) + (laporan * 0.2);

            // Determine the letter grade
            let grade;
            if (totalNilai >= 86) {
                grade = 'A';
            } else if (totalNilai >= 78) {
                grade = 'AB';
            } else if (totalNilai >= 70) {
                grade = 'B';
            } else if (totalNilai >= 62) {
                grade = 'BC';
            } else if (totalNilai >= 54) {
                grade = 'C';
            } else if (totalNilai >= 40) {
                grade = 'D';
            } else {
                grade = 'E';
            }

            // Update the nilai in the table
            updateNilaiInTable(mahasiswaId, grade);

            alert('Nilai disimpan!');
            $('#inputNilaiModal').modal('hide');
        });
    </script>
</body>

</html>