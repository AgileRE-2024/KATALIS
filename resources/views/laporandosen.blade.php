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
              <h3 class="font-weight-bold">Laporan Mahasiswa</h3>
              <!-- Tidak ada tombol "Tambah Jadwal Bimbingan" -->
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Progress</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="daftarMahasiswa">
                  <!-- Daftar Mahasiswa akan dimuat di sini -->
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script>
    // Fungsi untuk memuat data mahasiswa dari localStorage
    function muatDataMahasiswa() {
      let daftarMahasiswa = JSON.parse(localStorage.getItem("daftarMahasiswa")) || [];
      let daftarMahasiswaDiv = document.getElementById("daftarMahasiswa");

      // Bersihkan konten sebelum mengisi ulang
      daftarMahasiswaDiv.innerHTML = "";

      daftarMahasiswa.forEach(function(mahasiswa) {
        let row = document.createElement("tr");

        row.innerHTML = `
          <td>${mahasiswa.nama}</td>
          <td>${mahasiswa.nim}</td>
          <td>
            <button class="btn btn-${mahasiswa.progress === 'Sudah' ? 'success' : mahasiswa.progress === 'Revisi' ? 'warning' : 'secondary'} btn-sm" onclick="toggleProgress(${mahasiswa.id})">
              ${mahasiswa.progress || 'Belum'}
            </button>
          </td>
          <td><a href="logbook.html?mahasiswaId=${mahasiswa.id}" class="btn btn-primary btn-sm">Lihat Logbook</a></td>
        `;

        daftarMahasiswaDiv.appendChild(row);
      });
    }

    // Fungsi untuk toggle progress
    function toggleProgress(id) {
      let daftarMahasiswa = JSON.parse(localStorage.getItem("daftarMahasiswa")) || [];
      let mahasiswa = daftarMahasiswa.find(m => m.id === id);
      
      if (mahasiswa) {
        // Ubah status progress
        if (mahasiswa.progress === 'Sudah') {
          mahasiswa.progress = 'Revisi';
        } else if (mahasiswa.progress === 'Revisi') {
          mahasiswa.progress = 'Belum';
        } else {
          mahasiswa.progress = 'Sudah';
        }
        
        localStorage.setItem("daftarMahasiswa", JSON.stringify(daftarMahasiswa));
        muatDataMahasiswa();
      }
    }

    // Panggil fungsi muat data saat halaman diload
    window.onload = function() {
      muatDataMahasiswa();
    };
  </script>
</body>

</html>
