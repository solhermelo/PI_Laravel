@extends('layouts.main')

@section('content')
  <main>
    <div class="container4">
      <table class="table table-hover tabla-busco-equipo">
        <thead>
          <tr>
            <th scope="col"></th>
            <th scope="col">Nombre Equipo</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Ubicación</th>
            <th scope="col">Tipo de fútbol</th>
            <th scope="col">Cantidad de jugadores</th>
            <th scope="col">Aclaraciones</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($ofertas as $key => $oferta)
              <tr>
              <th scope="row"></th>
                <td>{{$oferta->nombreEquipo}}</td>
                <td>{{$oferta->fecha}}</td>
                <td>{{$oferta->hora}}</td>
                <td>{{$oferta->ubicacion}}</td>
                <td>{{$oferta->tipoDeFutbol}}</td>
                <td>{{$oferta->cantidadJugadores}}</td>
                <td>{{$oferta->aclaraciones}}</td>
              </tr>
            @empty
              No hay ofertas
            @endforelse

        </tbody>
      </table>
    </div>
</main>
@endsection
