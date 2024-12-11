<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\Koordinator;

class KoordinatorTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $koordinator = Koordinator::where('email', 'nania@gmail.com')->first();

        $this->browse(function (Browser $browser) use($koordinator) {
            $browser->visit('/loginfix')
                ->type('email',$koordinator->email)
                ->type('password', 'password')
                ->press('Login')
                ->assertPathIs('/dashboardKoor')
                ->assertSee('Jumlah PKL Aktif');
        });

        # pengajuan penentuan dosen pembimbing
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboardKoor')
                ->assertSee('Jumlah PKL Aktif')
                ->press('i.ti-id-badge.menu-icon')
                ->assertPathIs('/assignPembimbing')
                ->assertSee('Penentuan Dosen Pembimbing')
                ->assertSeeIn('table thead', 'No')
                ->assertSeeIn('table thead', 'ID Pengajuan')
                ->assertSeeIn('table thead', 'Nama Mahasiswa')
                ->assertSeeIn('table thead', 'NIM')
                ->assertSeeIn('table thead', 'Tempat Magang')
                ->assertSeeIn('table thead', 'Periode Magang')
                ->assertSeeIn('table thead', 'Assign Dosen Pembimbing')
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(1)', '1') 
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(2)', '1817468067861189') 
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(3)', 'Jane Smith')
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(4)', '1234567801')
                ->press('table tbody tr:nth-child(1) td:nth-child(7)', 'Assign Dosbing')
                ->assertPathIs('/getSurat/1817468067861189') 
                ;
        });

        # daftar dosen
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboardKoor')
                ->assertSee('Jumlah PKL Aktif')
                ->press('i.ti-user.menu-icon')
                ->assertPathIs('/daftarDosen')
                ->assertSee('Daftar Dosen Pembimbing')
                ->assertSeeIn('table thead', 'No')
                ->assertSeeIn('table thead', 'Nama Dosen')
                ->assertSeeIn('table thead', 'NIP')
                ->assertSeeIn('table thead', 'Bidang Keahlian')
                ->assertSeeIn('table thead', 'Jumlah Anak Bimbing')
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(1)', '1') 
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(2)', 'Dr. Alan Walker') 
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(3)', '9876543210')
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(4)', 'Kecerdasan Buatan') 
                ;
        });

        # daftar pkl aktif
        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboardKoor')
                ->assertSee('Jumlah PKL Aktif')
                ->press('i.ti-map-alt.menu-icon')
                ->assertPathIs('/pklAktif')
                ->assertSee('Data Mahasiswa PKL')
                ->assertSeeIn('table thead', 'No')
                ->assertSeeIn('table thead', 'Nama Mahasiswa')
                ->assertSeeIn('table thead', 'NIM')
                ->assertSeeIn('table thead', 'Kelompok')
                ->assertSeeIn('table thead', 'Tempat Magang')
                ->assertSeeIn('table thead', 'Periode Magang')
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(1)', '1') 
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(2)', 'Jane Smith') 
                ->assertSeeIn('table tbody tr:nth-child(1) td:nth-child(3)', '1234567801')
                ;
        });




    }
}
