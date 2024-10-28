<!-- Sidebar -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="dashboard">
                <i class="ti-home menu-icon"></i>
                <span class="menu-title">Home</span>
            </a>
        </li>

        <!-- Prrofil -->
        <li class="nav-item">
            <a class="nav-link" href="profilmh">
                <i class="ti-user menu-icon"></i>
                <span class="menu-title">Profil</span>
            </a>
        </li>

        <!-- Dosbing -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#dosbing" aria-expanded="false" aria-controls="dosbing">
                <i class="ti-id-badge menu-icon"></i>
                <span class="menu-title">Dosbing</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="dosbing">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="formPengajuanDosbing">Pengajuan Dosbing</a></li>
                    <li class="nav-item"> <a class="nav-link" href="profilds">Informasi Dosbing</a></li>
                </ul>
            </div>
        </li>

        <!-- PKL -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#pkl" aria-expanded="false" aria-controls="pkl">
                <i class="ti-map-alt menu-icon"></i>
                <span class="menu-title">PKL</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="pkl">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="worda">Pengajuan Surat</a></li>
                    <li class="nav-item"> <a class="nav-link" href="formInformasiPKL">Form PKL</a></li>
                    <li class="nav-item"> <a class="nav-link" href="informasipkl">Informasi PKL</a></li>
                </ul>
            </div>
        </li>

        <!-- Konsultasi Bimbingan -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#bimbingan" aria-expanded="false" aria-controls="bimbingan">
                <i class="ti-comments menu-icon"></i>
                <span class="menu-title">Konsultasi Bimbingan</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="bimbingan">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="jadwalBimbingan">Jadwal Bimbingan</a></li>
                    <li class="nav-item"> <a class="nav-link" href="kartuKendaliBimbingan">Kartu Kendali</a></li>
                </ul>
            </div>
        </li>

        <!-- Logbook -->
        <li class="nav-item">
            <a class="nav-link" href="logbook">
                <i class="ti-file menu-icon"></i>
                <span class="menu-title">Logbook</span>
            </a>
        </li>

        <!-- Laporan -->
        <li class="nav-item">
            <a class="nav-link" href="laporanfiks">
                <i class="ti-clipboard menu-icon"></i>
                <span class="menu-title">Laporan</span>
            </a>
        </li>

        <!-- Seminar -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#seminar" aria-expanded="false" aria-controls="seminar">
                <i class="ti-book menu-icon"></i>
                <span class="menu-title">Seminar</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="seminar">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="formPengajuanSeminar">Pengajuan Seminar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="jadwalSeminar">Jadwal Seminar</a></li>
                </ul>
            </div>
        </li>






    </ul>
</nav>

<!-- CSS -->
<style>
    .sidebar {
        width: 250px;
        transition: width 0.3s;
    }

    .sidebar-minimized {
        width: 80px;
    }

    .sidebar-minimized .menu-title {
        display: none;
    }

    .sidebar-minimized .nav-link {
        text-align: center;
        padding-left: 0;
    }

    .sidebar-minimized .nav-link i {
        margin-right: 0;
    }

    .sidebar-minimized .collapse .sub-menu {
        display: none !important;
    }
</style>
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
    $(document).ready(function() {
        // Toggle minimize sidebar
        $('[data-toggle="minimize"]').click(function() {
            $('#sidebar').toggleClass('sidebar-minimized');
        });
    });
</script>
