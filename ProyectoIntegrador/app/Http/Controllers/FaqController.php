<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FAQ;

class FaqController extends Controller
{
    public function faq(){
      return view('faq');
    }

    public function listado(){
      $preguntas = FAQ::all();
      $vac = compact("preguntas");
      return view('faq', $vac);
    }
}
