<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\Dosen;

class DosenTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $dosen = Dosen::where('email', 'dosen1@example.com')->first();

        $this->browse(function (Browser $browser) use($dosen) {
            $browser->visit('/loginfix')
                ->type('email',$dosen->email)
                ->type('password', 'password')
                ->press('Login')
                ->assertPathIs('/dashboardDosen')
                ->assertSee('Anak Bimbing');
        });

        # melihat anak bimbing
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboardDosen')
                ->assertSee('Anak Bimbing')
                ->press('i.ti-id-badge.menu-icon')
                ->assertPathIs('/anakBimbing')
                ->assertSee('Daftar Mahasiswa Bimbingan')
                ->assertVisible('table.table')
                ->assertSeeIn('table thead', 'Nama Mahasiswa')
                ->assertSeeIn('table thead', 'NIM')
                ->assertSeeIn('table thead', 'Detail PKL')
                ->assertSeeIn('table thead', 'Histori Logbook')
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(1)', 'John Doe') 
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(2)', '187221053') 
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(3)', 'Detail PKL')
                ->press('table tbody tr:nth-child(1) td:nth-child(4) a')
                ->assertPathIs('/detilLogbook/1')
                ->back()
                ->press('table tbody tr:nth-child(1) td:nth-child(5) a')
                ->assertPathIs('/detilBimbingan/1')
                ->back()
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(7)', '2024-11-16' )
                ->press('table tbody tr:nth-child(1) td:nth-child(8)', 'Input Nilai')
                ->waitFor('#inputNilaiModal', 10)
                ->assertSee('Input Nilai Mahasiswa')
                ->type('#kehadiran', '85')
                ->type('#pemahaman', '90')
                ->type('#kerjaTim', '88')
                ->type('#luaran', '92')
                ->type('#laporan', '95')
                ->press('#saveNilaiButton')
                ->waitUntilMissing('#inputNilaiModal', 5)
                ;
        });

        # Konsultasi bimbingan
        $this->browse(function (Browser $browser) use($dosen) {
            $browser->visit('/dashboardDosen')
                ->assertSee('Anak Bimbing')
                ->press('i.ti-comments.menu-icon')
                ->assertPathIs('/jadwalBimbinganDosen')
                ->assertSee('Jadwal Bimbingan')
                ->assertSeeIn('table thead', 'Nama Mahasiswa')
                ->assertSeeIn('table thead', 'NIM')
                ->assertSeeIn('table thead', 'Tanggal Konsultasi')
                ->assertSeeIn('table thead', 'Waktu Konsultasi')
                ->assertSeeIn('table thead', 'Topik')
                ->assertSeeIn('table thead', 'Status')
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(1)', 'John Doe') 
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(2)', '187221053') 
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(3)', '2024-11-12') 
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(4)', '00:00:00') 
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(5)', 'dddd') 
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(6)', 'Waiting Approval')
                ->select('table tbody tr:nth-child(1) td:nth-child(6) select', 'Approved')
                ->waitForText('Approved') 
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(6)', 'Approved')
                ;
        });


    }
}
