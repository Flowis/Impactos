<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutorM extends Model
{
    //Tabla que hace referencia a este modelo
    protected $table = 'autor';

    protected $primaryKey = 'Id_autor';

    protected $fillable = [
        'pseudonimo',
        'nombre',
        'apellidos'
    ];

}
