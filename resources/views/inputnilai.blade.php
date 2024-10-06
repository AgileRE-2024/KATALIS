<!DOCTYPE html>
<html lang="en">
@include('components.head')

<style>
  .btn-custom {
    background-color: white !important; /* White background */
    color: black !important; /* Black text */
    border: 1px solid #ccc; /* Optional: light grey border */
  }

  .btn-custom:hover {
    background-color: #f0f0f0; /* Light grey background on hover */
  }
</style>

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

          

          

        </div>
      </div>
    </div>
  </div>


  </script>
</body>
</html>
