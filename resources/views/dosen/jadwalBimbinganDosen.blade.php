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
              <h3 class="font-weight-bold">Jadwal Bimbingan</h3>
            </div>
          </div>

          <div class="row">
            <!-- Tabel Jadwal Bimbingan -->
            <div class="col-md-12">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Tanggal Konsultasi</th>
                    <th>Waktu Konsultasi</th>
                    <th>Topik</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($jadwals as $jadwal)
                    <tr>
                      <td>{{ $jadwal->user->name }}</td>
                      <td>{{ $jadwal->user->nim }}</td>
                      <td>{{ $jadwal->tanggal_konsultasi }}</td>
                      <td>{{ $jadwal->waktu_konsultasi }}</td>
                      <td>{{ $jadwal->topik }}</td>
                      <td>
                          <form action="{{ route('jadwal.updateStatus', $jadwal->id) }}" method="POST">
                              @csrf
                              <select name="status" onchange="this.form.submit()">
                                  <option value="Waiting Approval" {{ $jadwal->status == 'Waiting Approval' ? 'selected' : '' }}>Waiting Approval</option>
                                  <option value="Approved" {{ $jadwal->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                                  <option value="Revised" {{ $jadwal->status == 'Revised' ? 'selected' : '' }}>Revised</option>
                              </select>
                          </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
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
