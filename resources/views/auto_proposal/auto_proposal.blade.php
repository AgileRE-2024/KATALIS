<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <style>
        /* Custom CSS for sidebar */
        .sidebar {
            width: 250px; /* Set desired sidebar width */
            transition: width 0.3s ease; /* Smooth transition for width change */
        }

        /* For minimized sidebar */
        .sidebar.minimized {
            width: 80px; /* Width when minimized */
        }

        /* Make sure the content area stretches to fill the remaining space */
        .main-panel {
            flex-grow: 1; /* Allow main panel to grow */
            background-color: #f5f7ff; /* Set background color matching content */
            padding: 20px; /* Optional padding */
            margin-left: 10px; /* Prevent content from touching sidebar */
        }

        /* Center the content */
        .content-wrapper {
            max-width: 1200px; /* Set max-width for the content */
            margin: 0 auto; /* Center the content */
        }

        /* Optional: Adjust background color of the right empty space */
        .page-body-wrapper {
            background-color: #f8f9fa; /* Set to the same color as main-panel */
        }
    </style>

</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        @include('components.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_settings-panel.html -->
            <div id="right-sidebar" class="settings-panel">
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- partial -->
            <!-- partial:../../partials/_sidebar.html -->
            @include('components.sidebarfix')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Form Biodata</h4>
                                
                                    <form class ="forms-sample" action="{{route('worda.index')}}" method="POST">
                                        @csrf

                                        <div class="container">
                                            <div class="form-group mb-3">
                                                <label for="jumlah_mahasiswa">Jumlah Mahasiswa:</label>
                                                <select class="form-control" id="jumlah_mahasiswa" name="jumlah_mahasiswa" onchange="showFields()">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>

                                            <!-- Student 1 (Always visible) -->
                                            <div class="form-group mb-3">
                                                <label for="nama">Nama Lengkap:</label>
                                                <input type="text" class="form-control" id="nama" name="nama">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="nim">NIM:</label>
                                                <input type="text" class="form-control" id="nim" name="nim">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="notelp">Notelp:</label>
                                                <input type="text" class="form-control" id="notelp" name="notelp">
                                            </div>

                                            <!-- Student 2 (Initially hidden) -->
                                            <div id="student2" style="display: none;">
                                                <div class="form-group mb-3">
                                                    <label for="nama2">Nama Lengkap 2:</label>
                                                    <input type="text" class="form-control" id="nama2" name="nama2">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="nim2">NIM 2:</label>
                                                    <input type="text" class="form-control" id="nim2" name="nim2">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="notelp2">Notelp2:</label>
                                                <input type="text" class="form-control" id="notelp2" name="notelp2">
                                            </div>
                                            </div>

                                            <!-- Student 3 (Initially hidden) -->
                                            <div id="student3" style="display: none;">
                                                <div class="form-group mb-3">
                                                    <label for="nama3">Nama Lengkap 3:</label>
                                                    <input type="text" class="form-control" id="nama3" name="nama3">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="nim3">NIM 3:</label>
                                                    <input type="text" class="form-control" id="nim3" name="nim3">
                                                </div>
                                                <div class="form-group mb-3">
                                                <label for="notelp3">Notelp3:</label>
                                                <input type="text" class="form-control" id="notelp3" name="notelp3">
                                            </div>
                                            </div>
                                        </div>

                                        <script>
                                        function showFields() {
                                            const count = document.getElementById('jumlah_mahasiswa').value;
                                            
                                            // Student 2 fields
                                            const student2 = document.getElementById('student2');
                                            student2.style.display = count >= 2 ? 'block' : 'none';
                                            
                                            // Student 3 fields
                                            const student3 = document.getElementById('student3');
                                            student3.style.display = count >= 3 ? 'block' : 'none';
                                        }
                                        </script>

                                        

                                        <div class="form-group">
                                            <label for="nim">prodi:</label>
                                            <input type="text" id="prodi" name="prodi" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label for="doswal">doswal:</label>
                                            <input type="text" id="doswal" name="doswal" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="surat_ditujukan_kepada">surat_ditujukan_kepada:</label>
                                            <input type="text" class="form-control" >
                                        </div>

                                        <div class="form-group">
                                            <label for="nama_lembaga">nama_lembaga:</label>
                                            <input type="text" id="nama_lembaga" name="nama_lembaga" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="alamat">alamat:</label>
                                            <input type="text" id="alamat" name="alamat" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="keperluan">keperluan:</label>
                                            <input type="text" id="keperluan" name="keperluan" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="waktu_pelaksanaan">waktu_pelaksanaan:</label>
                                            <input type="text" id="waktu_pelaksanaan" name="waktu_pelaksanaan" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="tembusan">tembusan:</label>
                                            <input type="text" id="tembusan" name="tembusan" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="date">date:</label>
                                            <input type="date" id="date" name="date" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="ko_prodi">ko_prodi:</label>
                                            <input type="text" id="ko_prodi" name="ko_prodi" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="dosbing">dosbing:</label>
                                            <input type="text" id="dosbing" name="dosbing" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="nip_koprodi">nip_koprodi:</label>
                                            <input type="text" id="nip_koprodi" name="nip_koprodi" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="nip_dosbing">nip_dosbing:</label>
                                            <input type="text" id="nip_dosbing" name="nip_dosbing" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                                            <button type="reset" class="btn btn-light">Reset</button>
                                        </div>

                                        

                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="../../vendors/select2/select2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/file-upload.js"></script>
    <script src="../../js/typeahead.js"></script>
    <script src="../../js/select2.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
