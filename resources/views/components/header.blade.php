<header class="header">
    <div class="left-header">
        <h1>{{ $slot }}</h1>  {{-- Menampilkan konten slot sebagai judul --}}
    </div>

    <div class="right-header">
        <div class="user-info">
            <p>Eunike Alfrita MW</p>
            <small>187221053</small>
        </div>
        <div class="logout">
            <a href="login" onclick="logout();">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
    </div>
</header>



<style>
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        color: black;
        border-bottom: 1px solid #D9CEC6;
    }

    .left-header h1 {
        margin: 0;
    }

    .right-header {
        display: flex;
        align-items: center;
    }

    .user-info {
        margin-right: 20px;
        text-align: right;
    }

    .user-info p {
        margin: 0;
        font-weight: bold;
    }

    .user-info small {
        display: block;
        font-size: 12px;
        color: #333;
    }

    .logout a {
        color: #B80A0A;
        font-size: 20px;
        text-decoration: none;
    }

    .logout a:hover {
        color: #e74c3c;
    }
</style>
