<?php

namespace MVC;

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function comprobarRutas()
    {
        $url_actual = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            // Extraer la función asociada a dicha URL
            $fn = $this->getRoutes[$url_actual] ?? null;
        } else {
            $fn = $this->postRoutes[$url_actual] ?? null;
        }

        // Si la URL no esta asignada
        if ($fn) {
            // Función que llama una función
            // Recibe la Función y la Clase que tiene esa función
            call_user_func($fn, $this);
        } else {
            // Redireccionar a 404
            echo "Página No Encontrada o Ruta no válida";
        }
    }

    // Renderizar vistas a mostrar
    public function render($view, $datos = [])
    {
        foreach ($datos as $key => $value) {
            // Variable de Variable, Para Utilizar Variables que muestren valor
            $$key = $value;
        }

        // Iniciar almacenamiento en memoria de las vistas
        ob_start();

        // Directorio donde se guardan nuestras vistas
        include_once __DIR__ . "/views/$view.php";

        $contenido = ob_get_clean(); // Asignar el contenido y limpiar posteriormente

        include_once __DIR__ . '/views/layout.php';
    }
}
