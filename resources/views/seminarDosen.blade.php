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
              <!-- Search Input -->
              <div class="form-group" style="width: 30%;">
                <input type="text" class="form-control" id="searchMahasiswa" onkeyup="filterMahasiswa()" placeholder="Masukkan nama mahasiswa...">
              </div>

              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nama Mahasiswa</th>
                    <th>Tanggal Seminar</th>
                    <th>Status Kelulusan</th>
                    <th>Aksi</th>
                    <th>Input Nilai</th>
                    <th>Status Penilaian</th>
                  </tr>
                </thead>
                <tbody id="daftarSeminar">
                  <!-- Daftar Seminar akan dimuat di sini -->
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
                        <label for="kehadiran">Kehadiran, Disiplin, dan Etika (20%)</label>
                        <input type="number" class="form-control" id="kehadiran" required>
                    </div>
                    <div class="form-group">
                        <label for="pemahaman">Pemahaman Masalah dan Solusi (20%)</label>
                        <input type="number" class="form-control" id="pemahaman" required>
                    </div>
                    <div class="form-group">
                        <label for="kerjaTim">Kerja Tim (20%)</label>
                        <input type="number" class="form-control" id="kerjaTim" required>
                    </div>
                    <div class="form-group">
                        <label for="luaran">Luaran dari Tempat PKL (20%)</label>
                        <input type="number" class="form-control" id="luaran" required>
                    </div>
                    <div class="form-group">
                        <label for="laporan">Buku Laporan Praktik Kerja Lapangan (20%)</label>
                        <input type="number" class="form-control" id="laporan" required>
                    </div>
                    <div class="form-group">
                        <label for="nilaiAkhir">Nilai Akhir</label>
                        <input type="text" class="form-control" id="nilaiAkhir" disabled>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Inisialisasi data seminar contoh
    function inisialisasiData() {
      const contohData = [
        { id: 1, nama: "Andi Santoso", tanggal: "2024-09-15", status: "Lulus", nilai: null },
        { id: 2, nama: "Budi Setiawan", tanggal: "2024-09-16", status: "Tidak Lulus", nilai: null },
        { id: 3, nama: "Citra Dewi", tanggal: "2024-09-17", status: "Lulus", nilai: null },
        { id: 4, nama: "Dewi Anggraeni", tanggal: "2024-09-18", status: "Lulus", nilai: null },
        { id: 5, nama: "Eko Prasetyo", tanggal: "2024-09-19", status: "Tidak Lulus", nilai: null },
        { id: 6, nama: "Faisal Akbar", tanggal: "2024-09-20", status: "Lulus", nilai: null }
      ];

      // Simpan data ke localStorage
      localStorage.setItem("daftarSeminar", JSON.stringify(contohData));
    }

    // Fungsi untuk memuat data seminar dari localStorage
    function muatDataSeminar() {
      let daftarSeminar = JSON.parse(localStorage.getItem("daftarSeminar")) || [];
      let daftarSeminarDiv = document.getElementById("daftarSeminar");

      // Bersihkan konten sebelum mengisi ulang
      daftarSeminarDiv.innerHTML = "";

      daftarSeminar.forEach(function(seminar) {
        let row = document.createElement("tr");

        row.innerHTML = `
            <td>${seminar.nama}</td>
            <td>${seminar.tanggal}</td>
            <td>
                <button class="btn btn-${seminar.status === 'Lulus' ? 'success' : 'danger'} btn-sm" onclick="toggleStatus(${seminar.id})">
                    ${seminar.status || 'Belum Ditetapkan'}
                </button>
            </td>
            <td>
                <button class="btn btn-custom btn-sm" onclick="lihatLaporan(${seminar.id})">Lihat Laporan</button>
            </td>
            <td>
                <button class="btn btn-custom btn-sm" onclick="showInputNilaiModal(${seminar.id})">Input Nilai</button>
            </td>
            <td>${seminar.nilai === null ? 'Belum Dinilai' : 'Sudah Dinilai'}</td>
        `;

        daftarSeminarDiv.appendChild(row);
      });
    }

    // Show the modal for inputting grades
    function showInputNilaiModal(id) {
      const daftarSeminar = JSON.parse(localStorage.getItem("daftarSeminar")) || [];
      const mahasiswa = daftarSeminar.find(m => m.id === id);
      
      if (mahasiswa) {
          document.getElementById("mahasiswaId").value = mahasiswa.id;
          document.getElementById("mahasiswaName").value = mahasiswa.nama;
          $('#inputNilaiModal').modal('show'); // Use jQuery to show the modal
      }
    }

    // Save the grade and close the modal
    document.getElementById("saveNilaiButton").addEventListener("click", function() {
      const mahasiswaId = document.getElementById("mahasiswaId").value;
      const kehadiran = parseFloat(document.getElementById("kehadiran").value) || 0;
      const pemahaman = parseFloat(document.getElementById("pemahaman").value) || 0;
      const kerjaTim = parseFloat(document.getElementById("kerjaTim").value) || 0;
      const luaran = parseFloat(document.getElementById("luaran").value) || 0;
      const laporan = parseFloat(document.getElementById("laporan").value) || 0;

      let daftarSeminar = JSON.parse(localStorage.getItem("daftarSeminar")) || [];
      const mahasiswa = daftarSeminar.find(m => m.id == mahasiswaId);

      if (mahasiswa) {
          mahasiswa.nilai = {
              kehadiran,
              pemahaman,
              kerjaTim,
              luaran,
              laporan
          }; // Update nilai in the seminar object

          // Hitung nilai akhir
          const totalNilai = (kehadiran * 0.2) + (pemahaman * 0.2) + (kerjaTim * 0.2) + (luaran * 0.2) + (laporan * 0.2);
          const nilaiAkhir = totalNilai / 5;

          // Konversi nilai akhir ke dalam huruf
          let grade;
          if (nilaiAkhir >= 86) {
              grade = 'A';
          } else if (nilaiAkhir >= 78) {
              grade = 'AB';
          } else if (nilaiAkhir >= 70) {
              grade = 'B';
          } else if (nilaiAkhir >= 62) {
              grade = 'BC';
          } else if (nilaiAkhir >= 54) {
              grade = 'C';
          } else if (nilaiAkhir >= 40) {
              grade = 'D';
          } else {
              grade = 'E';
          }

          mahasiswa.status = "Lulus"; // Assume they pass if graded
          localStorage.setItem("daftarSeminar", JSON.stringify(daftarSeminar));
          alert("Nilai berhasil disimpan!");
          document.getElementById("nilaiAkhir").value = grade; // Tampilkan nilai akhir di modal
          muatDataSeminar(); // Refresh the table data
          $('#inputNilaiModal').modal('hide'); // Close the modal
      }
    });

    // Inisialisasi data seminar saat halaman dimuat
    document.addEventListener("DOMContentLoaded", function() {
      if (!localStorage.getItem("daftarSeminar")) {
        inisialisasiData();
      }
      muatDataSeminar();
    });

    function filterMahasiswa() {
      const searchValue = document.getElementById('searchMahasiswa').value.toLowerCase();
      const rows = document.querySelectorAll("#daftarSeminar tr");

      rows.forEach(row => {
          const nameCell = row.cells[0].textContent.toLowerCase();
          row.style.display = nameCell.includes(searchValue) ? "" : "none";
      });
    }

    function toggleStatus(id) {
      let daftarSeminar = JSON.parse(localStorage.getItem("daftarSeminar")) || [];
      const mahasiswa = daftarSeminar.find(m => m.id === id);
      
      if (mahasiswa) {
          mahasiswa.status = mahasiswa.status === 'Lulus' ? 'Tidak Lulus' : 'Lulus';
          localStorage.setItem("daftarSeminar", JSON.stringify(daftarSeminar));
          muatDataSeminar();
      }
    }

    function lihatLaporan(id) {
      // Logika untuk melihat laporan
      alert('Laporan belum tersedia.');
    }
  </script>
</body>
</html>
