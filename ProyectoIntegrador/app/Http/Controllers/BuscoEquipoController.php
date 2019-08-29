<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;

class BuscoEquipoController extends Controller
{
    public function listado(){
      $equipos = Equipo::paginate(5);
      $vac = compact("equipos");
      return view('buscoEquipo', $vac);
    }
}
