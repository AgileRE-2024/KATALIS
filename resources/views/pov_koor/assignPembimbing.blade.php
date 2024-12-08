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
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Penentuan Dosen Pembimbing</h4>

                                    <!-- Tabel Mahasiswa -->
                                    <table class="table table-striped table-bordered align-middle">
                                        <thead class="table-primary">
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">ID Pengajuan</th>
                                                <th class="text-center">Nama Mahasiswa</th>
                                                <th class="text-center">NIM</th>
                                                <th class="text-center">Tempat Magang</th>
                                                <th class="text-center" style="width: 100px;">Periode Magang</th>
                                                <th class="text-center">Assign Dosen Pembimbing</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pengajuans as $index => $pengajuan)
                                            @if(empty($pengajuan->surat->dosbing_name))
                                                <tr class="kelompok-{{ ceil(($index + 1) / 2) }}">
                                                    <td class="text-center">{{ $index + 1 }}</td>
                                                    <td class="text-center">{{ $pengajuan->id_surat }}</td>
                                                    <td class="text-center">{{ $pengajuan->user->name }}</td>
                                                    <td class="text-center">{{ $pengajuan->nim }}</td>
                                                    <td class="text-center"></td>
                                                    <td class="text-center">
                                                        {{ \Carbon\Carbon::parse($pengajuan->surat->wkt_start)->format('d F Y') }}<br>
                                                        - {{ \Carbon\Carbon::parse($pengajuan->surat->wkt_end)->format('d F Y') }}
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{route ('getSurat', [$pengajuan->id_surat])}}">Assign Dosbing</a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
