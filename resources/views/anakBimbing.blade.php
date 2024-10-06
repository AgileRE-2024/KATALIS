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
                    <th>Topik PKL</th>
                    <th>Tempat PKL</th>
                    <th>Teman Sekelompok</th>
                    <th>Proposal PKL</th>
                  </tr>
                </thead>
                <tbody id="mahasiswaTableBody">
                  <!-- Data mahasiswa akan dimuat di sini -->
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
    function muatDataMahasiswa() {
      let daftarMahasiswa = JSON.parse(localStorage.getItem("daftarMahasiswa")) || [];
      let tableBody = document.getElementById("mahasiswaTableBody");

      // Bersihkan tabel sebelum mengisi ulang
      tableBody.innerHTML = "";

      daftarMahasiswa.forEach(function(mahasiswa, index) {
        let row = document.createElement("tr");

        row.innerHTML = `
          <td>${mahasiswa.nama}</td>
          <td>${mahasiswa.nim}</td>
          <td><a href="#">Lihat Profil</a></td>
          <td><button class="btn btn-danger btn-sm" onclick="hapusBaris(${index})">Hapus</button></td>
        `;

        tableBody.appendChild(row);
      });
    }

    function hapusBaris(index) {
      let daftarMahasiswa = JSON.parse(localStorage.getItem("daftarMahasiswa")) || [];
      daftarMahasiswa.splice(index, 1);
      localStorage.setItem("daftarMahasiswa", JSON.stringify(daftarMahasiswa));

      // Muat ulang data setelah dihapus
      muatDataMahasiswa();
    }

    window.onload = function() {
      muatDataMahasiswa();
    };

    // Pindah ke halaman daftar mahasiswa
    window.location.href = "anakBimbing";
  </script>
</body>
</html>
