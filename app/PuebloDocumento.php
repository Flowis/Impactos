<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuebloDocumento extends Model
{
    protected $table='cntrl_pueblo';
  	public $timestamps=false;

	protected $fillable =[
        'fk_doc',
        'fk_pueblo'
	]; 
}
