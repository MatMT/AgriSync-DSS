<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\LoginController as ClientLoginController;
use App\Http\Controllers\Client\RegisterController as ClientRegisterController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Autenticación =================================

Route::prefix('login')->name('login.')->group(function () {
    Route::get('/', [ClientLoginController::class, 'index'])->name('index');
    Route::post('/', [ClientLoginController::class, 'store'])->name('store');
});

Route::prefix('register')->name('register.')->group(function () {
    Route::get('/', [ClientRegisterController::class, 'index'])->name('index');
    Route::post('/', [ClientRegisterController::class, 'store'])->name('store');
});


// Rutas Administrativas ===================================================================

Route::prefix('/admin')->name('admin.')->group(function () {

    // Autenticación =================================
    Route::prefix('/login')->name('login.')->group(function () {
        Route::get('/', [AdminLoginController::class, 'index'])->name('index');
        Route::post('/', [AdminLoginController::class, 'store'])->name('store');
    });

    // Gerente General =================================


});
