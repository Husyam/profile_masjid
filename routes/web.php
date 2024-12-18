<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KegiatanController;

use App\Http\Controllers\CashinController;
use App\Http\Controllers\CashoutController;
use App\Http\Controllers\HomeController;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/kegiatann', [HomeController::class, 'kegiatan'])->name('kegiatann');
Route::get('/cashinn', [HomeController::class, 'cashin'])->name('cashinn');
Route::get('/cashoutt', [HomeController::class, 'cashout'])->name('cashoutt');

Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login'); // Tambahkan ->name('login')

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // Route::get('home', function () {
    //     return view('pages.dashboard');
    // })->name('home');

    Route::get('/dashboard', [CashinController::class, 'dashboard'])->name('dashboard');

    Route::resource('kegiatan', KegiatanController::class);

    Route::resource('cashin', CashinController::class);
    Route::resource('cashout', CashoutController::class);
});



