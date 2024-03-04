<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;
// Clases Derivadas
use Model\Admin;
use Model\Cliente;

class LoginController
{
    public static function index(Router $router)
    {
        // Render a la vista 
        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión',
            'alertas' => []
        ]);
    }

    public static function store(Router $router)
    {
        $alertas = [];
        // Instancia de las posibles clases para el login
        $cliente = new Cliente($_POST);
        $administrativo = new Admin($_POST);

        // Validación básica (campos vacíos u otros...)
        $alertas = $cliente->validarLogin();

        if (empty($alertas)) {
            // Verificación de Usuario en tabla de Clientes
            $cliente = Cliente::where('email', $cliente->email);
            // Verficiación de Admin en tabla de Gerencias o Cajeros
            $administrativo = Admin::where('email', $administrativo->email);

            if (!$cliente || !$administrativo) {
                Usuario::setAlerta('error', 'El Usuario No Existe en los registros');
            } elseif (($cliente && !$cliente->confirmado) || ($administrativo && !$administrativo->confirmado)) {
                Usuario::setAlerta('error', 'El Usuario aún No ha sido Confirmado');
            } else {
                // El Usuario o Administrativo existe
                $usuario = $cliente ?? $administrativo;

                if (password_verify($_POST['password'], $usuario->password)) {
                    // Iniciar la sesión
                    session_start();
                    $_SESSION['id'] = $usuario->id;
                    $_SESSION['nombre'] = $usuario->nombre;
                    $_SESSION['apellido'] = $usuario->apellido;
                    $_SESSION['email'] = $usuario->email;

                    if ($administrativo) {
                        $_SESSION['admin'] = true;
                        $_SESSION['cajero'] = isset($administrativo) ? 'general' : 'sucursal';
                    }
                } else {
                    Usuario::setAlerta('error', 'Password Incorrecto');
                }
            }


        }

        $usuario = $cliente ?? $administrativo;
        $alertas = Usuario::getAlertas();

        // Render a la vista 
        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión',
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }
}