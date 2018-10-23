<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonaLugar extends Model
{
    protected $table='lugar_persona';
  	public $timestamps=false;

	protected $fillable =[
        'fk_lugar',
        'fk_persona'
        
	];
}
