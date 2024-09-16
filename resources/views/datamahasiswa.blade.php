<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduWorkTrack</title>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="./assets/datamahasiswa.css" rel="stylesheet" />
    <title>Document</title>
    <style>
        .icon-right {
            color: #ffffff;
            font-size: 1rem;
            margin-left: 0.8rem;
            margin-top: 0.8rem;
        }
        .fa-user-graduate {
            color: black; /* Color for the profile icon */
        }
        /* Additional styles can go here */
    </style>
</head>
<body>
    <div class="v3_368">
        <div class="v3_396">
            <div class="v3_397">
                <div class="name"></div>
                <div class="name"></div>
                <span class="v3_400">Dosen</span>
                <span class="v3_401">NIP</span>
            </div>
        </div>
        <div class="v3_383">
            <span class="v3_384">EduWorkTrack</span>
            <div class="v3_385"></div>
            <div class="v3_545">
                <div class="v3_546">
                    <span class="v3_547"><a href="{{ url('/profiledosen') }}">Profil</a></span>
                    <i class="fas fa-user icon-right profile-icon"></i> 
                </div>
                <div class="v3_679">
                    <div class="name"></div>
                    <span class="v3_682"><a href="{{ url('/datamahasiswa') }}">Data Mahasiswa</a></span>
                    <i class="fas fa-user-graduate icon-right"></i>
                </div>
                <div class="v3_552">
                    <span class="v3_553"><a href="{{ url('/logbookdosen') }}">Logbook</a></span>
                    <i class="fas fa-book icon-right"></i>
                </div>
                <div class="v3_555">
                    <span class="v3_556"><a href="{{ url('/bimbingandosen') }}">Bimbingan</a></span>
                    <i class="fas fa-chalkboard-teacher icon-right"></i>
                </div>
                <div class="v3_558">
                    <div class="name"></div>
                    <span class="v3_560"><a href="{{ url('/penilaiandosen') }}">Penilaian PKL</a></span>
                    <i class="fas fa-chart-line icon-right"></i>
                </div>
                <div class="v3_562">
                    <div class="name"></div>
                    <span class="v3_564"><a href="{{ url('/laporandosen') }}">Laporan</a></span>
                    <i class="fas fa-file-alt icon-right"></i>
                </div>
            </div>
        </div>
        <span class="v3_583">Data Mahasiswa</span>
        <div class="name"></div>
        <div class="v3_587">
            <span class="v3_588">NIM</span>
            <span class="v3_589">No</span>
            <span class="v3_590">Nama Mahasiswa</span>
            <span class="v3_591">Program Studi</span>
            <span class="v3_592">Tempat PKL</span>
        </div>
        <div class="v3_593">
            <div class="name"></div>
            <span class="v3_595">Tambah Data Mahasiswa</span>
        </div>
    </div>
</body>

</html>
