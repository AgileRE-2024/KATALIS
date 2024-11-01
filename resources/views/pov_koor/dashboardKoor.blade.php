<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('components.navbarKoor')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('components.sidebarKoor')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome KOOR</h3>
                </div>
              </div>
            </div>
          </div>

          <!-- Tabel Mahasiswa -->
          <table class="table table-striped table-bordered align-middle">
            <thead class="table-primary">
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Siswa</th>
                <th class="text-center">DosBing</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">1</td>
                <td class="text-center">Mhs1</td>
                <td class="text-center">
                  <!-- Dropdown Dosen with scrollable menu -->
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuDosbing1" data-bs-toggle="dropdown" aria-expanded="false">
                      Pilih DosBing
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuDosbing1" style="max-height: 200px; overflow-y: auto;">
                      <li><a class="dropdown-item" href="#">Pak Indra</a></li>
                      <li><a class="dropdown-item" href="#">Pak Badrus</a></li>
                      <li><a class="dropdown-item" href="#">Pak Faried</a></li>
                      <li><a class="dropdown-item" href="#">Bu Siti</a></li>
                      <li><a class="dropdown-item" href="#">Bu Rina</a></li>
                      <li><a class="dropdown-item" href="#">Pak Agus</a></li>
                    </ul>
                  </div>
                </td>
                <td class="text-center">
                  <button class="btn btn-primary">Aksi</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">2</td>
                <td class="text-center">Mhs2</td>
                <td class="text-center">
                  <!-- Dropdown Dosen with scrollable menu -->
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuDosbing2" data-bs-toggle="dropdown" aria-expanded="false">
                      Pilih DosBing
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuDosbing2" style="max-height: 200px; overflow-y: auto;">
                      <li><a class="dropdown-item" href="#">Pak Indra</a></li>
                      <li><a class="dropdown-item" href="#">Pak Badrus</a></li>
                      <li><a class="dropdown-item" href="#">Pak Faried</a></li>
                      <li><a class="dropdown-item" href="#">Bu Siti</a></li>
                      <li><a class="dropdown-item" href="#">Bu Rina</a></li>
                      <li><a class="dropdown-item" href="#">Pak Agus</a></li>
                    </ul>
                  </div>
                </td>
                <td class="text-center">
                  <button class="btn btn-primary">Aksi</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- Bootstrap and JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
