<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="./assets/penilaiandosen.css" rel="stylesheet" />
    <title>Document</title>
    <style>
        .icon-right {
            color: #ffffff;
            font-size: 1rem;
            margin-left: 0.8rem;
            margin-top: 0.7rem;
        }
        .fa-chart-line {
            color: rgb(0, 0, 0); /* Color for the profile icon */
        }

        .profile-icon2 {
            color: rgba(234, 147, 93, 0.694);
            margin-left: 1.5rem;
            margin-top: 0.8rem;
            font-size: 1.5rem;
        }
    </style>

</head>
<body>
    <div class="v63_801">
        <div class="v63_802">
            <div class="v63_803">
                <div class="name"></div>
                <div class="name"></div>
                <i class="fas fa-user icon-right profile-icon2"></i>
                <span class="v63_806">Dosen</span>
                <span class="v63_807">NIP</span>
            </div>
        </div>
        <div class="v63_808">
            <span class="v63_809">EduWorkTrack</span>
            <div class="v63_810"></div>
            <div class="v63_811">
                <div class="v63_812">
                    <span class="v63_813"><a href="{{ url('/profiledosen') }}">Profil</a></span>
                    <i class="fas fa-user icon-right profile-icon"></i> 
                </div>
                <div class="v63_815">
                    <div class="name"></div>
                    <span class="v63_818"><a href="{{ url('/datamahasiswa') }}">Data Mahasiswa</a></span>
                    <i class="fas fa-user-graduate icon-right"></i>
                </div>
                <div class="v63_819">
                    <div class="name"></div>
                    <span class="v63_820"><a href="{{ url('/logbookdosen') }}">Logbook</a></span>
                    <i class="fas fa-book icon-right"></i>
                </div>
                <div class="v63_822">
                    <div class="name"></div>
                    <span class="v63_823"><a href="{{ url('/bimbingandosen') }}">Bimbingan</a></span>
                    <i class="fas fa-chalkboard-teacher icon-right"></i>

                </div>
                <div class="v63_825">
                    <div class="name"></div>
                    <span class="v63_827"><a href="{{ url('/penilaiandosen') }}">Penilaian PKL</a></span>
                    <div class="name"></div>
                    <i class="fas fa-chart-line icon-right"></i>
                </div>
                <div class="v63_829">
                    <div class="name"></div>
                    <span class="v63_831"><a href="{{ url('/laporandosen') }}">Laporan</a></span>
                    <i class="fas fa-file-alt icon-right"></i>
                </div>
            </div>
        </div>
        <span class="v63_833">Penilaian</span>
        <div class="name"></div>
        <div class="name"></div>
        <div class="v63_846">
            <div class="v63_847">
                <span class="v63_848">No</span>
                <span class="v63_849">1</span>
                <span class="v63_850">Grace Angel Gokmauli Tampubolon</span>
                <span class="v63_851">Nama Mahasiswa </span>
                <span class="v63_852">Detail</span>
                <span class="v63_870">Nilai</span>
                <span class="v63_875">A</span>
                <span class="v63_876">A</span>
                <div class="v63_853">
                    <div class="v63_854">
                        <div class="name"></div>
                        <span class="v63_856">Lihat/Edit</span>
                    </div>
                </div>
                <span class="v63_857">2</span>
                <span class="v63_858">Eunike Alfrita Maharani Walla</span>
                <div class="v63_859">
                    <div class="v63_860">
                        <div class="name"></div>
                        <span class="v63_862">Lihat/Edit</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="box1"></div>
        <div class="box2"></div>
        <div class="box3"></div>
        <div class="box4"></div>
        <div class="v63_867"></div>
        <div class="kotaktambah">
            <span class="tambah">Tambah Nilai</span>
    </div>
</body>
</html>
