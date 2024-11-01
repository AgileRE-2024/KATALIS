<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>
  <div class="container-scroller">
    @include('components.navbarKoor')

    <div class="container-fluid page-body-wrapper">
      @include('components.sidebarKoor')
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Daftar Pengajuan Kelompok</h3>
                </div>
              </div>
            </div>
          </div>

          <!-- Tabel Pengajuan Kelompok -->
          <table class="table table-striped table-bordered align-middle">
            <thead class="table-primary">
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Kelompok</th>
                <th class="text-center">Ketua Kelompok</th>
                <th class="text-center">Anggota Kelompok</th>
                <th class="text-center">Dosen Pembimbing Usulan</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <!-- Contoh Data Kelompok -->
              <tr>
                <td class="text-center">1</td>
                <td class="text-center">Kelompok A</td>
                <td class="text-center">Mhs Ketua</td>
                <td>
                  <ul>
                    <li>Mhs1</li>
                    <li>Mhs2</li>
                    <li>Mhs3</li>
                    <!-- Tambahkan anggota lainnya jika ada -->
                  </ul>
                </td>
                <td class="text-center">Pak Indra</td>
                <td class="text-center">
                  <button class="btn btn-success">Setujui</button>
                  <button class="btn btn-danger">Tolak</button>
                </td>
              </tr>
              <!-- Tambahkan baris lainnya sesuai data kelompok -->
            </tbody>
          </table>
        </div>
      </div>
    </div>   
  </div>

  <!-- Bootstrap and JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
