<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table='ventas';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable = [
    	'id_empresa',
    	'id_cliente',
    	'tipocomprobante',
    	'seriecomprobante',
    	'numcomprobante',
    	'fecha_hora',
    	'impuesto',
    	'totalventa',
    	'estatus',
    	'id_proveedor'
    ];

    protected $guarded =[

    ];
}
