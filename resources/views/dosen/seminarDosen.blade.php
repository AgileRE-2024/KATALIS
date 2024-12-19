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
              <h3 class="font-weight-bold">Laporan Seminar Mahasiswa</h3>
              <hr>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">

              <!-- Tabel Seminar -->
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nama Mahasiswa</th>
                    <th>Tanggal Seminar</th>
                    <th>Aksi</th>
                    <th>Status Kelulusan</th>
                    <th>Grade</th>
                  </tr>
                </thead>
                <tbody id="daftarSeminar">
                  @foreach($seminarApplications as $seminar)
                  <tr>
                    <td>{{ $seminar->user->name }}</td>
                    <td>{{ $seminar->tanggal_seminar }}</td>
                    <td>
                      @if ($seminar->first()?->laporan_pkl)
                        <a href="{{ asset('storage/' . $seminar->first()->laporan_pkl) }}" target="_blank">
                          Lihat Laporan
                        </a>
                      @else
                        -
                      @endif
                    </td>
                    <td>{{ $seminar->status_lulus }}</td>
                    <td>
                      @if($seminar->grade)
                        {{ $seminar->grade }}
                      @else
                        <button class="btn btn-warning btn-sm" onclick="showInputNilaiModal({{ $seminar->id }})">Input Nilai</button>
                      @endif
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
            @csrf <!-- Token keamanan untuk permintaan POST -->
            <input type="hidden" id="seminarId" name="seminar_id">
            <div class="form-group">
              <label for="mahasiswaName">Nama Mahasiswa</label>
              <input type="text" class="form-control" id="mahasiswaName" disabled>
            </div>
            <div class="form-group">
              <label for="kehadiran">Kehadiran, Disiplin, dan Etika (1-100, 20%)</label>
              <input type="number" class="form-control" id="kehadiran" name="kehadiran" required>
            </div>
            <div class="form-group">
              <label for="pemahaman">Pemahaman Masalah dan Solusi (1-100, 20%)</label>
              <input type="number" class="form-control" id="pemahaman" name="pemahaman" required>
            </div>
            <div class="form-group">
              <label for="kerjaTim">Kerja Tim (1-100, 20%)</label>
              <input type="number" class="form-control" id="kerjaTim" name="kerja_tim" required>
            </div>
            <div class="form-group">
              <label for="luaran">Luaran dari Tempat PKL (1-100, 20%)</label>
              <input type="number" class="form-control" id="luaran" name="luaran" required>
            </div>
            <div class="form-group">
              <label for="laporan">Buku Laporan Praktik Kerja Lapangan (1-100, 20%)</label>
              <input type="number" class="form-control" id="laporan" name="laporan" required>
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


  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Function to open modal and populate data
    function showInputNilaiModal(seminarId) {
    const row = event.target.closest('tr');
    const mahasiswaName = row.cells[0].textContent; // Get student name from first column
    
    document.getElementById("seminarId").value = seminarId;
    document.getElementById("mahasiswaName").value = mahasiswaName;
    
    // Reset form
    document.getElementById("penilaianForm").reset();
    
    $('#inputNilaiModal').modal('show');
}

    // Save nilai via AJAX
    document.getElementById("saveNilaiButton").addEventListener("click", function() {
    const seminarId = document.getElementById("seminarId").value;
    const kehadiran = parseFloat(document.getElementById("kehadiran").value) || 0;
    const pemahaman = parseFloat(document.getElementById("pemahaman").value) || 0;
    const kerjaTim = parseFloat(document.getElementById("kerjaTim").value) || 0;
    const luaran = parseFloat(document.getElementById("luaran").value) || 0;
    const laporan = parseFloat(document.getElementById("laporan").value) || 0;

    // Validate inputs before sending
    if (!seminarId || kehadiran < 0 || kehadiran > 100 || 
        pemahaman < 0 || pemahaman > 100 || 
        kerjaTim < 0 || kerjaTim > 100 ||
        luaran < 0 || luaran > 100 ||
        laporan < 0 || laporan > 100) {
        alert('Semua nilai harus diisi dan berada di antara 0-100');
        return;
    }

    // Show loading state
    const saveButton = document.getElementById("saveNilaiButton");
    saveButton.disabled = true;
    saveButton.textContent = 'Menyimpan...';

    $.ajax({
        url: "{{ route('dosen.seminar.saveGrade') }}",
        type: "POST",
        data: {
            _token: "{{ csrf_token() }}",
            seminar_id: seminarId,
            kehadiran,
            pemahaman,
            kerja_tim: kerjaTim,
            luaran,
            laporan,
        },
        success: function(response) {
            alert(response.message || 'Nilai berhasil disimpan!');
            $('#inputNilaiModal').modal('hide');
            location.reload();
        },
        error: function(xhr, status, error) {
            let errorMessage = 'Terjadi kesalahan saat menyimpan nilai.';
            
            if (xhr.responseJSON && xhr.responseJSON.message) {
                errorMessage = xhr.responseJSON.message;
            }
            
            if (xhr.responseJSON && xhr.responseJSON.errors) {
                errorMessage += '\n' + Object.values(xhr.responseJSON.errors).join('\n');
            }
            
            alert(errorMessage);
            console.error("Error:", error);
            console.error("Response:", xhr.responseText);
        },
        complete: function() {
            // Reset button state
            saveButton.disabled = false;
            saveButton.textContent = 'Simpan Nilai';
        }
    });
});


  </script>
</body>
</html>
