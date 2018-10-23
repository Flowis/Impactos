<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstitucionLugar extends Model
{
    protected $table='lugar_instit';
  	public $timestamps=false;

	protected $fillable =[
        'fk_lugar',
        'fk_instit' 
	]; 
}
