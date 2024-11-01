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
              <hr>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <!-- Search Input -->
              <div class="form-group" style="width: 30%;">
                <input type="text" class="form-control" id="searchMahasiswa" onkeyup="filterMahasiswa()" placeholder="Masukkan nama mahasiswa...">
              </div>

              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Nama Mahasiswa</th>
                    <th>Tanggal Seminar</th>
                    <th>Status Kelulusan</th>
                    <th>Aksi</th>
                    <th>Grade</th>
                    <th>Status Penilaian</th>
                  </tr>
                </thead>
                <tbody id="daftarSeminar">
                  <!-- Daftar Seminar akan dimuat di sini -->
                </tbody>
              </table>

              <!-- Pagination -->
              <nav aria-label="Page navigation">
                <ul class="pagination" id="pagination">
                  <!-- Pagination items will be injected here -->
                </ul>
              </nav>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Modal for Input Nilai -->
  <div class="modal fade" id="inputNilaiModal" tabindex="-1" role="dialog" aria-labelledby="inputNilaiModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="inputNilaiModalLabel">Input Nilai Mahasiswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="penilaianForm">
            <div class="form-group">
              <label for="mahasiswaId">ID Mahasiswa</label>
              <input type="text" class="form-control" id="mahasiswaId" disabled>
            </div>
            <div class="form-group">
              <label for="mahasiswaName">Nama Mahasiswa</label>
              <input type="text" class="form-control" id="mahasiswaName" disabled>
            </div>
            <div class="form-group">
              <label for="kehadiran">Kehadiran, Disiplin, dan Etika (1-100,20%)</label>
              <input type="number" class="form-control" id="kehadiran" required>
            </div>
            <div class="form-group">
              <label for="pemahaman">Pemahaman Masalah dan Solusi (1-100,20%)</label>
              <input type="number" class="form-control" id="pemahaman" required>
            </div>
            <div class="form-group">
              <label for="kerjaTim">Kerja Tim (1-100,20%)</label>
              <input type="number" class="form-control" id="kerjaTim" required>
            </div>
            <div class="form-group">
              <label for="luaran">Luaran dari Tempat PKL (1-100,20%)</label>
              <input type="number" class="form-control" id="luaran" required>
            </div>
            <div class="form-group">
              <label for="laporan">Buku Laporan Praktik Kerja Lapangan (1-100,20%)</label>
              <input type="number" class="form-control" id="laporan" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary" id="saveNilaiButton">Simpan Nilai</button>
        </div>
      </div>
    </div>
  </div>

  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    const mahasiswaPerPage = 5; // Number of students per page
    let currentPage = 1;

    // Inisialisasi data seminar contoh
    function inisialisasiData() {
      const contohData = [
        { id: 1, nama: "Andi Santoso", tanggal: "2024-09-15", status: "Lulus", grade: null },
        { id: 2, nama: "Budi Setiawan", tanggal: "2024-09-16", status: "Tidak Lulus", grade: null },
        { id: 3, nama: "Citra Dewi", tanggal: "2024-09-17", status: "Lulus", grade: null },
        { id: 4, nama: "Dewi Anggraeni", tanggal: "2024-09-18", status: "Lulus", grade: null },
        { id: 5, nama: "Eko Prasetyo", tanggal: "2024-09-19", status: "Tidak Lulus", grade: null },
        { id: 6, nama: "Faisal Akbar", tanggal: "2024-09-20", status: "Lulus", grade: null },
        { id: 7, nama: "Gina Nurhaliza", tanggal: "2024-09-21", status: "Lulus", grade: null },
        { id: 8, nama: "Hadi Susanto", tanggal: "2024-09-22", status: "Lulus", grade: null },
        { id: 9, nama: "Indah Permatasari", tanggal: "2024-09-23", status: "Tidak Lulus", grade: null },
        { id: 10, nama: "Joko Widodo", tanggal: "2024-09-24", status: "Lulus", grade: null },
        { id: 11, nama: "Karin Melati", tanggal: "2024-09-25", status: "Lulus", grade: null },
        { id: 12, nama: "Lina Maulani", tanggal: "2024-09-26", status: "Lulus", grade: null },
        { id: 13, nama: "Mira Ciptaning", tanggal: "2024-09-27", status: "Tidak Lulus", grade: null },
        { id: 14, nama: "Nina Rahmawati", tanggal: "2024-09-28", status: "Lulus", grade: null },
        { id: 15, nama: "Oki Setiawan", tanggal: "2024-09-29", status: "Lulus", grade: null },
        { id: 16, nama: "Putri Citra", tanggal: "2024-09-30", status: "Tidak Lulus", grade: null },
        { id: 17, nama: "Qori Aulia", tanggal: "2024-10-01", status: "Lulus", grade: null },
        { id: 18, nama: "Rina Sari", tanggal: "2024-10-02", status: "Lulus", grade: null },
        { id: 19, nama: "Sari Indah", tanggal: "2024-10-03", status: "Tidak Lulus", grade: null },
        { id: 20, nama: "Tina Novita", tanggal: "2024-10-04", status: "Lulus", grade: null },
        { id: 21, nama: "Umar Faruk", tanggal: "2024-10-05", status: "Lulus", grade: null },
        { id: 22, nama: "Vina Melati", tanggal: "2024-10-06", status: "Tidak Lulus", grade: null },
        { id: 23, nama: "Wina Kharisma", tanggal: "2024-10-07", status: "Lulus", grade: null },
        { id: 24, nama: "Xena Pramudita", tanggal: "2024-10-08", status: "Tidak Lulus", grade: null },
        { id: 25, nama: "Yuda Prasetya", tanggal: "2024-10-09", status: "Lulus", grade: null },
        { id: 26, nama: "Zahra Fitriani", tanggal: "2024-10-10", status: "Lulus", grade: null },
        { id: 27, nama: "Alya Rahma", tanggal: "2024-10-11", status: "Tidak Lulus", grade: null },
        { id: 28, nama: "Bima Aditya", tanggal: "2024-10-12", status: "Lulus", grade: null },
        { id: 29, nama: "Cindy Arista", tanggal: "2024-10-13", status: "Lulus", grade: null },
        { id: 30, nama: "Danu Prabowo", tanggal: "2024-10-14", status: "Tidak Lulus", grade: null },
        { id: 31, nama: "Eka Saputra", tanggal: "2024-10-15", status: "Lulus", grade: null },
        { id: 32, nama: "Fina Mardiana", tanggal: "2024-10-16", status: "Lulus", grade: null },
        { id: 33, nama: "Gerry Basuki", tanggal: "2024-10-17", status: "Tidak Lulus", grade: null },
        { id: 34, nama: "Hana Siti", tanggal: "2024-10-18", status: "Lulus", grade: null },
        { id: 35, nama: "Iwan Setiawan", tanggal: "2024-10-19", status: "Lulus", grade: null },
      ];

      // Simpan data ke localStorage
      localStorage.setItem("daftarSeminar", JSON.stringify(contohData));
    }

    // Fungsi untuk memuat data seminar dari localStorage dan menampilkan halaman yang sesuai
    function muatDataSeminar() {
      let daftarSeminar = JSON.parse(localStorage.getItem("daftarSeminar")) || [];
      let daftarSeminarDiv = document.getElementById("daftarSeminar");
      let paginationDiv = document.getElementById("pagination");

      // Bersihkan konten sebelum mengisi ulang
      daftarSeminarDiv.innerHTML = "";
      paginationDiv.innerHTML = "";

      // Menghitung total halaman
      const totalPages = Math.ceil(daftarSeminar.length / mahasiswaPerPage);
      const startIndex = (currentPage - 1) * mahasiswaPerPage;
      const endIndex = Math.min(startIndex + mahasiswaPerPage, daftarSeminar.length);

      // Menampilkan data seminar untuk halaman tertentu
      for (let i = startIndex; i < endIndex; i++) {
        const seminar = daftarSeminar[i];
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
                <button class="btn btn-custom btn-sm" onclick="lihatLaporan(${seminar.id})">Lihat Laporan</button>
            </td>
            <td>${seminar.grade || `<button class="btn btn-custom btn-sm" onclick="showInputNilaiModal(${seminar.id})">Input Nilai</button>`}</td>
            <td>${seminar.nilai === null ? 'Belum Dinilai' : 'Sudah Dinilai'}</td>
        `;

        daftarSeminarDiv.appendChild(row);
      }

      // Menampilkan pagination
      for (let page = 1; page <= totalPages; page++) {
        let pageItem = document.createElement("li");
        pageItem.className = "page-item";
        pageItem.innerHTML = `<a class="page-link" href="#" onclick="changePage(${page})">${page}</a>`;
        paginationDiv.appendChild(pageItem);
      }
    }

    // Fungsi untuk mengubah halaman
    function changePage(page) {
      currentPage = page;
      muatDataSeminar();
    }

    // Show the modal for inputting grades
    function showInputNilaiModal(id) {
      const daftarSeminar = JSON.parse(localStorage.getItem("daftarSeminar")) || [];
      const mahasiswa = daftarSeminar.find(m => m.id === id);
      
      if (mahasiswa) {
          document.getElementById("mahasiswaId").value = mahasiswa.id;
          document.getElementById("mahasiswaName").value = mahasiswa.nama;
          $('#inputNilaiModal').modal('show'); // Use jQuery to show the modal
      }
    }

    // Save the grade and close the modal
    document.getElementById("saveNilaiButton").addEventListener("click", function() {
      const mahasiswaId = document.getElementById("mahasiswaId").value;
      const kehadiran = parseFloat(document.getElementById("kehadiran").value) || 0;
      const pemahaman = parseFloat(document.getElementById("pemahaman").value) || 0;
      const kerjaTim = parseFloat(document.getElementById("kerjaTim").value) || 0;
      const luaran = parseFloat(document.getElementById("luaran").value) || 0;
      const laporan = parseFloat(document.getElementById("laporan").value) || 0;

      let daftarSeminar = JSON.parse(localStorage.getItem("daftarSeminar")) || [];
      const mahasiswa = daftarSeminar.find(m => m.id == mahasiswaId);

      if (mahasiswa) {
          mahasiswa.nilai = {
              kehadiran,
              pemahaman,
              kerjaTim,
              luaran,
              laporan
          }; // Update nilai in the seminar object

          // Hitung nilai akhir
          const totalNilai = (kehadiran * 0.2) + (pemahaman * 0.2) + (kerjaTim * 0.2) + (luaran * 0.2) + (laporan * 0.2);

          // Konversi nilai akhir ke dalam huruf
          let grade;
          if (totalNilai >= 86) {
              grade = 'A';
          } else if (totalNilai >= 78) {
              grade = 'AB';
          } else if (totalNilai >= 70) {
              grade = 'B';
          } else if (totalNilai >= 62) {
              grade = 'BC';
          } else if (totalNilai >= 54) {
              grade = 'C';
          } else if (totalNilai >= 40) {
              grade = 'D';
          } else {
              grade = 'E';
          }

          // Update status dan grade
          if (grade === 'A' || grade === 'AB' || grade === 'B' || grade === 'BC' || grade === 'C' || grade === 'D') {
              mahasiswa.status = 'Lulus';
          } else {
              mahasiswa.status = 'Tidak Lulus';
          }
          mahasiswa.grade = grade; // Store the grade in the seminar object
          localStorage.setItem("daftarSeminar", JSON.stringify(daftarSeminar));
          alert("Nilai berhasil disimpan!");

          // Update tampilan tabel
          muatDataSeminar(); // Refresh the table data
          $('#inputNilaiModal').modal('hide'); // Close the modal
      }
    });

    // Inisialisasi data seminar saat halaman dimuat
    document.addEventListener("DOMContentLoaded", function() {
      if (!localStorage.getItem("daftarSeminar")) {
        inisialisasiData();
      }
      muatDataSeminar();
    });

    function filterMahasiswa() {
      const searchValue = document.getElementById('searchMahasiswa').value.toLowerCase();
      const rows = document.querySelectorAll("#daftarSeminar tr");

      rows.forEach(row => {
          const nameCell = row.cells[0].textContent.toLowerCase();
          row.style.display = nameCell.includes(searchValue) ? "" : "none";
      });
    }

    function toggleStatus(id) {
      let daftarSeminar = JSON.parse(localStorage.getItem("daftarSeminar")) || [];
      const mahasiswa = daftarSeminar.find(m => m.id === id);
      
      if (mahasiswa) {
          mahasiswa.status = mahasiswa.status === 'Lulus' ? 'Tidak Lulus' : 'Lulus';
          localStorage.setItem("daftarSeminar", JSON.stringify(daftarSeminar));
          muatDataSeminar();
      }
    }

    function lihatLaporan(id) {
      // Logika untuk melihat laporan
      alert('Laporan belum tersedia.');
    }
  </script>
</body>
</html>