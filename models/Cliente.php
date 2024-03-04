<?php

namespace Model;

class Cliente extends Usuario
{
    protected static $tabla = 'Clientes';
    protected static $columnasDB;

    public function __construct($args = [])
    {
        // Heredar y asignar las columnas de la DB
        static::$columnasDB = parent::$columnasDB;

        // Heredar y asignar atributos del nuevo modelo
        parent::__construct($args);
    }
}