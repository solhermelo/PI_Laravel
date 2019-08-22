<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Oferta;

class BuscoEquipoController extends Controller
{
    public function listado(){
      $ofertas = Oferta::all();
      $vac = compact("ofertas");
      return view('buscoEquipo', $vac);
    }
}
