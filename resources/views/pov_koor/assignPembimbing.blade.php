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
                                            <!-- Data Kelompok A -->
                                            <tr class="kelompok-1">
                                                <td class="text-center">1</td>
                                                <td class="text-center">12345</td>
                                                <td class="text-center">Mahasiswa 1</td>
                                                <td class="text-center">12345678</td>
                                                <td class="text-center">Tempat Magang A</td>
                                                <td class="text-center">01 Januari 2024<br>- 31 Maret 2024</td>
                                                <td class="text-center">
                                                    <a href="formAssign">Assign Dosbing</a>
                                                </td>
                                            </tr>
                                            <tr class="kelompok-1">
                                                <td class="text-center">2</td>
                                                <td class="text-center">12345</td>
                                                <td class="text-center">Mahasiswa 2</td>
                                                <td class="text-center">87654321</td>
                                                <td class="text-center">Tempat Magang A</td>
                                                <td class="text-center">01 Januari 2024<br>- 31 Maret 2024</td>
                                                <td class="text-center">
                                                    <a href="formAssign">Assign Dosbing</a>
                                                </td>
                                            </tr>

                                            <!-- Data Kelompok B -->
                                            <tr class="kelompok-2">
                                                <td class="text-center">3</td>
                                                <td class="text-center">12345</td>
                                                <td class="text-center">Mahasiswa 3</td>
                                                <td class="text-center">23456789</td>
                                                <td class="text-center">Tempat Magang B</td>
                                                <td class="text-center">01 Januari 2024<br>- 31 Maret 2024</td>
                                                <td class="text-center">
                                                    <a href="formAssign">Assign Dosbing</a>
                                                </td>
                                            </tr>
                                            <tr class="kelompok-2">
                                                <td class="text-center">4</td>
                                                <td class="text-center">12345</td>
                                                <td class="text-center">Mahasiswa 4</td>
                                                <td class="text-center">34567890</td>
                                                <td class="text-center">Tempat Magang B</td>
                                                <td class="text-center">01 Januari 2024<br>- 31 Maret 2024</td>
                                                <td class="text-center">
                                                    <a href="formAssign">Assign Dosbing</a>
                                                </td>
                                            </tr>

                                            <!-- Data Kelompok C -->
                                            <tr class="kelompok-3">
                                                <td class="text-center">5</td>
                                                <td class="text-center">12345</td>
                                                <td class="text-center">Mahasiswa 5</td>
                                                <td class="text-center">45678901</td>
                                                <td class="text-center">Tempat Magang C</td>
                                                <td class="text-center">01 Januari 2024<br>- 31 Maret 2024</td>
                                                <td class="text-center">
                                                    <a href="formAssign">Assign Dosbing</a>
                                                </td>
                                            </tr>
                                            <tr class="kelompok-3">
                                                <td class="text-center">6</td>
                                                <td class="text-center">12345</td>
                                                <td class="text-center">Mahasiswa 6</td>
                                                <td class="text-center">56789012</td>
                                                <td class="text-center">Tempat Magang C</td>
                                                <td class="text-center">01 Januari 2024<br>- 31 Maret 2024</td>
                                                <td class="text-center">
                                                    <a href="formAssign">Assign Dosbing</a>
                                                </td>
                                            </tr>
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
