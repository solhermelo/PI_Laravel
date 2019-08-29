<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ELiminarPartidoController extends Controller
{
    public function borrar(Request $req){
        $id = $req['id'];
        $equipo = Equipo::find($id);
        $equipo->delete();
        return redirect('/');

    }
}
