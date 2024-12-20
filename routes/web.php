<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;
use App\Http\Controllers\KoordinatorController;
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
use App\Http\Controllers\DashboardKoorController;
use App\Http\Controllers\SeminarController;



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


# update database


//mahasiswa

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/loginfix', [LoginController::class, 'login']);
Route::get('/loginfix', [LoginController::class, 'showLoginForm'])->name('loginfix');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/registeruser', [RegisterController::class, 'registeruser'])->name('registeruser');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth:web', 'hakakses:users']], function() {
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

    Route::get('/get-user', [UserController::class, 'getUser'])->name('getUser');
    
    
    Route::get('/jadwalBimbingan', [JadwalKonsultasiController::class, 'index']);
    Route::post('/jadwalBimbingan', [JadwalKonsultasiController::class, 'store'])->name('jadwal.store');
    Route::get('/kartuKendaliBimbingan', [BimbinganController::class, 'index']);
    Route::post('/kartuKendaliBimbingan', [BimbinganController::class, 'store']);

    Route::post('/store-form', [WordController::class, 'store'])->name("store.form");
    Route::get('/wordb', [WordController::class, 'index'])->name('wordb');
    Route::get('/worda', [WordController::class, 'display'])->name('worda');
    Route::get('/wordb/view/pdf', [WordController::class, 'view_pdf'])->name("wordb/view/pdf");
    Route::get('/wordb/download/pdf', [WordController::class, 'download_pdf'])->name("wordb/download/pdf");

    Route::get('/profilds', [UserController::class, 'show'])->name('profilds');
    

    Route::get('/informasipkl', [UserController::class, 'showInfoPKL'])->name('informasipkl');

    Route::post('/update-data', [UserController::class, 'updateData'])->name('updateData');

    Route::get('/reject/{suratId}', [UserController::class, 'reject'])->name('reject');

    Route::get('/laporanfiks', function () {
        return view('/mahasiswa/laporanfiks');
    });


    Route::get('/jadwalBimbingan', [JadwalKonsultasiController::class, 'index']);
    Route::post('/jadwalBimbingan', [JadwalKonsultasiController::class, 'store']);


    Route::get('/kartuKendaliBimbingan', [BimbinganController::class, 'index']);
    Route::post('/kartuKendaliBimbingan', [BimbinganController::class, 'store']);

});

// Rute untuk Dosen
Route::group(['middleware' => ['auth:dosen', 'hakakses:dosen']], function() {
    Route::get('/dashboardDosen', [DashboardDosenController::class, 'index'])->name('dashboardDosen');


    Route::get('/anakBimbing', [DosenController::class, 'index'])->name("anakBimbing");
    Route::get('/detilLogbook/{user_id}', [LogbookController::class, 'dosen'])->name('detilLogbook');
    Route::get('/detilBimbingan/{user_id}', [JadwalKonsultasiController::class, 'dosen'])->name('detilBimbingan');
    Route::get('/detilPkl/{nim}', [DosenController::class, 'detilPKL'])->name('dosen.detilPKL');


    Route::get('/tambahMahasiswa', function () {
        return view('tambahMahasiswa');
    });

    Route::get('/dosenprofil', [DashboardDosenController::class, 'index1'])->name('profildosen')->middleware('auth:dosen');

    Route::get('/jadwalBimbinganDosen', [JadwalKonsultasiController::class, 'index1'])->name('jadwal.bimbingan');

    Route::post('/jadwalBimbinganDosen/{id}/update-status', [JadwalKonsultasiController::class, 'updateStatus'])->name('jadwal.updateStatus');

    // Route::get('/get-user', [UserController::class, 'getUser'])->name('getUser');

    Route::get('/tambahbimbing', action: function () {
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

    Route::get('/seminarDosen', [SeminarController::class, 'indexDosen'])->name('dosen.seminar.index');
    Route::post('/update-kelulusan/{id}', [SeminarController::class, 'updateKelulusan']);
    Route::get('/laporan-seminar', [SeminarController::class, 'laporanSeminar'])->name('laporan-seminar');
    Route::post('/dosen/seminar/save-grade', [SeminarController::class, 'saveGrade'])->name('dosen.seminar.saveGrade');


});

// Rute untuk Koordinator
Route::group(['middleware' => ['auth:koordinator', 'hakakses:koordinator']], function() {
    Route::get('/dashboardKoor', [DashboardKoorController::class, 'index'])->name('dashboardKoor');
    
    
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
    
    Route::get('/assignPembimbing', [KoordinatorController::class, 'index'])->name('assignPembimbing.index');
    
    Route::get('/daftarDosen', function () {
        return view('pov_koor/daftarDosen');
    });

    Route::get('/daftarDosen', [DosenController::class, 'isi'])->name('daftarDosen.isi');

    
    Route::get('/pklAktif', function () {
        return view('pov_koor/pklAktif');
    });
    Route::get('/pklAktif', [KoordinatorController::class, 'index2'])->name('pklAktif.index2');

    
    Route::get('/formAssign', function () {
        return view('pov_koor/formAssign');
    });
    
    Route::post('/uploadHasil/{id}', [JadwalKonsultasiController::class, 'uploadHasil'])->name('uploadHasil');
    Route::post('/uploadDokumentasi/{id}', [JadwalKonsultasiController::class, 'uploadDokumentasi'])->name('uploadDokumentasi');

    Route::get('getSurat/{id}', [KoordinatorController::class, 'getSurat'])->name('getSurat');

    Route::post('/store-2form', [KoordinatorController::class, 'store2form'])->name("store.2form");

    Route::get('/wordc/view/pdf', [KoordinatorController::class, 'up_pdf'])->name("wordc/view/pdf");

    
});

/*

| Jangan lupa php artisan route:clear

*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
