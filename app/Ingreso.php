<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table='ingresos';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable = [
    	'tipocomprobante',
    	'seriecomprobante',
    	'numcomprobante',
    	'fecha_hora',
    	'impuesto',
    	'id_proveedor'
    ];

    protected $guarded =[

    ];
}
