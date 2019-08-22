@extends('layouts.main')

@section('content')
  <main>
    <div class="container3">
    <form class="formBuscoJugador">
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre del Jugador</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre equipo">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Fecha disponible</label>
    <input class="form-control" id="exampleFormControlInput1" type="date" name="fecha" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Ubicación</label>
    <select class="form-control" id="exampleFormControlSelect1" name="ubicacion">
      <optgroup label="Caba">
        CABA
      </optgroup>
        <option value="agro">Agronomía</option>
        <option value="almagro">Almagro</option>
        <option value="balva">Balvanera</option>
        <option value="barracas">Barracas</option>
        <option value="belgrano">Belgrano</option>
        <option value="boedo">Boedo</option>
        <option value="caballito">Caballito</option>
        <option value="chacarita">Chacarita</option>
        <option value="coghlan">Coghlan</option>
        <option value="colegiales">Colegiales</option>
        <option value="constitucion">Constitución</option>
        <option value="flores">Flores</option>
        <option value="floresta">Floresta</option>
        <option value="laboca">La Boca</option>
        <option value="lapaternal">La Paternal</option>
        <option value="liniers">Liniers</option>
        <option value="mataderos">Mataderos</option>
        <option value="montecastro">Monte Castro</option>
        <option value="monserrat">Monserrat</option>
        <option value="nuevapompeya">Nueva Pompeya</option>
        <option value="nunez">Nuñez</option>
        <option value="parqueavellaneda">Parque Avellaneda</option>
        <option value="palermo">Palermo</option>
        <option value="parquechacabuco">Parque Chacabuco</option>
        <option value="parquechas">Parque Chas</option>
        <option value="parquepatricios">Parque Patricios</option>
        <option value="puertomadero">Puerto Madero</option>
        <option value="recoleta">Recoleta</option>
        <option value="retiro">Retiro</option>
        <option value="saavedra">Saavedra</option>
        <option value="sancristobal">San Cristóbal</option>
        <option value="sannicolas">San Nicolás</option>
        <option value="santelmo">San Telmo</option>
        <option value="villacrespo">Villa Crespo</option>
        <option value="villaluro">Villa Luro</option>
        <option value="villareal">Villa Real</option>
        <option value="velezsarsfield">Vélez Sarsfield</option>
        <option value="versalles">Versalles</option>
        <option value="villadelparque">Villa del Parque</option>
        <option value="villadevoto">Villa Devoto</option>
        <option value="villageneralmitre">Villa General Mitre</option>
        <option value="villalugano">Villa Lugano</option>
        <option value="villaortuzar">Villa Ortúzar</option>
        <option value="villa pueyrredon">Villa Pueyrredón</option>
        <option value="villariachuelo">Villa Riachuelo</option>
        <option value="villasantarita">Villa Santa Rita</option>
        <option value="villasoldati">Villa Soldati</option>
        <option value="villaurquiza">Villa Urquiza</option>
      <optgroup label="Provincia">
        Provincia
      </optgroup>
      <option value="pilar">Pilar</option>
      <option value="vtelopez">Vicente López</option>
      <option value="escobar">Escobar</option>
      <option value="tigre">Tigre</option>
    </select>
  </div>


  <div class="form-group">
    <label for="cantidad jugadores">Posición</label>
    <select multiple class="form-control" id="exampleFormControlSelect2" name="cantidad jugadores">
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
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>

    </div>
  </main>
