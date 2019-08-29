<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    public $table = "jugadores";
    public $guarded = [];

    public function user(){
      return $this->belongsTo("App\User", "user_id");
    }

    public function equipos(){
      return $this->belongsToMany("App\Equipo", "equipo_jugador", "jugador_id", "equipo_id");
    }
}
