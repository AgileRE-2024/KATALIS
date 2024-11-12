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

        <!-- Profil -->
        <li class="nav-item">
            <a class="nav-link" href="profilmh">
                <i class="ti-user menu-icon"></i>
                <span class="menu-title">Profil</span>
            </a>
        </li>

        <!-- Pengajuan Surat -->
        <li class="nav-item">
            <a class="nav-link" href="worda">
                <i class="ti-email menu-icon"></i>
                <span class="menu-title">Pengajuan Surat</span>
            </a>
        </li>

        <!-- Dosbing -->
        <li class="nav-item">
            <a class="nav-link" href="profilds">
                <i class="ti-id-badge menu-icon"></i>
                <span class="menu-title">Informasi Dosbing</span>
            </a>
        </li>

        <!-- PKL -->
        <li class="nav-item">
            <a class="nav-link" href="informasipkl">
                <i class="ti-map-alt menu-icon"></i>
                <span class="menu-title">Informasi PKL</span>
            </a>
        </li>

        <!-- Konsultasi Bimbingan -->
        <li class="nav-item">
            <a class="nav-link" href="jadwalBimbingan">
                <i class="ti-comments menu-icon"></i>
                <span class="menu-title">Konsultasi Bimbingan</span>
            </a>
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
        width: 300px; /* Memperbesar lebar sidebar */
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

    /* Menambahkan jarak antar elemen di sidebar */
    .nav-item {
        margin-bottom: 25px; /* Jarak antara item nav, diperbesar */
    }

    .nav-link {
        padding: 15px 20px; /* Jarak dalam item nav, diperbesar */
        font-size: 18px; /* Memperbesar ukuran font */
    }

    .sub-menu .nav-link {
        padding-left: 40px; /* Jarak untuk item submenu, diperbesar */
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
