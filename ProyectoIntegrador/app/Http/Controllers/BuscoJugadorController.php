<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;

class BuscoJugadorController extends Controller
{
    public function buscar(){
      return view('buscoJugador');
    }

    public function agregar(Request $req){
      $ofertaNueva = new Oferta();
      $ofertaNueva->nombreEquipo = $req['nombreEquipo'];
      $ofertaNueva->fecha = $req['fecha'];
      $ofertaNueva->hora = $req['hora'];
      $ofertaNueva->ubicacion = $req['ubicacion'];
      $ofertaNueva->tipoDeFutbol = $req['tipoDeFutbol'];
      $ofertaNueva->cantidadJugadores = $req['cantidadJugadores'];
      $ofertaNueva->aclaraciones = $req['aclaraciones'];

      $ofertaNueva->save();
      return redirect('/');

    }
}
