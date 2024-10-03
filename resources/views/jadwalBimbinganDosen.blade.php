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
              <h3 class="font-weight-bold">Jadwal Bimbingan</h3>
              <!-- Tambahkan margin-top (mt-3) untuk menurunkan tombol -->
              <a href="tambahbimbing" class="btn btn-primary btn-sm mt-3">Tambah Jadwal Bimbingan</a>
            </div>
          </div>

          <div class="row">
            <!-- Tabel Jadwal Bimbingan -->
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Tanggal Bimbingan</th>
                    <th>Waktu Bimbingan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="jadwalTableBody">
                  <!-- Data jadwal bimbingan akan dimuat di sini -->
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
      let daftarJadwal = JSON.parse(localStorage.getItem("daftarJadwal")) || [];
      let tableBody = document.getElementById("jadwalTableBody");

      // Bersihkan tabel sebelum mengisi ulang
      tableBody.innerHTML = "";

      daftarJadwal.forEach(function(jadwal, index) {
        let row = document.createElement("tr");

        row.innerHTML = `
          <td>${jadwal.nama}</td>
          <td>${jadwal.nim}</td>
          <td>${jadwal.tanggal}</td>
          <td><button class="btn btn-${jadwal.status === 'Sudah' ? 'success' : 'warning'} btn-sm" onclick="toggleStatus(${index})">${jadwal.status}</button></td>
          <td><button class="btn btn-danger btn-sm" onclick="hapusJadwal(${index})">Hapus</button></td>
        `;

        tableBody.appendChild(row);
      });
    }

    // Fungsi untuk toggle status bimbingan
    function toggleStatus(index) {
      let daftarJadwal = JSON.parse(localStorage.getItem("daftarJadwal")) || [];
      daftarJadwal[index].status = daftarJadwal[index].status === "Sudah" ? "Belum" : "Sudah";
      localStorage.setItem("daftarJadwal", JSON.stringify(daftarJadwal));
      muatDataJadwal();
    }

    // Fungsi untuk menghapus jadwal bimbingan
    function hapusJadwal(index) {
      let daftarJadwal = JSON.parse(localStorage.getItem("daftarJadwal")) || [];
      daftarJadwal.splice(index, 1);
      localStorage.setItem("daftarJadwal", JSON.stringify(daftarJadwal));
      muatDataJadwal();
    }

    // Panggil fungsi muat data saat halaman diload
    window.onload = function() {
      muatDataJadwal();
    };
  </script>
</body>

</html>
