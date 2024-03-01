<?php

// Función para debugear variables
function debuguear($variable): string
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
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