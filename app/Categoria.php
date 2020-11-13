<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	protected $table = 'categorias';

	protected $primaryKey = 'id';

	public $timestamps = False;
	
    protected $fillable = [
        'nombre', 'descripcion',
    ];

    protected $guarded = [  ];

    public function productos() {
        return $this->hasMany(Producto::class);
    }
}
