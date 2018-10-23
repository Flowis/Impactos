<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LugarTema extends Model
{
    protected $table = 'lugar_tema';
  	public $timestamps = false;

	protected $fillable =[
        'fk_lugar',
        'fk_tema' 
	];
}
