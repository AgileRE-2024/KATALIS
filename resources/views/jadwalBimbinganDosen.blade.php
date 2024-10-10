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
                    <th>Tanggal Bimbingan</th>
                    <th>Waktu Bimbingan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="jadwalTableBody">
                  <tr>
                    <td>Alice Johnson</td>
                    <td>12345678</td>
                    <td>2024-10-15</td>
                    <td>10:00 - 11:00</td>
                    <td>
                      <button class="btn btn-success btn-sm" onclick="toggleStatus(0)">Sudah</button>
                    </td>
                  </tr>
                  <tr>
                    <td>David Brown</td>
                    <td>23456789</td>
                    <td>2024-10-16</td>
                    <td>11:00 - 12:00</td>
                    <td>
                      <button class="btn btn-warning btn-sm" onclick="toggleStatus(1)">Belum</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Emily White</td>
                    <td>34567890</td>
                    <td>2024-10-17</td>
                    <td>09:00 - 10:00</td>
                    <td>
                      <button class="btn btn-success btn-sm" onclick="toggleStatus(2)">Sudah</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Frank Green</td>
                    <td>45678901</td>
                    <td>2024-10-18</td>
                    <td>13:00 - 14:00</td>
                    <td>
                      <button class="btn btn-warning btn-sm" onclick="toggleStatus(3)">Belum</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Grace Lee</td>
                    <td>56789012</td>
                    <td>2024-10-19</td>
                    <td>14:00 - 15:00</td>
                    <td>
                      <button class="btn btn-success btn-sm" onclick="toggleStatus(4)">Sudah</button>
                    </td>
                  </tr>
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
