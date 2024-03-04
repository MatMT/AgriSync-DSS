<?php

namespace Model;

class Sucursal extends ActiveRecord
{
    protected static $tabla = 'sucursales';
    protected static $columnasDB = [
        'id',
        'telefono',
        'ubicacion',
        // Posibles llaves foraneas
        'gerente_id'
    ];
}