<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxes extends Model
{
    //
      protected $fillable = ['taxes','taux'];
       public function paiements()
    {
        return $this->belongsToMany('App\Payements');
    }

}
