<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugador;
use App\EquipoJugador;
use App\Equipo;



class ExitoBuscoEquipoController extends Controller
{
    public function unirme($id){

      $jugadores = new Jugador();
      $jugadores->user_id = $id;
      $jugadores->save();

      $equipo = Equipo::find($id);

      $equipoJugador = new EquipoJugador();
      $equipoJugador->equipo_id = $equipo->id;
      $equipoJugador->jugador_id = $jugadores->id;
      $equipoJugador->save();

      return view("/exitoBuscoEquipo");

}
}
