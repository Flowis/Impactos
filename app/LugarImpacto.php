<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LugarImpacto extends Model
{
	protected $table = 'lugar_impacto';
  	public $timestamps = false;

	protected $fillable =[
        'fk_lugar',
        'fk_impacto' 
	]; 
}
