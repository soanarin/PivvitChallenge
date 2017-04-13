<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
    //
    protected $fillable = array('offering','price');
    return $this->hasMany('App\Purchase');
}
