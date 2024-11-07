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
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-center">Pak Indra</td>
                                                <td class="text-center">12345678</td>
                                                <td class="text-center">Data Science</td>
                                                <td class="text-center">5</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="text-center">Pak Badrus</td>
                                                <td class="text-center">87654321</td>
                                                <td class="text-center">Machine Learning</td>
                                                <td class="text-center">3</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">3</td>
                                                <td class="text-center">Pak Faried</td>
                                                <td class="text-center">23456789</td>
                                                <td class="text-center">Software Engineering</td>
                                                <td class="text-center">4</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">4</td>
                                                <td class="text-center">Bu Siti</td>
                                                <td class="text-center">34567890</td>
                                                <td class="text-center">Cyber Security</td>
                                                <td class="text-center">6</td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
