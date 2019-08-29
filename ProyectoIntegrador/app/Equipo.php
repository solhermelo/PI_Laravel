<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    public $guarded = [];

    public function user(){
      return $this->belongsTo("App\User", "user_id");
    }

    public function jugador(){
      return $this->belongsToMany("App\Jugador", "equipo_jugador", "equipo_id", "jugador_id");
    }
}
