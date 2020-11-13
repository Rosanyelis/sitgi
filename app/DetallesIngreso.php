<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallesIngreso extends Model
{
    protected $table='detalles_ingresos';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable = [
    	'id_ingreso',
    	'lote',
    	'precio_coste',
    	'precio_venta',
    	'cantidad',
    	'id_producto'
    ];

    protected $guarded =[

    ];
}
