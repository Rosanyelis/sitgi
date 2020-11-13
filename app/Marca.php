<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';

	protected $primaryKey = 'id';

	public $timestamps = False;

	protected $fillable = [ 'nombre', 'descripcion'];

	protected $guarded = [  ];

    public function productos() {
        return $this->hasMany(Producto::class);
    }
}
