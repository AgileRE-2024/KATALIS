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
              <h3 class="font-weight-bold">Tambah Mahasiswa</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <form id="formTambahMahasiswa">
                    <div class="form-group">
                      <label for="namaMahasiswa">Nama Mahasiswa</label>
                      <input type="text" class="form-control" id="namaMahasiswa" placeholder="Masukkan nama mahasiswa">
                    </div>
                    <div class="form-group">
                      <label for="nimMahasiswa">NIM</label>
                      <input type="text" class="form-control" id="nimMahasiswa" placeholder="Masukkan NIM">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="tambahMahasiswa()">Tambah</button>
                    <a href="anakBimbing" class="btn btn-secondary">Kembali</a>
                  </form>
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
    function tambahMahasiswa() {
      var namaMahasiswa = document.getElementById("namaMahasiswa").value;
      var nimMahasiswa = document.getElementById("nimMahasiswa").value;

      if (namaMahasiswa === "" || nimMahasiswa === "") {
        alert("Nama dan NIM harus diisi!");
        return;
      }

      // Simpan ke localStorage
      let mahasiswaBaru = {
        nama: namaMahasiswa,
        nim: nimMahasiswa
      };

      let daftarMahasiswa = JSON.parse(localStorage.getItem("daftarMahasiswa")) || [];
      daftarMahasiswa.push(mahasiswaBaru);
      localStorage.setItem("daftarMahasiswa", JSON.stringify(daftarMahasiswa));

      // Pindah ke halaman daftar mahasiswa
      window.location.href = "informasipkl";
    }
  </script>
</body>

</html>

  <script>
  function muatDataMahasiswa() {
    let daftarMahasiswa = JSON.parse(localStorage.getItem("daftarMahasiswa")) || [];
    let tableBody = document.getElementById("mahasiswaTableBody");

    daftarMahasiswa.forEach(function(mahasiswa) {
      let row = document.createElement("tr");

      row.innerHTML = `
        <td>${mahasiswa.nama}</td>
        <td>${mahasiswa.nim}</td>
        <td><a href="#">Lihat Profil</a></td>
        <td><button class="btn btn-danger btn-sm" onclick="hapusBaris(this)">Hapus</button></td>
      `;

      tableBody.appendChild(row);
    });
  }

  window.onload = function() {
    muatDataMahasiswa();
  };
</script>

