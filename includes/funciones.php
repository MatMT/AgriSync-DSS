<?php

// Función para debugear variables
function debuguear($variable): string
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Función para debugear de manera más legible
function debuguear_json($variable): string
{
    // Codificar la variable como JSON
    $json = json_encode($variable, JSON_PRETTY_PRINT);

    // Mostrar el JSON dentro de la etiqueta <pre>
    echo '<pre><code>' . htmlspecialchars($json) . '</code></pre>';

    // Terminar la ejecución del script
    exit;
}


// Limpiar Salida de HTML
function s($html): string
{
    $s = htmlspecialchars($html);
    return $s;
}

// Comprobar Sesión Iniciada
function isAuth()
{
    session_start();

    if (!$_SESSION["login"]) {
        header("Location: /");
    }
}