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
              <h3 class="font-weight-bold">Logbook Mahasiswa</h3>
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
      // Dummy data untuk daftar mahasiswa
      let daftarMahasiswa = JSON.parse(localStorage.getItem("daftarMahasiswa")) || [
        { id: 1, nama: "Alice Johnson", nim: "12345678" },
        { id: 2, nama: "David Brown", nim: "23456789" },
        { id: 3, nama: "Emily White", nim: "34567890" },
        { id: 4, nama: "Frank Green", nim: "45678901" },
        { id: 5, nama: "Grace Lee", nim: "56789012" },
      ];

      let daftarMahasiswaDiv = document.getElementById("daftarMahasiswa");

      // Bersihkan konten sebelum mengisi ulang
      daftarMahasiswaDiv.innerHTML = "";

      daftarMahasiswa.forEach(function(mahasiswa) {
        let row = document.createElement("tr");

        row.innerHTML = `
          <td>${mahasiswa.nama}</td>
          <td>${mahasiswa.nim}</td>
          <td><a href="logbook.html?mahasiswaId=${mahasiswa.id}" class="btn btn-primary btn-sm">Lihat Logbook</a></td>
        `;

        daftarMahasiswaDiv.appendChild(row);
      });
    }

    // Panggil fungsi muat data saat halaman diload
    window.onload = function() {
      muatDataMahasiswa();
    };
  </script>
</body>
</html>
