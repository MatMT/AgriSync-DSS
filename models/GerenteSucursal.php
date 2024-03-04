<?php

namespace Model;

class GerenteSucursal extends Usuario
{
    protected static $tabla = 'GerentesSucursales';
    protected static $columnasDB;

    // Atributos nuevos en el modelo
    public $sucursal_id;

    public function __construct($args = [])
    {
        // Heredar y asignar las columnas de la DB
        static::$columnasDB = array_merge(
            parent::$columnasDB,
            [
                'sucursal_id'
            ]
        );

        // Heredar y asignar atributos del nuevo modelo
        parent::__construct($args);

        $this->sucursal_id = $args['sucursal_id'] ?? 0;
    }
}