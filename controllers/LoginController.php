<?php

namespace Controllers;

use MVC\Router;
use Model\Usuario;

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
        $usuario = new Usuario($_POST);

        $alertas = $usuario->validarLogin();

        if (empty($alertas)) {
            // Verificar quel el usuario exista
            $usuario = Usuario::where('email', $usuario->email);
            if (!$usuario || !$usuario->confirmado) {
                Usuario::setAlerta('error', 'El Usuario No Existe o no esta confirmado');
            } else {
                // El Usuario existe
                if (password_verify($_POST['password'], $usuario->password)) {

                    // Iniciar la sesión
                    session_start();
                    $_SESSION['id'] = $usuario->id;
                    $_SESSION['nombre'] = $usuario->nombre;
                    $_SESSION['apellido'] = $usuario->apellido;
                    $_SESSION['email'] = $usuario->email;
                    $_SESSION['admin'] = $usuario->admin ?? null;

                } else {
                    Usuario::setAlerta('error', 'Password Incorrecto');
                }
            }
        }

        $alertas = Usuario::getAlertas();

        // Render a la vista 
        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión',
            'usuario' => $usuario,
            'alertas' => $alertas
        ]);
    }
}