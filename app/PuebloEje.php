<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuebloEje extends Model
{
    protected $table='eje_pueblo';
  	public $timestamps=false;

	protected $fillable =[
        'fk_eje',
        'fk_pueblo'
	];
}
