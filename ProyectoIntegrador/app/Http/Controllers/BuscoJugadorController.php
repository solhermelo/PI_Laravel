<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscoJugadorController extends Controller
{
    public function buscar(){
      return view('buscoJugador');
    }
}
