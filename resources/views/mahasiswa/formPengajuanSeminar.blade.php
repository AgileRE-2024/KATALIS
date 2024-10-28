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
        @include('components.navbar')
        <div class="container-fluid page-body-wrapper">
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
            @include('components.sidebarfix')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Form Pengajuan Seminar</h4>
                                    <p class="card-description">
                                        Form ini diisi untuk melakukan pengajuan seminar dengan catatan telah melakukan fiksasi tanggal dengan dosen pembimbing
                                    </p>
                                    @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <form class="forms-sample" action="{{ route('seminar.application.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="judulPKL">Judul PKL</label>
                                            <input type="text" name="judul_pkl" class="form-control" id="judulPKL" placeholder="Judul PKL" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tempatPKL">Tempat PKL</label>
                                            <input type="text" name="tempat_pkl" class="form-control" id="tempatPKL" placeholder="Tempat PKL" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="dosenPembimbing">Dosen Pembimbing PKL</label>
                                            <input type="text" name="dosen_pembimbing" class="form-control" id="dosenPembimbing" placeholder="Dosen Pembimbing PKL" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggalSeminar">Tanggal Seminar</label>
                                            <input type="date" name="tanggal_seminar" class="form-control" id="tanggalSeminar" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Laporan akhir PKL (PDF)</label>
                                            <input type="file" name="laporanPKL" class="file-upload-default" accept=".pdf" style="display: none;" required>
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" id="laporanPKLName" disabled placeholder="Laporan akhir PKL (PDF)">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button" onclick="document.getElementsByName('laporanPKL')[0].click()">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Bukti Persetujuan Seminar oleh Dosen Pembimbing</label>
                                            <input type="file" name="BuktiPersetujuan" class="file-upload-default" accept=".pdf" style="display: none;" required>
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" id="BuktiPersetujuanName" disabled placeholder="Bukti Persetujuan Seminar oleh Dosen Pembimbing (PDF)">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button" onclick="document.getElementsByName('BuktiPersetujuan')[0].click()">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="../../vendors/select2/select2.min.js"></script>
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <script src="../../js/file-upload.js"></script>
    <script src="../../js/typeahead.js"></script>
    <script src="../../js/select2.js"></script>

    <script>
        // Function to display the uploaded file name for Laporan PKL
        document.getElementsByName('laporanPKL')[0].addEventListener('change', function() {
            var fileName = this.files[0] ? this.files[0].name : '';
            document.getElementById('laporanPKLName').value = fileName;
        });

        // Function to display the uploaded file name for Bukti Persetujuan
        document.getElementsByName('BuktiPersetujuan')[0].addEventListener('change', function() {
            var fileName = this.files[0] ? this.files[0].name : '';
            document.getElementById('BuktiPersetujuanName').value = fileName;
        });
    </script>
</body>

</html>
