<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="./assets/profiledosen.css" rel="stylesheet">
    <title>Document</title>
    <style>
        .icon-right {
            color: #ffffff;
            font-size: 1rem;
            margin-left: 0.8rem;
            margin-top: 0.8rem;
        }
        .profile-icon {
            color: black; /* Color for the profile icon */
        }
        /* Additional styles can go here */
    </style>
</head>
<body>
    <div class="v3_600">
        <div class="v3_607">
            <span class="v3_608">EduWorkTrack</span>
            <div class="v3_609"></div>
            <div class="v3_610">
                <div class="v3_611">
                    <span class="v3_612"><a href="{{ url('/profiledosen') }}">Profil</a></span>
                    <i class="fas fa-user icon-right profile-icon"></i> 
                </div>
                <div class="v34_725">
                    <div class="name"></div>
                    <span class="v34_727"><a href="{{ url('/datamahasiswa') }}">Data Mahasiswa</a></span>
                    <i class="fas fa-user-graduate icon-right"></i>
                </div>
                <div class="v3_617">
                    <div class="name"></div>
                    <span class="v3_618"><a href="{{ url('/logbookdosen') }}">Logbook</a></span>
                    <i class="fas fa-book icon-right"></i>
                </div>
                <div class="v3_620">
                    <span class="v3_621"><a href="{{ url('/bimbingandosen') }}">Bimbingan</a></span>
                    <i class="fas fa-chalkboard-teacher icon-right"></i>
                </div>
                <div class="v3_623">
                    <div class="name"></div>
                    <span class="v3_625"><a href="{{ url('/penilaiandosen') }}">Penilaian PKL</a></span>
                    <i class="fas fa-chart-line icon-right"></i>
                </div>
                <div class="v3_627">
                    <div class="name"></div>
                    <span class="v3_629"><a href="{{ url('/laporandosen') }}">Laporan</a></span>
                    <i class="fas fa-file-alt icon-right"></i>
                </div>
            </div>
        </div>
        <div class="name"></div>
        <span class="v3_692">Profil</span>
        <div class="v3_699">
            <span class="v3_701">Email</span>
            <span class="v3_702">Nomor HP</span>
            <span class="v3_703">Nama Lengkap</span>
            <span class="v3_704">NIP</span>
            <div class="v3_705"></div>
            <div class="v3_706"></div>
            <div class="v3_708"></div>
            <div class="v3_709"></div>
        </div>
        <div class="v3_710"></div>
        <div id="signout-button" class="v4_718">
            <div class="name"></div>
            <span class="v4_720"><a href="{{ url('') }}">Sign Out</a></span>
        </div>
    </div>
</html>
