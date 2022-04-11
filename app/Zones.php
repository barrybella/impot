<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
  protected $fillable = [
  'zone','id_quartier'
];
      public function quartiers(){
        
          return $this->belongsTo(Quartier::class,'id_quartier','id');
      }

}
