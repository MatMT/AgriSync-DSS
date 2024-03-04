<?php

namespace Controllers;

use Model\GerenteGeneral;
use Model\GerenteSucursal;
use Model\Usuario;
use MVC\Router;

class HomeController
{
    public static function index(Router $router)
    {

        $usuario = new Usuario([]);

        debuguear($usuario);

        $router->render("homepage", [
            'titulo' => 'HomePage',
        ]);
    }
}