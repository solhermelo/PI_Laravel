@extends('layouts.main')
@section('title', 'Busco Jugador')

@section('content')

<main class="container3">

<div class="center">
  <div class="row justify-content-center">
    <div class="col-md-8 cuerpo div_2">
      <div class="card bloque">

        <div class="card-header font-weight-bold titulo2">COMPLETA EL FORMULARIO PARA ENCONTRAR EL JUGADOR QUE TE FALTA</div>

        <form class="" id="formulario" action="/buscoJugador" method="post">
          {{csrf_field()}}

      <div class="form-group ">
        <label for="nombre" class="font-weight-normal respuesta2">Nombre del equipo</label>
        <input type="text" class="form-control respuesta2 @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{old('nombre')}}" required autocomplete="nombre" autofocus>
          @error('nombre')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

      <div class="form-group">
        <label for="fecha" class="font-weight-normal respuesta2">Fecha del partido</label>
        <input class="form-control respuesta2 @error('fecha') is-invalid @enderror" id="fecha" type="date" name="fecha" value="{{old('fecha')}}">
          @error('fecha')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

     <div class="form-group">
      <label for="hora" class="font-weight-normal">Hora</label>
      <input class="form-control @error('hora') is-invalid @enderror" id="hora" type="time" name="hora" value="{{old('hora')}}">
        @error('hora')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

    <div class="form-group">
        <label for="provincia" class="">Provincia</label>
        <select class="form-control @error('provincia') is-invalid @enderror" id="provincia" name="provincia" value="{{old('provincia')}}">

        </select>
        @error('provincia')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>


    <div class="form-group">
          <label for="localidad" class="font-weight-normal">Localidad</label>
          <select class="form-control @error('localidad') is-invalid @enderror" id="municipio" name="localidad" value="{{old('localidad')}}">

          </select>
          @error('localidad')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>


    <div class="form-group">
          <label for="direccion" class="font-weight-normal">Dirección del partido</label>
          <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{old('direccion')}}" required autocomplete="direccion" autofocus>
            @error('direccion')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


    <div class="form-group">
          <label for="tipoDeFutbol" class="font-weight-normal">Tipo de futbol</label>
          <select class="form-control @error('tipoDeFutbol') is-invalid @enderror" id="tipoDeFutbol" name="tipoDeFutbol" value="{{old('tipoDeFutbol')}}">
            <option value="F5">F5</option>
            <option value="F7">F7</option>
            <option value="F8">F8</option>
            <option value="F11">F11</option>
          </select>
          @error('tipoDeFutbol')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

    <div class="form-group">
          <label for="cantidadJugadores" class="font-weight-normal">Cantidad jugadores</label>
          <select class="form-control @error('cantidadJugadores') is-invalid @enderror" id="cantidadJugadores" name="cantidadJugadores" value="{{old('cantidadJugadores')}}">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>

          </select>
          @error('cantidadJugadores')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

    <div class="form-group">
          <label for="aclaraciones" class="font-weight-normal">Aclaraciones</label>
          <textarea class="form-control @error('aclaraciones') is-invalid @enderror" name="aclaraciones" id="aclaraciones" rows="3" value="{{old('aclaraciones')}}">
          </textarea>
          @error('aclaraciones')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>

      </form>
    </div>

    </div>
  </div>
</div>
</main>
