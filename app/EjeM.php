<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EjeM extends Model
{
    protected $table = 'eje';
    protected $primaryKey = 'id_eje';
    public $timestamps=false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'area',
        'poblacion'
    ];
}
