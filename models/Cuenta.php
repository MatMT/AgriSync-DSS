<?php

namespace Model;

class Cuenta extends ActiveRecord
{
    protected static $tabla = 'cuentas';

    protected static $columnasDB = [
        'id',
        'saldo',
        'fecha_apertura',
        // Posibles llaves foraneas
        'sucursal_id',
        'tipo_id',
        'estado_id'
    ];

    public $id;
    public $saldo;
    public $tipo_id;
    public $estado_id;
    public $fecha_apertura;
    public $sucursal_id;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->saldo = $args['saldo'] ?? '';
        $this->tipo_id = $args['tipo_id'] ?? '';
        $this->estado_id = $args['estado_id'] ?? '';
        $this->fecha_apertura = $args['fecha_apertura'] ?? '';
        $this->sucursal_id = $args['sucursal_id'] ?? '';
    }
}