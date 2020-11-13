<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

	protected $primaryKey = 'id';

	public $timestamps = False;

	protected $fillable = [ 'tipodocumento', 'numdocumento', 'nombre', 'telefono', 'direccion'];

	protected $guarded = [  ];
}
