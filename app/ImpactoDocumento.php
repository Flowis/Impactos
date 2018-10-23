<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImpactoDocumento extends Model
{
    protected $table='cntrl_impacto';
  	public $timestamps=false;

	protected $fillable =[
        'fk_doc',
        'fk_impacto'
        
	]; 
}
