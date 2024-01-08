<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\Pasien;

// Route::get('/detail-spot/{slug}', [\App\Http\Controllers\HomeController::class, 'detailSpot'])->name('detail-spot');

Auth::routes();
// Route::get("/data-pasien", [HomeController::class, "pasien"])->name("data-pasien");

Route::view('/', 'welcome');

Route::view('/login', 'auth.login')->name('login');

Route::middleware(['auth'])->group(
    function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/simple-map', [HomeController::class, 'simple_map'])->name('simple-map');
        Route::get('/markers', [HomeController::class, 'marker'])->name('markers');
        Route::get('/get-coordinate', [HomeController::class, 'getCoordinate'])->name('getCoordinate');
        Route::get('/data-pasien', [HomeController::class, 'pasien'])->name('data-pasien');
        Route::get('/data-create', [Pasien::class, 'create'])->name('data-create');
        Route::post('/data-store', [Pasien::class, 'store'])->name('data-store');
        Route::post('/data-update/{id}', [Pasien::class, 'update'])->name('data-update');
        Route::get('/data-show/{id}', [Pasien::class, 'show'])->name('update-pasien/{id}');
        Route::get('/data-hapus/{id}', [Pasien::class, 'destroy'])->name('data-destroy');


        ## Route Datatable
        // Route::get('/data-pasien', [App\Http\Controllers\HomeController::class, 'datapasien'])->name('data-pasien');
    }
);
