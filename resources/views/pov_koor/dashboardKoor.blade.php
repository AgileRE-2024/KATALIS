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
                                                <th class="text-center">Nama Mahasiswa</th>
                                                <th class="text-center">NIM</th>
                                                <th class="text-center">Kelompok</th>
                                                <th class="text-center">Tempat Magang</th>
                                                <th class="text-center" style="width: 100px;">Periode Magang</th>
                                                <th class="text-center">Dosen Pembimbing</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Data Kelompok A -->
                                            <tr class="kelompok-1">
                                                <td class="text-center">1</td>
                                                <td class="text-center">Mahasiswa 1</td>
                                                <td class="text-center">12345678</td>
                                                <td class="text-center">Kelompok A</td>
                                                <td class="text-center">Tempat Magang A</td>
                                                <td class="text-center">01 Januari 2024<br>- 31 Maret 2024</td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuDosbing1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Pilih Dosbing
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuDosbing1" style="max-height: 200px; overflow-y: auto;">
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-1', 'Pak Indra')">Pak Indra</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-1', 'Pak Badrus')">Pak Badrus</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-1', 'Pak Faried')">Pak Faried</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-1', 'Bu Siti')">Bu Siti</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-success">Submit</button>
                                                </td>
                                            </tr>
                                            <tr class="kelompok-1">
                                                <td class="text-center">2</td>
                                                <td class="text-center">Mahasiswa 2</td>
                                                <td class="text-center">87654321</td>
                                                <td class="text-center">Kelompok A</td>
                                                <td class="text-center">Tempat Magang A</td>
                                                <td class="text-center">01 Januari 2024<br>- 31 Maret 2024</td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuDosbing2" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Pilih Dosbing
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuDosbing2" style="max-height: 200px; overflow-y: auto;">
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-1', 'Pak Indra')">Pak Indra</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-1', 'Pak Badrus')">Pak Badrus</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-1', 'Pak Faried')">Pak Faried</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-1', 'Bu Siti')">Bu Siti</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-success">Submit</button>
                                                </td>
                                            </tr>

                                            <!-- Data Kelompok B -->
                                            <tr class="kelompok-2">
                                                <td class="text-center">3</td>
                                                <td class="text-center">Mahasiswa 3</td>
                                                <td class="text-center">23456789</td>
                                                <td class="text-center">Kelompok B</td>
                                                <td class="text-center">Tempat Magang B</td>
                                                <td class="text-center">01 Januari 2024<br>- 31 Maret 2024</td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuDosbing3" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Pilih Dosbing
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuDosbing3" style="max-height: 200px; overflow-y: auto;">
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-2', 'Pak Indra')">Pak Indra</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-2', 'Pak Badrus')">Pak Badrus</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-2', 'Pak Faried')">Pak Faried</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-2', 'Bu Siti')">Bu Siti</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-success">Submit</button>
                                                </td>
                                            </tr>
                                            <tr class="kelompok-2">
                                                <td class="text-center">4</td>
                                                <td class="text-center">Mahasiswa 4</td>
                                                <td class="text-center">34567890</td>
                                                <td class="text-center">Kelompok B</td>
                                                <td class="text-center">Tempat Magang B</td>
                                                <td class="text-center">01 Januari 2024<br>- 31 Maret 2024</td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuDosbing4" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Pilih Dosbing
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuDosbing4" style="max-height: 200px; overflow-y: auto;">
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-2', 'Pak Indra')">Pak Indra</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-2', 'Pak Badrus')">Pak Badrus</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-2', 'Pak Faried')">Pak Faried</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-2', 'Bu Siti')">Bu Siti</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-success">Submit</button>
                                                </td>
                                            </tr>

                                            <!-- Data Kelompok C -->
                                            <tr class="kelompok-3">
                                                <td class="text-center">5</td>
                                                <td class="text-center">Mahasiswa 5</td>
                                                <td class="text-center">45678901</td>
                                                <td class="text-center">Kelompok C</td>
                                                <td class="text-center">Tempat Magang C</td>
                                                <td class="text-center">01 Januari 2024<br>- 31 Maret 2024</td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuDosbing5" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Pilih Dosbing
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuDosbing5" style="max-height: 200px; overflow-y: auto;">
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-3', 'Pak Indra')">Pak Indra</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-3', 'Pak Badrus')">Pak Badrus</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-3', 'Pak Faried')">Pak Faried</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-3', 'Bu Siti')">Bu Siti</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-success">Submit</button>
                                                </td>
                                            </tr>
                                            <tr class="kelompok-3">
                                                <td class="text-center">6</td>
                                                <td class="text-center">Mahasiswa 6</td>
                                                <td class="text-center">56789012</td>
                                                <td class="text-center">Kelompok C</td>
                                                <td class="text-center">Tempat Magang C</td>
                                                <td class="text-center">01 Januari 2024<br>- 31 Maret 2024</td>
                                                <td class="text-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuDosbing6" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Pilih Dosbing
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuDosbing6" style="max-height: 200px; overflow-y: auto;">
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-3', 'Pak Indra')">Pak Indra</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-3', 'Pak Badrus')">Pak Badrus</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-3', 'Pak Faried')">Pak Faried</a></li>
                                                            <li><a class="dropdown-item" href="#" onclick="selectDosbing('kelompok-3', 'Bu Siti')">Bu Siti</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <button class="btn btn-success">Submit</button>
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

    <!-- JavaScript untuk mengatur dosbing per kelompok -->
    <script>
        function selectDosbing(groupClass, dosbingName) {
            // Perbarui dropdown untuk semua anggota dalam kelompok yang sama
            document.querySelectorAll(`.${groupClass} .dropdown-toggle`).forEach(button => {
                button.textContent = dosbingName;
            });
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
