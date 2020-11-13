<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stockmerma extends Model
{
	protected $table = 'stockmermas';
	protected $primaryKey = 'id';
	public $timestamps = False;
    protected $fillable = [ 'motivo', 'descripcion', 'cantidad', 'id_producto'];
    protected $guarded = [  ];
}
