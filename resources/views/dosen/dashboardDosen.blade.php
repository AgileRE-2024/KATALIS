<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('components.navbarDosen')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('components.sidebarDosen')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome {{ $dosen ? $dosen->name : 'Guest' }}</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Kotak 1 -->
            <div class="col-md-4 mb-4 stretch-card transparent">
              <div class="card tale-bg">
                <div class="card-body">
                  <p class="card-title">Anak Bimbing</p>
                  <p class="card-content">7 Orang</p>
                </div>
              </div>
            </div>
          
            <!-- Kotak 2 -->
            <div class="col-md-4 mb-4 stretch-card transparent">
              <div class="card card-tale">
                <div class="card-body">
                  <p class="card-title">Masa Penyusunan Laporan</p>
                  <p class="card-content">3 Orang</p>
                </div>
              </div>
            </div>
          
            <!-- Kotak 3 -->
            <div class="col-md-4 mb-4 stretch-card transparent">
              <div class="card card-dark-blue">
                <div class="card-body">
                  <p class="card-title">Masa PKL</p>
                  <p class="card-content">2 Orang</p>
                </div>
              </div>
            </div>
          
            <!-- Kotak 4 -->
            <div class="col-md-4 mb-4 stretch-card transparent">
              <div class="card card-light-blue">
                <div class="card-body">
                  <p class="card-title">Lulus PKL</p>
                  <p class="card-content">1 Orang</p>
                </div>
              </div>
            </div>
          
            <!-- Kotak 5 -->
            <div class="col-md-4 mb-4 stretch-card transparent">
              <div class="card card-light-danger">
                <div class="card-body">
                  <p class="card-title">Seminar</p>
                  <p class="card-content">3 Seminar</p>
                </div>
              </div>
            </div>
          
            <!-- Kotak 6 -->
            <div class="col-md-4 mb-4 stretch-card transparent">
              <div class="card tale-bg">
                <div class="card-body">
                  <p class="card-title">Konsultasi Bimbingan</p>
                  <p class="card-content">1 Orang</p>
                </div>
              </div>
            </div>
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
