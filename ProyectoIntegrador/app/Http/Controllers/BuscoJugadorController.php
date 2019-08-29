<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;

class BuscoJugadorController extends Controller
{
    public function buscar(){
      return view('/buscoJugador');
    }

    public function agregar(Request $req){
      $this->validate($req,
      $rules = [
            "nombre"=>"required",
            "fecha"=>"required",
            "hora"=>"required",
            "provincia"=>"required",
            "localidad"=>"required",
            "direccion"=>"required",
            "tipoDeFutbol"=>"required",
            "cantidadJugadores"=>"required",
            "aclaraciones"=>"required|max: 50"
          ],
          $message = [
    'required' => 'Debes completar este campo',
    'max' => 'Máximo de 50 caracteress solamente'
]
      );

      $equipoNuevo = new Equipo();
      $equipoNuevo->nombre = $req['nombre'];
      $equipoNuevo->fecha = $req['fecha'];
      $equipoNuevo->hora = $req['hora'];
      $equipoNuevo->provincia = $req['provincia'];
      $equipoNuevo->localidad = $req['localidad'];
      $equipoNuevo->direccion = $req['direccion'];
      $equipoNuevo->tipoDeFutbol = $req['tipoDeFutbol'];
      $equipoNuevo->cantidadJugadores = $req['cantidadJugadores'];
      $equipoNuevo->aclaraciones = $req['aclaraciones'];
      $equipoNuevo->user_id = auth()->id();

      $equipoNuevo->save();
      return redirect("/exitoBuscoJugador");

    }
}
