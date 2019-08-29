@extends('layouts.main')

@section('content')
<main>
  <div class="container3">
    <span class="badge badge-dark subtitulo-buscojugador">Completá el formulario para encontrar el jugador que te falta</span>

    <form class="formBuscoJugador" action="/buscoJugador" method="post">
      {{csrf_field()}}

      <div class="form-group">
        <label for="nombre">Nombre del equipo</label>
        <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{old('nombre')}}" required autocomplete="nombre" autofocus>
          @error('nombre')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

      <div class="form-group">
        <label for="fecha">Fecha del partido</label>
        <input class="form-control @error('fecha') is-invalid @enderror" id="fecha" type="date" name="fecha" value="{{old('fecha')}}">
          @error('fecha')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
     </div>

     <div class="form-group">
      <label for="hora">Hora</label>
      <input class="form-control @error('hora') is-invalid @enderror" id="hora" type="time" name="hora" value="{{old('hora')}}">
        @error('hora')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
      <label for="provincia">Provincia</label>
      <select class="form-control @error('provincia') is-invalid @enderror" id="provincia" name="provincia" value="{{old('provincia')}}">
        <optgroup label="Caba">
          CABA
        </optgroup>
          <option value="Agronomía">Agronomía</option>
          <option value="Almagro">Almagro</option>
          <option value="Balvanera">Balvanera</option>
          <option value="Barracas">Barracas</option>
          <option value="Belgrano">Belgrano</option>
          <option value="Boedo">Boedo</option>
          <option value="Caballito">Caballito</option>
          <option value="Chacarita">Chacarita</option>
          <option value="Coghlan">Coghlan</option>
          <option value="Colegiales">Colegiales</option>
          <option value="Constitucion">Constitución</option>
          <option value="Flores">Flores</option>
          <option value="Floresta">Floresta</option>
          <option value="La Boca">La Boca</option>
          <option value="La Paternal">La Paternal</option>
          <option value="Liniers">Liniers</option>
          <option value="Mataderos">Mataderos</option>
          <option value="Montecastro">Monte Castro</option>
          <option value="Monserrat">Monserrat</option>
          <option value="Nueva Pompeya">Nueva Pompeya</option>
          <option value="Nuñez">Nuñez</option>
          <option value="Parque Avellaneda">Parque Avellaneda</option>
          <option value="Palermo">Palermo</option>
          <option value="Parque Chacabuco">Parque Chacabuco</option>
          <option value="Parque Chas">Parque Chas</option>
          <option value="Parque Patricios">Parque Patricios</option>
          <option value="Puerto Madero">Puerto Madero</option>
          <option value="Recoleta">Recoleta</option>
          <option value="Retiro">Retiro</option>
          <option value="Saavedra">Saavedra</option>
          <option value="San Cristobal">San Cristóbal</option>
          <option value="San Nicolas">San Nicolás</option>
          <option value="San Telmo">San Telmo</option>
          <option value="Villa Crespo">Villa Crespo</option>
          <option value="Villa Luro">Villa Luro</option>
          <option value="Villa Real">Villa Real</option>
          <option value="Velez Sarsfield">Vélez Sarsfield</option>
          <option value="Versalles">Versalles</option>
          <option value="Villa Del Parque">Villa del Parque</option>
          <option value="Villa Devoto">Villa Devoto</option>
          <option value="Villa General Mitre">Villa General Mitre</option>
          <option value="Villa Lugano">Villa Lugano</option>
          <option value="Villa Ortúzar">Villa Ortúzar</option>
          <option value="Villa Pueyrredon">Villa Pueyrredón</option>
          <option value="Villa Riachuelo">Villa Riachuelo</option>
          <option value="Villa Santa Rita">Villa Santa Rita</option>
          <option value="Villa Soldati">Villa Soldati</option>
          <option value="Villa Urquiza">Villa Urquiza</option>
        <optgroup label="Provincia">
          Provincia
        </optgroup>
        <option value="Pilar">Pilar</option>
        <option value="Vicente López">Vicente López</option>
        <option value="Escobar">Escobar</option>
        <option value="Tigre">Tigre</option>
      </select>
      @error('provincia')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="form-group">
      <label for="localidad">Localidad</label>
      <select class="form-control @error('localidad') is-invalid @enderror" id="localidad" name="localidad" value="{{old('localidad')}}">
        <optgroup label="Provincia">
          Provincia
        </optgroup>
        <option value="Pilar">Pilar</option>
        <option value="Vicente López">Vicente López</option>
        <option value="Escobar">Escobar</option>
        <option value="Tigre">Tigre</option>
      @error('localidad')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="form-group">
      <label for="direccion">Dirección partido</label>
      <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{old('direccion')}}" required autocomplete="direccion" autofocus>
        @error('direccion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
      <label for="tipoDeFutbol">Tipo de futbol</label>
      <select multiple class="form-control @error('tipoDeFutbol') is-invalid @enderror" id="tipoDeFutbol" name="tipoDeFutbol" value="{{old('tipoDeFutbol')}}">
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
      <label for="cantidadJugadores">Cantidad jugadores</label>
      <select multiple class="form-control @error('cantidadJugadores') is-invalid @enderror" id="cantidadJugadores" name="cantidadJugadores" value="{{old('cantidadJugadores')}}">
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
      <label for="aclaraciones">Aclaraciones</label>
      <textarea class="form-control @error('aclaraciones') is-invalid @enderror" name="aclaraciones" id="aclaraciones" rows="3" value="{{old('aclaraciones')}}">
      </textarea>
      @error('aclaraciones')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

  <button type="submit" class="btn btn-danger">Enviar</button>
</form>

    </div>
  </main>
