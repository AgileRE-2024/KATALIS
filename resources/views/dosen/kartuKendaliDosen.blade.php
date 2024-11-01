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
              <h3 class="font-weight-bold">Kartu Kendali Bimbingan Mahasiswa</h3>
            </div>
          </div>

          <div class="row">
            <!-- Tabel Kartu Kendali Bimbingan -->
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Tanggal Bimbingan</th>
                    <th>Lihat</th>
                  </tr>
                </thead>
                <tbody id="kartuKendaliTableBody">
                  <!-- Data kartu kendali akan dimuat di sini -->
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
    // Fungsi untuk memuat data jadwal bimbingan dari localStorage
    function muatDataJadwal() {

      let tableBody = document.getElementById("kartuKendaliTableBody");

      // Bersihkan konten sebelum mengisi ulang
      tableBody.innerHTML = "";

      daftarJadwal.forEach(function(jadwal, index) {
        let row = document.createElement("tr");

        row.innerHTML = `
          <td>${jadwal.nama}</td>
          <td>${jadwal.nim}</td>
          <td>${jadwal.tanggal}</td>
          <td>
            <button class="btn btn-info btn-sm" onclick="lihatKartu(${index})">Lihat Kartu Kendali</button>
          </td>
        `;

        tableBody.appendChild(row);
      });
    }

    // Fungsi untuk melihat kartu kendali
    function lihatKartu(index) {
      let daftarJadwal = JSON.parse(localStorage.getItem("daftarJadwal")) || [];
      const jadwal = daftarJadwal[index];
      alert(`Kartu Kendali:\nNama: ${jadwal.nama}\nNIM: ${jadwal.nim}\nTanggal: ${jadwal.tanggal}`);
    }

    // Panggil fungsi muat data saat halaman diload
    window.onload = function() {
      muatDataJadwal();
    };
  </script>
</body>
</html>
