<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EditorM extends Model
{
    protected $table = 'editor';
    protected $primaryKey = 'id_editor';
    public $timestamps=false;

    protected $fillable = [
        'editor',
        'pais',
        'estado',
        'der_autor'
    ];
}
