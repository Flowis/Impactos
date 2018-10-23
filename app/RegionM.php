<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegionM extends Model
{
    protected $table = 'region';
    protected $primaryKey = 'id_region';
    public $timestamps=false;

    protected $fillable = [
        'nombrereg'
    ];
}
