<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaisM extends Model
{
    protected $table = 'pais';
    protected $primaryKey = 'id_pais';
    public $timestamps=false;

    protected $fillable = [
        'nombre'
    ];
}
