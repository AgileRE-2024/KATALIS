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
              <h3 class="font-weight-bold">Laporan Seminar Mahasiswa</h3>
              <!-- Form untuk menambahkan mahasiswa baru -->
              <form id="formTambahMahasiswa" onsubmit="return tambahMahasiswa(event);">
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="namaMahasiswa">Nama Mahasiswa</label>
                    <input type="text" class="form-control" id="namaMahasiswa" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="tanggalSeminar">Tanggal Seminar</label>
                    <input type="date" class="form-control" id="tanggalSeminar" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="statusKelulusan">Status Kelulusan</label>
                    <select class="form-control" id="statusKelulusan" required>
                      <option value="Lulus">Lulus</option>
                      <option value="Tidak Lulus">Tidak Lulus</option>
                    </select>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
              </form>
              <hr>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nama Mahasiswa</th>
                    <th>Tanggal Seminar</th>
                    <th>Status Kelulusan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody id="daftarSeminar">
                  <!-- Daftar Seminar akan dimuat di sini -->
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
    // Inisialisasi data seminar contoh
    function inisialisasiData() {
      const contohData = [
        { id: 1, nama: "Andi Santoso", tanggal: "2024-09-15", status: "Lulus" },
        { id: 2, nama: "Budi Setiawan", tanggal: "2024-09-16", status: "Tidak Lulus" },
        { id: 3, nama: "Citra Dewi", tanggal: "2024-09-17", status: "Lulus" },
        { id: 4, nama: "Dewi Anggraeni", tanggal: "2024-09-18", status: "Lulus" },
        { id: 5, nama: "Eko Prasetyo", tanggal: "2024-09-19", status: "Tidak Lulus" },
        { id: 6, nama: "Faisal Akbar", tanggal: "2024-09-20", status: "Lulus" }
      ];

      // Simpan data contoh ke localStorage
      localStorage.setItem("daftarSeminar", JSON.stringify(contohData));
    }

    // Fungsi untuk memuat data seminar dari localStorage
    function muatDataSeminar() {
      let daftarSeminar = JSON.parse(localStorage.getItem("daftarSeminar")) || [];
      let daftarSeminarDiv = document.getElementById("daftarSeminar");

      // Bersihkan konten sebelum mengisi ulang
      daftarSeminarDiv.innerHTML = "";

      daftarSeminar.forEach(function(seminar) {
        let row = document.createElement("tr");

        row.innerHTML = `
          <td>${seminar.nama}</td>
          <td>${seminar.tanggal}</td>
          <td>
            <button class="btn btn-${seminar.status === 'Lulus' ? 'success' : 'danger'} btn-sm" onclick="toggleStatus(${seminar.id})">
              ${seminar.status || 'Belum Ditetapkan'}
            </button>
          </td>
          <td>
            <button class="btn btn-danger btn-sm" onclick="hapusMahasiswa(${seminar.id})">Hapus</button>
          </td>
        `;

        daftarSeminarDiv.appendChild(row);
      });
    }

    // Fungsi untuk toggle status kelulusan
    function toggleStatus(id) {
      let daftarSeminar = JSON.parse(localStorage.getItem("daftarSeminar")) || [];
      let seminar = daftarSeminar.find(s => s.id === id);
      
      if (seminar) {
        // Ubah status kelulusan
        if (seminar.status === 'Lulus') {
          seminar.status = 'Tidak Lulus';
        } else {
          seminar.status = 'Lulus';
        }
        
        localStorage.setItem("daftarSeminar", JSON.stringify(daftarSeminar));
        muatDataSeminar();
      }
    }

    // Fungsi untuk menambahkan mahasiswa baru
    function tambahMahasiswa(event) {
      event.preventDefault(); // Mencegah form dari submit default

      let nama = document.getElementById("namaMahasiswa").value;
      let tanggal = document.getElementById("tanggalSeminar").value;
      let status = document.getElementById("statusKelulusan").value;
      let daftarSeminar = JSON.parse(localStorage.getItem("daftarSeminar")) || [];

      // Membuat id baru
      let idBaru = daftarSeminar.length > 0 ? daftarSeminar[daftarSeminar.length - 1].id + 1 : 1;

      // Menambahkan mahasiswa baru ke dalam daftar
      daftarSeminar.push({ id: idBaru, nama: nama, tanggal: tanggal, status: status });
      localStorage.setItem("daftarSeminar", JSON.stringify(daftarSeminar));

      // Muat ulang data seminar
      muatDataSeminar();

      // Reset form
      document.getElementById("formTambahMahasiswa").reset();
    }

    // Fungsi untuk menghapus mahasiswa
    function hapusMahasiswa(id) {
      let daftarSeminar = JSON.parse(localStorage.getItem("daftarSeminar")) || [];
      daftarSeminar = daftarSeminar.filter(seminar => seminar.id !== id);
      localStorage.setItem("daftarSeminar", JSON.stringify(daftarSeminar));
      muatDataSeminar();
    }

    // Panggil fungsi inisialisasi data saat halaman diload
    window.onload = function() {
      // Uncomment the line below if you want to initialize data each time the page loads
      // inisialisasiData();
      muatDataSeminar();
    };
  </script>
</body>

</html>
