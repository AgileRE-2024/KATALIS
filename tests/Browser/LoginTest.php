<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use App\Models\Dosen;
use App\Models\Koordinator;


class LoginTest extends DuskTestCase
{
    /**
     * Test login for Mahasiswa.
     *
     * @return void
     */


    public function testMahasiswaLogin() : void
    {
        $mahasiswa = User::where('email', 'mahasiswatest@example.com')->first();

        $this->browse(function (Browser $browser) use($mahasiswa) {
            $browser->visit('/loginfix')
                ->type('email',$mahasiswa->email)
                ->type('password', 'password')
                ->press('Login')
                ->assertPathIs('/dashboard')
                ->assertSee('Deadline Laporan');
        });

        # melihat profile
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboard')
                ->assertSee('Deadline Laporan')
                ->press('i.ti-user.menu-icon')
                ->assertPathIs('/profilmh')
                ->assertSee('Nama');
        });

        # membuat pengajuan
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboard')
                ->assertSee('Deadline Laporan')
                ->press('i.ti-email.menu-icon')
                ->assertPathIs('/worda')
                ->assertSee('Pengajuan Surat')
                ->type('doswal', 'Pak Eto')
                ->type('tanggal_mulai', '2023-03-21')
                ->type('tanggal_selesai', '2023-03-21')
                ->type('koprodi', 'Pak Hendra')
                ->type('nip_koprodi','187221928830')
                ->type('surat_ditujukan_kepada', 'HRD BCA')
                ->type('nama_lembaga', 'BCA')
                ->type('alamat', 'alamat bca')
                ->type('keperluan', 'PKL Magang')
                ->waitFor('input[name="nim"]') 
                ->type('input[name="nim"]', '1872221053')  
                ->keys('input[name="nim"]', '{enter}')  
                ->waitFor('input[name="name"]')  
                ->waitFor('input[name="no_hp"]')  
                ->pause(1000)
                ->press('Kirim') 
                ->assertPathIs('/wordb/view/pdf')
                ;
        });

        # melihat info dosbing
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboard')
                ->assertSee('Deadline Laporan')
                ->press('i.ti-id-badge.menu-icon')
                ->assertPathIs('/profilds')
                ->assertSee('NIP');
        });

        # melihat dan mengedit informasi pkl
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboard')
                ->assertSee('Deadline Laporan')
                ->press('i.ti-map-alt.menu-icon')
                ->assertPathIs('/informasipkl')
                ->assertSee('Informasi PKL')   
                ->type('role', 'data analyst')
                ->type('periode_start', '2023-03-21')
                ->type('periode_end', '2023-03-21')
                ->attach('input[name="surat_permohonan"]', base_path('public\storage\proposal_1817513492443503.pdf')) 
                ->attach('input[name="surat_penerimaan"]', base_path('public\storage\proposal_1817689125893432.pdf'))
                ->press('Simpan Informasi PKL');
        });

        # mengisi histori konsultasi bimbingan
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboard')
                ->assertSee('Deadline Laporan')
                ->press('i.ti-comments.menu-icon')
                ->assertPathIs('/jadwalBimbingan')
                ->assertSee('Jadwal Konsultasi Bimbingan')   
                ->type('tanggal_konsultasi', '2024-11-12')
                ->type('waktu_konsultasi', '00:00:00')
                ->type('topik', 'dddd')
                ->press('Atur Jadwal')
                ->pause(5000); 
        });

        # mengisi histori logbook
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboard')
                ->assertSee('Deadline Laporan')
                ->press('i.ti-file.menu-icon')
                ->assertPathIs('/logbook')
                ->assertSee('Logbook')   
                ->type('tanggal', '2024-11-12')
                ->type('kegiatan', 'sssssss')
                ->attach('input[name="dokumentasi"]', base_path('public\uploads\1728615850.png'))
                ->press('Tambah Logbook'); 
        });

        # melakukan pengajuan seminar
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboard')
                ->assertSee('Deadline Laporan')
                ->visit('/formPengajuanSemianr')
                ->assertSee('Form Pengajuan Seminar')
                ->type('judul_pkl', 'Pengembangan Aplikasi Web')
                ->type('tempat_pkl', 'PT Makmur Tentram Berprestasi')
                ->type('dosen_pembimbing', 'Dr. Joko S')
                ->type('tanggal_seminar', '2024-12-15')
                ->attach('laporanPKL', __DIR__ . '/files/laporan_pkl.pdf')
                ; 
        });
    }

}

