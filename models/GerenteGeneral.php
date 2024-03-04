<?php

namespace Model;

class GerenteGeneral extends Usuario
{
    protected static $tabla = 'GerentesGenerales';
    protected static $columnasDB;

    // Atributos nuevos en el modelo
    public $cargo_id;

    public function __construct($args = [])
    {
        // Heredar y asignar las columnas de la DB
        static::$columnasDB = array_merge(
            parent::$columnasDB,
            [
                'cargo_id'
            ]
        );

        // Heredar y asignar atributos del nuevo modelo
        parent::__construct($args);

        $this->cargo_id = $args['cargo_id'] ?? 0;
    }
}