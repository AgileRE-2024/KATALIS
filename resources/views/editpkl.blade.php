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
              <h3 class="font-weight-bold">Edit Informasi PKL</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <form id="editPklForm">
                <div class="form-group">
                  <label for="nama_perusahaan">Nama Perusahaan</label>
                  <input type="text" class="form-control" id="nama_perusahaan" required>
                </div>
                <div class="form-group">
                  <label for="alamat_perusahaan">Alamat Perusahaan</label>
                  <input type="text" class="form-control" id="alamat_perusahaan" required>
                </div>
                <div class="form-group">
                  <label for="role">Role</label>
                  <input type="text" class="form-control" id="role" required>
                </div>
                <div class="form-group">
                  <label for="periode">Periode PKL</label>
                  <input type="text" class="form-control" id="periode" required>
                </div>
                <div class="form-group">
                  <label for="surat_permohonan">Surat Permohonan (Upload File)</label>
                  <input type="file" class="form-control" id="surat_permohonan" required>
                </div>
                <div class="form-group">
                  <label for="surat_penerimaan">Surat Penerimaan (Upload File)</label>
                  <input type="file" class="form-control" id="surat_penerimaan" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script>
    window.onload = function() {
      loadPklData();

      document.getElementById('editPklForm').onsubmit = function(event) {
        event.preventDefault();
        savePklData();
      };
    };

    function loadPklData() {
      // Load data from localStorage
      const daftarPkl = JSON.parse(localStorage.getItem("daftarPkl")) || [];
      
      // Assuming you're editing the last entry for simplicity
      const index = daftarPkl.length - 1; 

      if (daftarPkl.length > 0) {
        const pkl = daftarPkl[index]; // Get the last PKL entry
        document.getElementById('nama_perusahaan').value = pkl.nama_perusahaan;
        document.getElementById('alamat_perusahaan').value = pkl.alamat_perusahaan;
        document.getElementById('role').value = pkl.role;
        document.getElementById('periode').value = pkl.periode;
        // No longer loading file input values directly as files cannot be stored in localStorage
      }
    }

    function savePklData() {
      const daftarPkl = JSON.parse(localStorage.getItem("daftarPkl")) || [];
      const updatedPkl = {
        nama_perusahaan: document.getElementById('nama_perusahaan').value,
        alamat_perusahaan: document.getElementById('alamat_perusahaan').value,
        role: document.getElementById('role').value,
        periode: document.getElementById('periode').value,
        surat_permohonan: document.getElementById('surat_permohonan').files[0]?.name, // Save only the file name
        surat_penerimaan: document.getElementById('surat_penerimaan').files[0]?.name, // Save only the file name
      };

      daftarPkl[daftarPkl.length - 1] = updatedPkl; // Update the last PKL entry
      localStorage.setItem("daftarPkl", JSON.stringify(daftarPkl)); // Save back to localStorage

      alert('Data berhasil disimpan!');
      window.location.href = 'informasipkl'; // Redirect back to the main page or desired page
    }
  </script>

  <style>
    /* Additional styling can be added here */
  </style>
</body>

</html>
