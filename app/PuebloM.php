<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuebloM extends Model
{
    protected $table='pueblo';
	protected $primaryKey="id_pueblo";
	public $timestamps=false;

	protected $fillable =[
		'nombre',
		'nombre2',
		'territorio',
		'familia'
	];
}
