<!-- Sidebar -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="dashboardDosen">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Home</span>
            </a>
        </li>

        <!-- Profil -->
        <li class="nav-item">
            <a class="nav-link" href="dosenprofil">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Profil</span>
            </a>
        </li>

        <!-- Anak Bimbing -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#anak" aria-expanded="false" aria-controls="anak">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Anak Bimbing</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="anak">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="anakBimbing">Daftar Anak Bimbing</a></li>
                    <li class="nav-item"> <a class="nav-link" href="tambahMahasiswa">Tambah Anak Bimbing</a></li>
                </ul>
            </div>
        </li>

        <!-- Bimbingan -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#konsuldosen" aria-expanded="false" aria-controls="konsul">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Konsultasi Bimbingan</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="konsuldosen">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="jadwalBimbinganDosen">Jadwal Bimbingan</a></li>
                    <li class="nav-item"> <a class="nav-link" href="kartuKendaliDosen">Kartu Kendali</a></li>
                </ul>
            </div>
        </li>

        <!-- Logbook -->
        <li class="nav-item">
            <a class="nav-link" href="logbookDosen">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Logbook</span>
            </a>
        </li>

        <!-- Laporan -->
        <li class="nav-item">
            <a class="nav-link" href="laporanDosen">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Laporan</span>
            </a>
        </li>

        <!-- Seminar -->
        <li class="nav-item">
            <a class="nav-link" href="seminarDosen">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Seminar</span>
            </a>
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
