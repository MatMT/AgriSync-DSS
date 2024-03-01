<?php

use Dotenv\Dotenv;
use Model\ActiveRecord;

// Cargado automático/dinámico de clases, sin necesidad de require
require __DIR__ . '/../vendor/autoload.php';

// Añadir Dotenv
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

// Funciones Globales
require 'funciones.php';
// Conexión a la BDD
require 'database.php';

// Conectarnos a la base de datos
ActiveRecord::setDB($db);