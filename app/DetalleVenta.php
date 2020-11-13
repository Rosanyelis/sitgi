<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $table='detalles_ventas';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable = [
    	'id_venta',
    	'precio_venta',
    	'cantidad',
    	'id_producto'
    ];

    protected $guarded =[

    ];
}
