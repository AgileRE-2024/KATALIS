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
              <h3 class="font-weight-bold">Laporan Mahasiswa</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Komentar</th>
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
    // Data dummy mahasiswa
    const dummyData = [
      { id: 1, nama: 'Ahmad Junaidi', nim: '2023101', komentar: '' },
      { id: 2, nama: 'Siti Nurhaliza', nim: '2023102', komentar: '' },
      { id: 3, nama: 'Budi Santoso', nim: '2023103', komentar: '' },
      { id: 4, nama: 'Rina Amelia', nim: '2023104', komentar: '' },
      { id: 5, nama: 'Dewi Sartika', nim: '2023105', komentar: '' },
    ];

    // Fungsi untuk menyimpan data dummy ke localStorage jika belum ada
    function initData() {
      if (!localStorage.getItem("daftarMahasiswa")) {
        localStorage.setItem("daftarMahasiswa", JSON.stringify(dummyData));
      }
    }

    // Fungsi untuk memuat data mahasiswa dari localStorage
    function muatDataMahasiswa() {
      let daftarMahasiswa = JSON.parse(localStorage.getItem("daftarMahasiswa")) || [];
      let daftarMahasiswaDiv = document.getElementById("daftarMahasiswa");

      // Bersihkan konten sebelum mengisi ulang
      daftarMahasiswaDiv.innerHTML = "";

      daftarMahasiswa.forEach(function(mahasiswa) {
        let row = document.createElement("tr");

        row.innerHTML = `
          <td>${mahasiswa.nama}</td>
          <td>${mahasiswa.nim}</td>
          <td><input type="text" class="form-control" placeholder="Komentar" value="${mahasiswa.komentar || ''}" onchange="updateKomentar(${mahasiswa.id}, this.value)"></td>
          <td>
            <button class="btn btn-success btn-sm" onclick="berikanNilai(${mahasiswa.id})">Berikan Nilai</button>
          </td>
        `;

        daftarMahasiswaDiv.appendChild(row);
      });
    }

    // Fungsi untuk memperbarui komentar mahasiswa
    function updateKomentar(id, komentar) {
      let daftarMahasiswa = JSON.parse(localStorage.getItem("daftarMahasiswa")) || [];
      let mahasiswa = daftarMahasiswa.find(m => m.id === id);
      
      if (mahasiswa) {
        mahasiswa.komentar = komentar;
        localStorage.setItem("daftarMahasiswa", JSON.stringify(daftarMahasiswa));
      }
    }

    // Fungsi untuk memberikan nilai pada mahasiswa
    function berikanNilai(id) {
      alert(`Nilai telah diberikan kepada mahasiswa dengan ID: ${id}`);
      // Logika tambahan untuk memberikan nilai bisa ditambahkan di sini
    }

    // Inisialisasi data dan memuat saat halaman diload
    window.onload = function() {
      initData();
      muatDataMahasiswa();
    };
  </script>
</body>

</html>
