<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use App\Models\Catatan;
use App\Models\Kategori;
use App\Models\Pengunjung;
use App\Models\Laporan;
use App\Models\Konselor;
use App\Models\Jadwal;
use App\Models\Tindak;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $catats = Catatan::with('user')->get();
        View::share('catats',$catats);

        $kategoris = Kategori::get();
        View::share('kategoris',$kategoris);

        $pengunjungs = Pengunjung::get();
        View::share('pengunjungs',$pengunjungs);

        $laporans = Laporan::get();
        View::share('laporans',$laporans);

        $konselors = Konselor::get();
        View::share('konselors',$konselors);

        $jadwals = Jadwal::get();
        View::share('jadwals',$jadwals);

        $tindaks = Tindak::get();
        View::share('tindaks',$tindaks);
    }
}
