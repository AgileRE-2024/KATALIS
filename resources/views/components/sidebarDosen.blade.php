<!-- Sidebar -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Home</span>
            </a>
        </li>

        <!-- Profil -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Profil</span>
            </a>
        </li>

        <!-- Anak Bimbing -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Anak Bimbing</span>
            </a>
        </li>

        <!-- Bimbingan -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#konsul" aria-expanded="false" aria-controls="konsul">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Konsultasi Bimbingan</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="konsul">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="jadwalBimbingan">Jadwal Bimbingan</a></li>
                    <li class="nav-item"> <a class="nav-link" href="kartuKendaliBimbingan">Kartu Kendali</a></li>
                </ul>
            </div>
        </li>

        <!-- Logbook -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Logbook</span>
            </a>
        </li>

        <!-- Laporan -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Laporan</span>
            </a>
        </li>

        <!-- Seminar -->
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Seminar</span>
            </a>
        </li>

        <!-- UI Elements -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
            </div>
        </li>

        <!-- Additional sections -->
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                </ul>
            </div>
        </li>

        <!-- Documentation -->
        <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
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
