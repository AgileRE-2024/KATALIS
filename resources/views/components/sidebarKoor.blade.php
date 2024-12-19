<!-- Sidebar -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="dashboardKoor">
                <i class="ti-home menu-icon"></i>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="assignPembimbing">
                <i class="ti-id-badge menu-icon"></i>
                <span class="menu-title">Penentuan Pembimbing</span>
            </a>
        </li>
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="daftarDosen">
                <i class="ti-user menu-icon"></i>
                <span class="menu-title">Daftar Dosen</span>
            </a>
        </li>
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="pklAktif">
                <i class="ti-map-alt menu-icon"></i>
                <span class="menu-title">PKL Aktif</span>
            </a>
        </li>
        

        
    </ul>
</nav>

<!-- CSS -->
<style>
    .main-panel {
    flex-grow: 1; /* Membuat konten utama mengambil sisa ruang */
    transition: margin-left 0.3s; /* Animasi saat sidebar dibuka/ditutup */
}

.sidebar-minimized + .main-panel {
    margin-left: 80px; /* Margin yang sesuai saat sidebar diminimalkan */
}
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- Use full version -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        // Ensure only one event binding
        $('[data-toggle="minimize"]').off('click').on('click', function() {
            $('#sidebar').toggleClass('sidebar-minimized');
        });
    });
</script>
