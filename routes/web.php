<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;
use App\Http\Controllers\LogbookController;
use App\Http\Controllers\SeminarApplicationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Controllers\JadwalKonsultasiController;
use App\Http\Controllers\BimbinganController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardDosenController;



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

Route::get('/', function () {
    return redirect('/loginfix'); // Redirect to the login page
});

// Route::get('/dashboard', function () {
//     return view('/mahasiswa/dashboard');
// })->name('dashboard');

// Route::get('/worda', function () {
//     return view('auto_proposal/auto_proposal');
// });

// Route::get('/form', function () {
//     return view('form');
// });

// Billy - auto-generate

// Billy end -----------------------------------

# update database


//mahasiswa

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/loginfix', [LoginController::class, 'login']);
Route::get('/loginfix', [LoginController::class, 'showLoginForm'])->name('loginfix');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/registeruser', [RegisterController::class, 'registeruser'])->name('registeruser');
Route::post('/logout', function () {
Auth::logout(); 
    return redirect('/loginfix');
})->name('logout');

Route::group(['middleware' => ['auth', 'hakakses:users']], function() {
    Route::get('/dashboard', [DashboardMahasiswaController::class, 'index'])->name('dashboard')->middleware('auth');

    Route::get('/formPengajuanDosbing', function () {
        return view('/mahasiswa/formPengajuanDosbing');
    });
    
    Route::get('/formPengajuanSeminar', [SeminarApplicationController::class, 'create'])->name('seminar.application.create');
    Route::post('/formPengajuanSeminar/store', [SeminarApplicationController::class, 'store'])->name('seminar.application.store');
    Route::get('/jadwalSeminar', [SeminarApplicationController::class, 'index'])->name('seminar.applications.index');
    
    Route::get('/profilmh', [ProfileController::class, 'show'])->middleware('auth');
    Route::get('/logbook', [LogbookController::class, 'index'])->name('logbook.index');
    Route::post('/logbook/store', [LogbookController::class, 'store'])->name('logbook.store');
    Route::get('/formInformasiPKL', function () {
        return view('/mahasiswa/formInformasiPKL');
    });
    Route::get('/informasipkl', function () {
        return view('/mahasiswa/informasipkl');
    });
    
    Route::get('/laporanfiks', function () {
        return view('/mahasiswa/laporanfiks');
    });
    
    
    Route::get('/jadwalBimbingan', [JadwalKonsultasiController::class, 'index']);
    Route::post('/jadwalBimbingan', [JadwalKonsultasiController::class, 'store']);
    
    
    Route::get('/kartuKendaliBimbingan', [BimbinganController::class, 'index']);
    Route::post('/kartuKendaliBimbingan', [BimbinganController::class, 'store']);

    Route::post('/store-form', [WordController::class, 'store'])->name("store.form");
    Route::get('/wordb', [WordController::class, 'index'])->name('wordb');
    Route::get('/worda', [WordController::class, 'display']);
    Route::get('/wordb/view/pdf', [WordController::class, 'view_pdf'])->name("wordb/view/pdf");
    Route::get('/wordb/download/pdf', [WordController::class, 'download_pdf'])->name("wordb/download/pdf");

    Route::get('/profilds', function () {
        return view('/mahasiswa/profilds');
    });

    Route::get('/informasipkl', function () {
        return view('/mahasiswa/informasipkl');
    });

    Route::get('/laporanfiks', function () {
        return view('/mahasiswa/laporanfiks');
    });


    Route::get('/jadwalBimbingan', [JadwalKonsultasiController::class, 'index']);
    Route::post('/jadwalBimbingan', [JadwalKonsultasiController::class, 'store']);


    Route::get('/kartuKendaliBimbingan', [BimbinganController::class, 'index']);
    Route::post('/kartuKendaliBimbingan', [BimbinganController::class, 'store']);

});

// Rute untuk Dosen
Route::group(['middleware' => ['auth', 'hakakses:dosen']], function() {
    Route::get('/dashboardDosen', [DashboardDosenController::class, 'index'])->name('dashboardDosen')->middleware('auth');


    Route::get('/anakBimbing', [DosenController::class, 'index'])->name("anakBimbing");
    Route::get('/detilLogbook/{user_id}', [LogbookController::class, 'dosen'])->name('detilLogbook');
    Route::get('/detilBimbingan/{user_id}', [JadwalKonsultasiController::class, 'dosen'])->name('detilBimbingan');


    Route::get('/tambahMahasiswa', function () {
        return view('tambahMahasiswa');
    });

    Route::get('/dosenprofil', [DashboardDosenController::class, 'index1'])->name('profildosen')->middleware('auth');

    // Route::get('/jadwalBimbinganDosen', function () {
    //     return view('/dosen/jadwalBimbinganDosen');
    // });
    Route::get('/jadwalBimbinganDosen', [JadwalKonsultasiController::class, 'index1'])->name('jadwal.bimbingan');

    Route::post('/jadwalBimbinganDosen/{id}/update-status', [JadwalKonsultasiController::class, 'updateStatus'])->name('jadwal.updateStatus');

    Route::get('/get-user', [UserController::class, 'getUser'])->name('getUser');

    Route::get('/tambahbimbing', function () {
        return view('tambahbimbing');
    });

    Route::get('/kartuKendaliDosen', function () {
        return view('/dosen/kartuKendaliDosen');
    });

    Route::get('/logbookDosen', function () {
        return view('/dosen/logbookDosen');
    });

    Route::get('/laporanDosen', function () {
        return view('/dosen/laporanDosen');
    });

    Route::get('/seminarDosen', function () {
        return view('/dosen/seminarDosen');
    });
});

// Rute untuk Koordinator
Route::group(['middleware' => ['auth', 'hakakses:koordinator']], function() {
    Route::get('/dashboardKoor', function () {
        return view('pov_koor/dashboardKoor');
    })->name('dashboardKoor');
    
    Route::get('/profil', function () {
        return view('profil');
    });
    
    
    Route::get('/login', function () {
        return view('loginfix');
    });
    
    Route::get('/profiledosen', function () {
        return view('profiledosen');
    });
    
    Route::get('/editpkl', function () {
        return view('editpkl');
    });
    
    
    Route::get('/editpkl', function () {
        return view('editpkl');
    });
    
    Route::get('/assignPembimbing', function () {
        return view('pov_koor/assignPembimbing');
    });
    
    Route::get('/daftarDosen', function () {
        return view('pov_koor/daftarDosen');
    });
    
    Route::get('/pklAktif', function () {
        return view('pov_koor/pklAktif');
    });
    
    Route::get('/formAssign', function () {
        return view('pov_koor/formAssign');
    });
    
    Route::post('/uploadHasil/{id}', [JadwalKonsultasiController::class, 'uploadHasil'])->name('uploadHasil');
    Route::post('/uploadDokumentasi/{id}', [JadwalKonsultasiController::class, 'uploadDokumentasi'])->name('uploadDokumentasi');
    
});
/*

| Jangan lupa php artisan route:clear

*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
