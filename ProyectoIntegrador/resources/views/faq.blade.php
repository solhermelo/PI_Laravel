@extends('layouts.main')

@section('content')
  <main>
    <div class="container2">
    <div class="div_1 shadow p-3 mb-5 bg-white rounded">
      <h1 class="titulo">PREGUNTAS FRECUENTES</h1>

      @foreach($preguntas as $pregunta)
        <h2 class="shadow-lg p-3 mb-2 bg-white rounded preguntas">
          {{$pregunta->Questions}}
        </h2>
        <p class="respuesta">
          {{$pregunta->Answers}}
        </p>
      @endforeach

    </div>
  </div>

  </main>
