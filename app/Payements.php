<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payements extends Model
{
     public function taxes()
    {
        return $this->belongsToMany(Taxes::class,'id_taxes','id');
    }
}
