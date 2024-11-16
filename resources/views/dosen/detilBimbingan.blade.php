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
                            <h3 class="font-weight-bold">Bimbingan Mahasiswa</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Konsultasi</th>
                                        <th>Waktu Konsultasi</th>
                                        <th>Topik</th>
                                        <th>Hasil Bimbingan</th>
                                        <th>Dokumentasi Bimbingan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jadwal_konsultasis as $index => $jadwal)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $jadwal->tanggal_konsultasi }}</td>
                                            <td>{{ $jadwal->waktu_konsultasi }}</td>
                                            <td>{{ $jadwal->topik }}</td>
                                            <td>
                                                @if ($jadwal->hasil_bimbingan)
                                                    <img src="{{ asset('storage/' . $jadwal->hasil_bimbingan) }}"
                                                        alt="Hasil Bimbingan" width="50">
                                                @endif
                                            </td>
                                            <td>
                                                @if ($jadwal->dokumentasi_bimbingan)
                                                    <img src="{{ asset('storage/' . $jadwal->dokumentasi_bimbingan) }}"
                                                        alt="Dokumentasi Bimbingan" width="50">
                                                @endif
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
