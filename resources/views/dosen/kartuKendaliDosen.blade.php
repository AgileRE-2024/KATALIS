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
              <!-- Tombol "Tambah Jadwal Bimbingan" telah dihapus -->
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
                    <th>Hasil Bimbingan</th>
                    <th>Aksi</th>
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
      // Dummy data untuk daftar jadwal
      let daftarJadwal = JSON.parse(localStorage.getItem("daftarJadwal")) || [
        { nama: "Alice Johnson", nim: "12345678", tanggal: "2024-10-15", hasil: "Belum disetujui" },
        { nama: "David Brown", nim: "23456789", tanggal: "2024-10-16", hasil: "Belum disetujui" },
        { nama: "Emily White", nim: "34567890", tanggal: "2024-10-17", hasil: "Belum disetujui" },
        { nama: "Frank Green", nim: "45678901", tanggal: "2024-10-18", hasil: "Belum disetujui" },
        { nama: "Grace Lee", nim: "56789012", tanggal: "2024-10-19", hasil: "Belum disetujui" },
      ];

      let tableBody = document.getElementById("kartuKendaliTableBody");

      // Bersihkan konten sebelum mengisi ulang
      tableBody.innerHTML = "";

      daftarJadwal.forEach(function(jadwal, index) {
        let row = document.createElement("tr");

        row.innerHTML = `
          <td>${jadwal.nama}</td>
          <td>${jadwal.nim}</td>
          <td>${jadwal.tanggal}</td>
          <td>${jadwal.hasil}</td>
          <td>
            <button class="btn btn-success btn-sm" onclick="setujui(${index})">Disetujui</button>
            <button class="btn btn-danger btn-sm" onclick="tidakSetujui(${index})">Tidak Disetujui</button>
          </td>
        `;

        tableBody.appendChild(row);
      });
    }

    // Fungsi untuk menandai hasil bimbingan sebagai disetujui
    function setujui(index) {
      let daftarJadwal = JSON.parse(localStorage.getItem("daftarJadwal")) || [];
      daftarJadwal[index].hasil = "Disetujui";
      localStorage.setItem("daftarJadwal", JSON.stringify(daftarJadwal));
      muatDataJadwal();
    }

    // Fungsi untuk menandai hasil bimbingan sebagai tidak disetujui
    function tidakSetujui(index) {
      let daftarJadwal = JSON.parse(localStorage.getItem("daftarJadwal")) || [];
      daftarJadwal[index].hasil = "Tidak Disetujui";
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
