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
          
          <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>DosBing</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mhs1</td>
                        <td>
                            <select class="form-select">
                                <option value="">Pilih DosBing</option>
                                <option value="active">Pak Indra</option>
                                <option value="inactive">Pak Badrus</option>
                                <option value="graduate">Pak Faried</option>
                            </select>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-bs-toggle="dropdown">
                                    Aksi
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mhs2</td>
                        <td>
                            <select class="form-select">
                                <option value="">Pilih DosBing</option>
                                <option value="active">Pak Indra</option>
                                <option value="inactive">Pak Badrus</option>
                                <option value="graduate">Pak Faried</option>
                            </select>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown">
                                    Aksi
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mhs3</td>
                        <td>
                            <select class="form-select">
                                <option value="">Pilih DosBing</option>
                                <option value="active">Pak Indra</option>
                                <option value="inactive">Pak Badrus</option>
                                <option value="graduate">Pak Faried</option>
                            </select>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu3" data-bs-toggle="dropdown">
                                    Aksi
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>



        </div>
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
</body>

</html>
