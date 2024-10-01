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

          <div class="row" id="kartuKendali">
            <!-- Kartu Kendali akan dimuat di sini -->
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
      let kartuKendali = document.getElementById("kartuKendali");

      // Bersihkan konten sebelum mengisi ulang
      kartuKendali.innerHTML = "";

      daftarJadwal.forEach(function(jadwal, index) {
        let card = document.createElement("div");
        card.className = "col-md-4"; // Set ukuran kartu 4 kolom per baris

        card.innerHTML = `
          <div class="card mb-3">
            <div class="card-body">
              <h5 class="card-title">${jadwal.nama}</h5>
              <p class="card-text">NIM: ${jadwal.nim}</p>
              <p class="card-text">Tanggal Bimbingan: ${jadwal.tanggal}</p>
              <p class="card-text">Hasil Bimbingan: ${jadwal.hasil ? jadwal.hasil : 'Belum ada hasil'}</p>
              <p class="card-text">Dokumentasi: ${jadwal.dokumentasi ? '<a href="#" onclick="tampilkanFoto(\'' + jadwal.dokumentasi + '\')">Lihat Foto</a>' : 'Belum ada dokumentasi'}</p>
              <button class="btn btn-danger btn-sm" onclick="hapusJadwal(${index})">Hapus</button>
            </div>
          </div>
        `;

        kartuKendali.appendChild(card);
      });
    }

    // Fungsi untuk menghapus jadwal bimbingan
    function hapusJadwal(index) {
      let daftarJadwal = JSON.parse(localStorage.getItem("daftarJadwal")) || [];
      daftarJadwal.splice(index, 1);
      localStorage.setItem("daftarJadwal", JSON.stringify(daftarJadwal));
      muatDataJadwal();
    }

    // Fungsi untuk menampilkan foto dalam modal
    function tampilkanFoto(url) {
      let imgWindow = window.open();
      imgWindow.document.write('<html><body><img src="' + url + '" style="width:100%;"></body></html>');
    }

    // Panggil fungsi muat data saat halaman diload
    window.onload = function() {
      muatDataJadwal();
    };
  </script>
</body>

</html>
