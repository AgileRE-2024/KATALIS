<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>
  <div class="container-scroller">
    @include('components.navbar')

    <div class="container-fluid page-body-wrapper">
      @include('components.sidebarfix')

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <h3 class="font-weight-bold">Tambah Informasi PKL</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12"> <!-- Menggunakan col-md-12 untuk memperlebar form -->
              <div class="card">
                <div class="card-body">
                  <form id="formTambahPkl">
                    <div class="form-group">
                      <label for="nama_perusahaan">Nama Perusahaan</label>
                      <input type="text" class="form-control" id="nama_perusahaan" placeholder="Masukkan nama perusahaan" required>
                    </div>
                    <div class="form-group">
                      <label for="alamat_perusahaan">Alamat Perusahaan</label>
                      <input type="text" class="form-control" id="alamat_perusahaan" placeholder="Masukkan alamat perusahaan" required>
                    </div>
                    <div class="form-group">
                      <label for="role">Role</label>
                      <input type="text" class="form-control" id="role" placeholder="Masukkan role" required>
                    </div>
                    <div class="form-group">
                      <label>Periode PKL</label>
                      <div class="input-group">
                        <input type="date" id="tanggal_mulai_pkl" class="form-control" required>
                        <label class="ml-3 mr-3">-</label>
                        <input type="date" id="tanggal_akhir_pkl" class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Surat Permohonan PKL (PDF)</label>
                      <div class="input-group">
                        <input type="file" id="surat_permohonan" class="d-none" accept=".pdf" required onchange="tampilkanFile('surat_permohonan')">
                        <button type="button" class="btn btn-secondary" onclick="document.getElementById('surat_permohonan').click();">Pilih File</button>
                        <small id="filePermohonan" class="form-text text-muted"></small>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Surat Penerimaan PKL (PDF)</label>
                      <div class="input-group">
                        <input type="file" id="surat_penerimaan" class="d-none" accept=".pdf" required onchange="tampilkanFile('surat_penerimaan')">
                        <button type="button" class="btn btn-secondary" onclick="document.getElementById('surat_penerimaan').click();">Pilih File</button>
                        <small id="filePenerimaan" class="form-text text-muted"></small>
                      </div>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="tambahPkl()">Tambah</button>
                    <a href="tabel_pkl.html" class="btn btn-secondary">Kembali</a> <!-- Ganti URL sesuai kebutuhan -->
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
    // Memeriksa apakah data PKL sudah ada di localStorage
    document.addEventListener("DOMContentLoaded", function() {
      const daftarPkl = JSON.parse(localStorage.getItem("daftarPkl")) || [];
      if (daftarPkl.length > 0) {
        // Jika sudah ada data, disable form
        disableForm();
        const pkl = daftarPkl[0]; // Mengambil data PKL pertama
        document.getElementById("nama_perusahaan").value = pkl.nama_perusahaan;
        document.getElementById("alamat_perusahaan").value = pkl.alamat_perusahaan;
        document.getElementById("role").value = pkl.role;
        document.getElementById("tanggal_mulai_pkl").value = pkl.periode.split(" - ")[0];
        document.getElementById("tanggal_akhir_pkl").value = pkl.periode.split(" - ")[1];
        // Menampilkan nama file jika ada
        document.getElementById("filePermohonan").textContent = `File yang diunggah: ${pkl.surat_permohonan}`;
        document.getElementById("filePenerimaan").textContent = `File yang diunggah: ${pkl.surat_penerimaan}`;
      }
    });

    function disableForm() {
      const formElements = document.querySelectorAll("#formTambahPkl input");
      formElements.forEach(element => {
        element.disabled = true; // Disable setiap elemen input
      });
      document.querySelector("button.btn-primary").disabled = true; // Disable tombol tambah
    }

    function tampilkanFile(inputId) {
      const fileInput = document.getElementById(inputId);
      const fileName = fileInput.files[0]?.name || 'N/A';
      const fileText = inputId === 'surat_permohonan' ? document.getElementById("filePermohonan") : document.getElementById("filePenerimaan");
      
      fileText.textContent = `File yang diunggah: ${fileName}`;
    }

    function tambahPkl() {
      var nama_perusahaan = document.getElementById("nama_perusahaan").value;
      var alamat_perusahaan = document.getElementById("alamat_perusahaan").value;
      var role = document.getElementById("role").value;
      var tanggal_mulai_pkl = document.getElementById("tanggal_mulai_pkl").value;
      var tanggal_akhir_pkl = document.getElementById("tanggal_akhir_pkl").value;
      var surat_permohonan = document.getElementById("surat_permohonan").files[0]?.name || 'N/A';
      var surat_penerimaan = document.getElementById("surat_penerimaan").files[0]?.name || 'N/A';

      if (!nama_perusahaan || !alamat_perusahaan || !role || !tanggal_mulai_pkl || !tanggal_akhir_pkl) {
        alert("Semua field harus diisi!");
        return;
      }

      // Simpan ke localStorage hanya jika belum ada data
      let daftarPkl = JSON.parse(localStorage.getItem("daftarPkl")) || [];
      if (daftarPkl.length === 0) {
        let pklBaru = {
          nama_perusahaan,
          alamat_perusahaan,
          role,
          periode: `${tanggal_mulai_pkl} - ${tanggal_akhir_pkl}`,
          surat_permohonan,
          surat_penerimaan
        };
        
        daftarPkl.push(pklBaru);
        localStorage.setItem("daftarPkl", JSON.stringify(daftarPkl));
        
        alert('Data PKL berhasil disimpan!');
        disableForm(); // Disable form setelah menyimpan
      } else {
        // Jika data sudah ada, update data yang ada
        let pklBaru = {
          nama_perusahaan,
          alamat_perusahaan,
          role,
          periode: `${tanggal_mulai_pkl} - ${tanggal_akhir_pkl}`,
          surat_permohonan,
          surat_penerimaan
        };
        
        localStorage.setItem("daftarPkl", JSON.stringify([pklBaru])); // Update data
        alert('Data PKL berhasil diperbarui!');
      }

      // Kosongkan form setelah disubmit
      document.getElementById("formTambahPkl").reset();
      document.getElementById("filePermohonan").textContent = "";
      document.getElementById("filePenerimaan").textContent = "";
    }
  </script>
</body>

</html>
