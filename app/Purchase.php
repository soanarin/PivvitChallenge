<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    protected $fillable = array('customerName','offeringId','quantity');

    //relation to Offering
    public function offering()
    {
        return $this->belongsTo('App\Offering');
    }
}
