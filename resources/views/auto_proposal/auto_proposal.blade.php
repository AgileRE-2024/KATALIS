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

                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap:</label>
                                            <input type="text" class="form-control"id="nama" name="nama" >
                                        </div>

                                        <div class="form-group">
                                            <label for="nim">NIM:</label>
                                            <input class="form-control" type="text" id="nim" name="nim" >
                                        </div>

                                        <div class="form-group">
                                            <label for="notelp">Nomor Telpon:</label>
                                            <input class="form-control" type="text" id="notelp" name="notelp" >
                                        </div>

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
