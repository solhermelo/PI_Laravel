<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscoEquipoController extends Controller
{
    public function buscar(){
      return view('BuscoEquipo');
    }
}
