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
                                    <h4 class="card-title">Daftar Dosen Pembimbing</h4>

                                    <!-- Tabel Dosen -->
                                    <table class="table table-striped table-bordered align-middle">
                                        <thead class="table-primary">
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Nama Dosen</th>
                                                <th class="text-center">NIP</th>
                                                <th class="text-center">Bidang Keahlian</th>
                                                <th class="text-center">Jumlah Anak Bimbing</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($dosens as $index => $dosen)
                                                <td class="text-center">{{ $index + 1 }}</td>
                                                <td class="text-center">{{ $dosen->name }}</td>
                                                <td class="text-center">{{ $dosen->nip }}</td>
                                                <td class="text-center">{{ $dosen->bidang_keahlian }}</td>
                                                <td class="text-center">{{ $dosen->mahasiswa_bimbingan_count }}</td>
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
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
