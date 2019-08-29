<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipo;

class MisPartidosController extends Controller
{
    public function editar(){

        $equipos = Equipo::all();
        $vac = compact("equipos");
        return view('/misPartidos', $vac);

    }
}
