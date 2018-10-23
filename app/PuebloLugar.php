<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuebloLugar extends Model
{
    protected $table='lugar_pueblo';
  	public $timestamps=false;

	protected $fillable =[
        'fk_lugar',
        'fk_pueblo'
	]; 
}
