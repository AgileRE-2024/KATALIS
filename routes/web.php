<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\SeminarApplicationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardMahasiswaController;


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

// Billy - auto-generate

Route::get('/worda', function () {
    return view('auto_proposal/auto_proposal');
});

Route::post('worda', [WordController::class, 'index'])->name("worda.index");

// Billy end -----------------------------------

// Route::get('/dashboardMahasiswa', function () {
//     return view('dashboardMahasiswa');
// });

Route::get('/dashboard', [DashboardMahasiswaController::class, 'index'])->name('dashboard');


Route::get('/formPengajuanDosbing', function () {
    return view('formPengajuanDosbing');
});

Route::get('/formPengajuanSeminar', [SeminarApplicationController::class, 'create'])->name('seminar.application.create');
Route::post('/formPengajuanSeminar/store', [SeminarApplicationController::class, 'store'])->name('seminar.application.store');
Route::get('/jadwalSeminar', [SeminarApplicationController::class, 'index'])->name('seminar.applications.index');
// Route::get('/jadwalSeminar', function () {
//     return view('jadwalSeminar');
// });

// Route::get('/formPengajuanSeminar', function () {
//     return view('formPengajuanSeminar');
// });

Route::get('/profilmh', function () {
    return view('profilmh');
});

# update database

Route::get('/logbook', [LogbookController::class, 'index'])->name('logbook.index');
Route::post('/logbook/store', [LogbookController::class, 'store'])->name('logbook.store');

// Route::get('/logbook', function () {
//     return view('logbook');
// });

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
// Route::get('/', function () {
//     return view('loginfix');
// });

// Route::get('/register', function () {
//     return view('register');
// });

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/loginfix', [LoginController::class, 'login']);
Route::get('/loginfix', [LoginController::class, 'showLoginForm'])->name('loginfix');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/logout', function () {
Auth::logout(); // Log the user out
    return redirect('/loginfix'); // Redirect to the login page
})->name('logout');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

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

Route::get('/editpkl', function () {
    return view('editpkl');
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

Route::get('/editpkl', function () {
    return view('editpkl');
});
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

// Route::get('/download', function () {
//     return view('home/download');
// });




/*

| Jangan lupa php artisan route:clear

*/