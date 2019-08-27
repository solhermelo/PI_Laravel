@extends('layouts.main')
@section('title', 'Busco Jugador')

@section('content')
<main>
  <div class="container3">
    <span class="badge badge-dark subtitulo-buscojugador">Completá el formulario para encontrar el jugador que te falta</span>
    <form class="formBuscoJugador" action="/buscoJugador" method="post">
      {{csrf_field()}}
  <div class="form-group">
    <label for="nombreEquipo">Nombre del equipo</label>
    <input type="text" class="form-control" id="nombreEquipo" name="nombreEquipo">
  </div>

  <div class="form-group">
    <label for="fecha">Fecha del partido</label>
    <input class="form-control" id="fecha" type="date" name="fecha" value="">
  </div>

  <div class="form-group">
    <label for="hora">Hora</label>
    <input class="form-control" id="hora" type="time" name="hora" value="">
  </div>

  <div class="form-group">
    <label for="ubicacion">Ubicación</label>
    <select class="form-control" id="ubicacion" name="ubicacion">
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
  </div>

  <div class="form-group">
    <label for="tipoDeFutbol">Tipo de futbol</label>
    <select multiple class="form-control" id="tipoDeFutbol" name="tipoDeFutbol">
      <option value="F5">F5</option>
      <option value="F7">F7</option>
      <option value="F8">F8</option>
      <option value="F11">F11</option>
    </select>
  </div>

  <div class="form-group">
    <label for="cantidadJugadores">Cantidad jugadores</label>
    <select multiple class="form-control" id="cantidadJugadores" name="cantidadJugadores">
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
  </div>

  <div class="form-group">
    <label for="aclaraciones">Aclaraciones</label>
    <textarea class="form-control" name= "aclaraciones" id="aclaraciones" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-danger">Enviar</button>
</form>

    </div>
  </main>
