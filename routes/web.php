<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\BranchesController;
use App\Http\Controllers\admin\CrudManager;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\DependienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\HomeGerenteGeneral;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\LoginController as ClientLoginController;
use App\Http\Controllers\Client\RegisterController as ClientRegisterController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\EmployeeRequest;

use App\Http\Controllers\Admin\CajeroController;

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

// Ruta para el formulario de inicio de sesión
Route::get('/login', [ClientLoginController::class, 'index'])->name('login');  // Esta es la ruta que Laravel busca por defecto
// Ruta para procesar el formulario de inicio de sesión
Route::post('/login', [ClientLoginController::class, 'store'])->name('login.store');

// Registro de usuario
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

    // Ruta para cerrar sesión
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');

    // Gerente General =============================== Acceso según Rol
    Route::group(['prefix' => '/gerente-general', 'as' => 'gg.'], function () {
        Route::get('/{user}', [HomeGerenteGeneral::class, 'index'])->name('home');

        Route::get('/personal/gerencia', [EmployeeRequest::class, 'indexGS'])->name('indexGS');

        Route::get('/personal/gerencia/nuevo', [CrudManager::class, 'index'])->name('indexNewGS');
        Route::post('/personal/gerencia/nuevo', [CrudManager::class, 'store'])->name('storeGS');
    })->middleware(['role:Gerente General']);

    // Gerente Sucursal ============================== Acceso según Rol

    // =============================================== Acceso según Permiso
    Route::group(['prefix' => '/solicitudes', 'as' => 'rq.'], function () {
        Route::get('/{branch?}', [EmployeeRequest::class, 'index'])->name('index');
        Route::post('/', [EmployeeRequest::class, 'store'])->name('store');
        // Route::post('/sucursal/{branch}', [EmployeeRequest::class, 'home'])->name('logout');
    })->middleware(['role:Gerente General']);

    // =============================================== Acceso según Permiso
    Route::group(['prefix' => '/sucursal', 'as' => 'br.'], function () {
        Route::get('/{branch?}', [BranchesController::class, 'index'])->name('index');

        // Creación de una nueva sucursal
        Route::post('/', [BranchesController::class, 'store'])->name('store');

        // Actualización de una sucursal
        Route::put('/{branch}', [BranchesController::class, 'update'])->name('update');
    });

    // 
});

Route::group(['prefix' => '/cajero', 'as' => 'cj.'], function () {
    // Cajero =============================== Acceso según Rol
    Route::get('/{user}', [HomeGerenteGeneral::class, 'index'])->name('home');
    Route::post('/{user}', [CajeroController::class, ''])->name('logout');
})->middleware(['role:Cajero']);


Route::group(['prefix' => '/cliente', 'as' => 'client.'], function () {
    Route::get('/{user}', [ClientController::class, 'show'])->name('profile');

    Route::get('/{user}/cuenta/{account}', [AccountController::class, 'show'])->name('account');
});

Route::group(['prefix' => '/dependiente', 'as' => 'depend.'], function () {
    Route::get('/{user}', [DependienteController::class, 'index'])->name('home');
});

