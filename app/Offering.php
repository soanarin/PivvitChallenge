<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Offering extends Model
{
	protected $fillable = array('offering','price');
    //relation to Purchase
    public function purchases()
    {
    return $this->hasMany('App\Purchase');
    }
}
