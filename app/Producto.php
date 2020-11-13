<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $table = 'productos';

	protected $primaryKey = 'id';

	public $timestamps = False;

	protected $fillable = [ 'codigo', 'nombre', 'descripcion', 'stock', 'id_categoria', 'id_marca'];

	protected $guarded = [  ];

}
