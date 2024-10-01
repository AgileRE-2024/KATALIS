<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/profil', function () {
//     return view('home/profil');
// });

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/profiledosen', function () {
//     return view('profiledosen');
// });

// Route::get('/datamahasiswa', function () {
//     return view('datamahasiswa');
// });

// Route::get('/logbookdosen', function () {
//     return view('logbookdosen');
// });

// Route::get('/navbar', function () {
//     return view('navbar');
// });

// Route::get('/bimbingandosen', function () {
//     return view('bimbingandosen');
// });

// Route::get('/laporandosen', function () {
//     return view('laporandosen');
// });

// Route::get('/penilaiandosen', function () {
//     return view('penilaiandosen');
// });


// Route::get('/seminar', function () {
//     return view('home/seminar');
// });

// Route::get('/fixSeminar', function () {
//     return view('home/fixSeminar');
// });

// Route::get('/formPengajuanSeminar', function () {
//     return view('home/formPengajuanSeminar');
// });

// Route::get('/laporan', function () {
//     return view('home/laporan');
// });

// Route::get('/download', function () {
//     return view('home/download');
// });

// Route::get('/tambahdatamahasiswa', function () {
//     return view('tambahdatamahasiswa');
// });

// Route::get('/contoh', function () {
//     return view('contoh');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Route::get('/form', function () {
//     return view('form');
// });

Route::get('/dashboardMahasiswa', function () {
    return view('dashboardMahasiswa');
});

Route::get('/formPengajuanDosbing', function () {
    return view('formPengajuanDosbing');
});

Route::get('/formPengajuanSeminar', function () {
    return view('formPengajuanSeminar');
});

Route::get('/profilmh', function () {
    return view('profilmh');
});

Route::get('/logbook', function () {
    return view('logbook');
});

Route::get('/jadwalSeminar', function () {
    return view('jadwalSeminar');
});

Route::get('/formInformasiPKL', function () {
    return view('formInformasiPKL');
});

Route::get('/profilds', function () {
    return view('profilds');
});

Route::get('/informasipkl', function () {
    return view('informasipkl');
});

Route::get('/laporanfiks', function () {
    return view('laporanfiks');
});

Route::get('/jadwalBimbingan', function () {
    return view('jadwalBimbingan');
});

Route::get('/kartuKendaliBimbingan', function () {
    return view('kartuKendaliBimbingan');
});

//mahasiswa
Route::get('/', function () {
    return view('loginfix');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profil', function () {
    return view('profil');
});

// Route::get('/profil', function () {
//     return view('home/profil');
// });

// Route::get('/dosbing', function () {
//     return view('home/dosbing');
// });

// Route::get('/formPengajuanDosbing', function () {
//     return view('home/formPengajuanDosbing');
// });

// Route::get('/fixDosbing', function () {
//     return view('home/fixDosbing');
// });

// Route::get('/pkl', function () {
//     return view('home/pkl');
// });

// Route::get('/formPKL', function () {
//     return view('home/formPKL');
// });

// Route::get('/formPKL', function () {
//     return view('home/formPKL');
// });
// Route::get('/infoPKL', function () {
//     return view('home/infoPKL');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/profiledosen', function () {
    return view('profiledosen');
});

// Route::get('/fixPKL', function () {
//     return view('home/fixPKL');
// });


// Route::get('/seminar', function () {
//     return view('home/seminar');
// });

// Route::get('/fixSeminar', function () {
//     return view('home/fixSeminar');
// });

// Route::get('/formPengajuanSeminar', function () {
//     return view('home/formPengajuanSeminar');
// });

// Route::get('/laporan', function () {
//     return view('home/laporan');
// });

//dosen
Route::get('/dashboardDosen', function () {
    return view('dashboardDosen');
});

Route::get('/anakBimbing', function () {
    return view('anakBimbing');
});

Route::get('/tambahMahasiswa', function () {
    return view('tambahMahasiswa');
});

Route::get('/dosenprofil', function () {
    return view('dosenprofil');
});

Route::get('/jadwalBimbinganDosen', function () {
    return view('jadwalBimbinganDosen');
});

Route::get('/tambahbimbing', function () {
    return view('tambahbimbing');
});

Route::get('/kartuKendaliDosen', function () {
    return view('kartuKendaliDosen');
});

Route::get('/logbookDosen', function () {
    return view('logbookDosen');
});

Route::get('/laporanDosen', function () {
    return view('laporanDosen');
});

Route::get('/seminarDosen', function () {
    return view('seminarDosen');
});



Route::get('/download', function () {
    return view('home/download');
});

/*

| Jangan lupa php artisan route:clear

*/