<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExitoBuscoJugadorController extends Controller
{
    public function mensaje(){
      return view('/exitoBuscoJugador');
    }
}
