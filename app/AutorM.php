<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutorM extends Model
{
    //Tabla que hace referencia a este modelo
    protected $table = 'autor';
    protected $primaryKey = 'id_autor';
    public $timestamps=false;

    protected $fillable = [
        'pseudonimo',
        'nombre',
        'apellidos'
    ];


   	/*
    Función para búsqueda

    public function scopeSearch($query, $buscar){
   		$query->where('nombre', 'LIKE', "%$buscar%")
   			  ->orwhere('apellidos', 'LIKE', "%$buscar%")
              ->orwhere('pseudonimo', 'LIKE', "%$buscar%")
              ->orwhere('Id_autor', 'LIKE', "%$buscar%");
   	}*/
}
