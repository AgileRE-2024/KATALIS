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
                            <h3 class="font-weight-bold">Daftar Mahasiswa Bimbingan</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama Mahasiswa</th>
                                        <th>NIM</th>
                                        <th>Detail PKL</th>
                                        <th>Histori Logbook</th>
                                        <th>Histori Bimbingan</th>
                                        <th>Laporan</th>
                                        <th>Jadwal Seminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mahasiswaBimbingan as $mahasiswa)
                                        <tr>
                                            <td>{{ $mahasiswa->name }}</td>
                                            <td>{{ $mahasiswa->nim }}</td>
                                            <td>
                                                <a href="{{ route('dosen.detilPKL', ['nim' => $mahasiswa->nim]) }}" class="hover-link">
                                                    click here
                                                </a>
                                            </td>
                                            <td>
                                                @if($mahasiswa->logbooks->isNotEmpty())
                                                    <a href="{{ route('detilLogbook', $mahasiswa->logbooks->first()->user_id) }}">
                                                        click here
                                                    </a>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                @if($mahasiswa->jadwalKonsultasi->isNotEmpty())
                                                    <a href="{{ route('detilBimbingan', $mahasiswa->jadwalKonsultasi->first()->user_id) }}">
                                                        click here
                                                    </a>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                @if ($mahasiswa->seminar->first()?->laporan_pkl)
                                                    <a href="{{ asset('storage/' . $mahasiswa->seminar->first()->laporan_pkl) }}" target="_blank">
                                                        Lihat Laporan
                                                    </a>
                                                @else
                                                    -
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