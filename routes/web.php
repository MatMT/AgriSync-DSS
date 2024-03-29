<?php

use App\Http\Controllers\Admin\BranchesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeGerenteGeneral;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\LoginController as ClientLoginController;
use App\Http\Controllers\Client\RegisterController as ClientRegisterController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\EmployeeRequest;

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

Route::get('/', HomeController::class);

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

Route::group(['prefix' => '/admin', 'as' => 'admin.'], function () {

    // Autenticación ================================= Acesso Libre
    Route::prefix('/login')->name('login.')->group(function () {
        Route::get('/', [AdminLoginController::class, 'index'])->name('index');
        Route::post('/', [AdminLoginController::class, 'store'])->name('store');
    });

    // Gerente General =============================== Acceso según Rol
    Route::group(['prefix' => '/gerente-general', 'as' => 'gg.'], function () {
        Route::get('/{user}', [HomeGerenteGeneral::class, 'index'])->name('home');
        Route::post('/{user}', [AdminController::class, 'home'])->name('logout');
    })->middleware(['role:Gerente General']);

    // Acceso según Permiso
    Route::group(['prefix' => '/solicitudes', 'as' => 'rq.'], function () {
        Route::get('/', [EmployeeRequest::class, 'index'])->name('index');
        // Route::post('/sucursal/{branch}', [EmployeeRequest::class, 'home'])->name('logout');
    })->middleware(['role:Gerente General']);

    // Acceso según Permiso
    Route::group(['prefix' => '/sucursales', 'as' => 'br.'], function () {
        Route::get('/', [BranchesController::class, 'index'])->name('index');
        // Route::post('/sucursal/{branch}', [EmployeeRequest::class, 'home'])->name('logout');
    });
});

