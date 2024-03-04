<?php

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use MVC\Router;
// Clases importadas
use Controllers\AuthController;
use Controllers\HomeController;

// Instanciando Router para el manejo de rutas
$router = new Router();

// HomePage - Función que asigna URL, Controllador y su Función
$router->get('/', [HomeController::class, 'index']);

// Login
$router->get('/login', [LoginController::class, 'index']);
$router->post('/login', [LoginController::class, 'store']);
$router->post('/logout', [AuthController::class, 'logout']);

// Crear Cuenta
$router->get('/registro', [AuthController::class, 'registro']);
$router->post('/registro', [AuthController::class, 'registro']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);


$router->comprobarRutas();