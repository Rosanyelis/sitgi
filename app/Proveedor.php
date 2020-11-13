<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedors';

	protected $primaryKey = 'id';

	public $timestamps = False;

	protected $fillable = [ 'rif', 'razon_social', 'nombre', 'telefono', 'direccion', 'correo'];

	protected $guarded = [  ];
}
