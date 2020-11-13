<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarioo extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    public $timestamps = False;
    protected $fillable = [
        'login', 'password', 'rol','pregunta','respuesta'
    ];
    protected $guarded =[

    ];
}
