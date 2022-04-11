<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redevables extends Model
{
      protected $fillable = ['noms', 'prenoms', 'Telephone', 'Email', 'Nature','Patente', 'password', 'id_activite', 'id_typeRe', 'id_quartier'];

      public function quartiers(){

          return $this->belongsTo(Quartier::class,'id_quartier','id');
      }
      public function activites(){

          return $this->belongsTo(Activites::class,'id_activite','id');
      }
      public function types_redevabilites(){

          return $this->belongsTo(typesRedevabilites::class,'id_typeR','id');
      }


}
