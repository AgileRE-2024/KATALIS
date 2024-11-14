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
                    <th>Tanggal Konsultasi</th>
                    <th>Waktu Konsultasi</th>
                    <th>Topik</th>
                    <th>Hasil Bimbingan</th>
                    <th>Dokumentasi Bimbingan</th>
                  </tr>
                </thead>
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
      let daftarJadwal = JSON.parse(localStorage.getItem("daftarJadwal")) || [
        { nama: "Alice Johnson", nim: "12345678", tanggal: "2024-10-15", status: "Sudah" },
        { nama: "David Brown", nim: "23456789", tanggal: "2024-10-16", status: "Belum" },
        { nama: "Emily White", nim: "34567890", tanggal: "2024-10-17", status: "Sudah" },
        { nama: "Frank Green", nim: "45678901", tanggal: "2024-10-18", status: "Belum" },
        { nama: "Grace Lee", nim: "56789012", tanggal: "2024-10-19", status: "Sudah" },
      ];

      let tableBody = document.getElementById("jadwalTableBody");

      // Bersihkan tabel sebelum mengisi ulang
      tableBody.innerHTML = "";

      daftarJadwal.forEach(function(jadwal, index) {
        let row = document.createElement("tr");

        row.innerHTML = `
          <td>${jadwal.nama}</td>
          <td>${jadwal.nim}</td>
          <td>${jadwal.tanggal}</td>
          <td>${jadwal.waktu || "10:00 - 11:00"}</td>
          <td>
            <button class="btn btn-${jadwal.status === 'Sudah' ? 'success' : 'warning'} btn-sm" onclick="toggleStatus(${index})">${jadwal.status}</button>
          </td>
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

    // Panggil fungsi muat data saat halaman diload
    window.onload = function() {
      muatDataJadwal();
    };
  </script>
</body>
</html>
