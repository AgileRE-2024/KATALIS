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
              <h3 class="font-weight-bold">Logbook Mahasiswa</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-bordered">
                <thead>
                  @foreach($logbooks as $logbook)
                    <tr>
                      <td>{{ $logbook->tanggal }}</td>
                      <td>{{ $logbook->kegiatan }}</td>
                      <td>
                        @if($logbook->dokumentasi)
                          <a href="{{ asset('storage/' . $logbook->dokumentasi) }}" target="_blank">Lihat Dokumentasi</a>
                        @else
                          Tidak ada dokumentasi
                        @endif
                      </td>
                    </tr>
                  @endforeach
                </thead>
              </table>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <script src="vendors/js/vendor.bundle.base.js"></script>
</body>
</html>
