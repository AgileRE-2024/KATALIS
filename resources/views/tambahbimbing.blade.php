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
              <h3 class="font-weight-bold">Tambah Jadwal Bimbingan</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <!-- Form Tambah Jadwal Bimbingan -->
              <div class="card">
                <div class="card-body">
                  <form id="formTambahJadwal">
                    <div class="form-group">
                      <label for="namaMahasiswa">Nama Mahasiswa</label>
                      <input type="text" class="form-control" id="namaMahasiswa" placeholder="Masukkan nama mahasiswa">
                    </div>
                    <div class="form-group">
                      <label for="nimMahasiswa">NIM</label>
                      <input type="text" class="form-control" id="nimMahasiswa" placeholder="Masukkan NIM">
                    </div>
                    <div class="form-group">
                      <label for="tanggalBimbingan">Tanggal Bimbingan</label>
                      <input type="date" class="form-control" id="tanggalBimbingan">
                    </div>
                  </form>
                  <!-- Tombol dengan ukuran kecil -->
                  <button type="button" class="btn btn-primary btn-sm" onclick="tambahJadwal()">Simpan Jadwal</button>
                  <a href="jadwalBimbinganDosen" class="btn btn-secondary btn-sm">Kembali</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script>
    // Fungsi untuk menambahkan jadwal bimbingan
    function tambahJadwal() {
      var namaMahasiswa = document.getElementById("namaMahasiswa").value;
      var nimMahasiswa = document.getElementById("nimMahasiswa").value;
      var tanggalBimbingan = document.getElementById("tanggalBimbingan").value;

      if (namaMahasiswa === "" || nimMahasiswa === "" || tanggalBimbingan === "") {
        alert("Semua field harus diisi!");
        return;
      }

      // Simpan data jadwal ke localStorage
      let jadwalBaru = {
        nama: namaMahasiswa,
        nim: nimMahasiswa,
        tanggal: tanggalBimbingan,
        status: "Belum"
      };

      let daftarJadwal = JSON.parse(localStorage.getItem("daftarJadwal")) || [];
      daftarJadwal.push(jadwalBaru);
      localStorage.setItem("daftarJadwal", JSON.stringify(daftarJadwal));

      // Alihkan kembali ke halaman utama
      window.location.href = "index.html";
    }
  </script>
</body>

</html>
