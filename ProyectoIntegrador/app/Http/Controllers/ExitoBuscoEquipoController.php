<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jugador;
use App\EquipoJugador;
use App\Equipo;



class ExitoBuscoEquipoController extends Controller
{
    public function unirme(){
      $jugadores = new Jugador();
      $jugadores->user_id = auth()->id();
      $jugadores->save();

      $equipoJugador = new EquipoJugador();
      $equipoJugador->equipo_id = Equipo::find('id');
      $equipoJugador->jugador_id = Jugador::find('id');
      $equipoJugador->save();

      return view("/exitoBuscoEquipo");

}
}
