@extends('layouts.main')
@section('content')
  <main>
    <div class="container4 row">
      <table class="table table-hover tabla-busco-equipo">
        <thead>
    
          <tr class="thead-dark">
            <th scope="col" class="text-center w-10"></th>
            <th scope="col" class="text-center w-10">Equipo</th>
            <th scope="col" class="text-center w-10">Fecha</th>
            <th scope="col" class="text-center w-10">Hora</th>
            <th scope="col" class="text-center w-10">Provincia</th>
            <th scope="col" class="text-center w-10">Localidad</th>
            <th scope="col" class="text-center w-10">Direccion</th>
            <th scope="col" class="text-center w-10">Fútbol</th>
            <th scope="col" class="text-center w-10">Jugadores</th>
            <th scope="col" class="text-center w-10">Aclaraciones</th>
            <th scope="col" class="text-center w-10">Quiero jugar</th>
          </tr>
        </thead>

        <tbody>
            @forelse ($equipos as $key => $equipo)
              <tr>
              <th scope="row"></th>
                <td class="text-center pt-4 px-4">{{$equipo->nombre}}</td>
                <td class="text-center pt-4">{{$equipo->fecha}}</td>
                <td class="text-center pt-4">{{$equipo->hora}}</td>
                <td class="text-center pt-4">{{$equipo->provincia}}</td>
                <td class="text-center pt-4">{{$equipo->localidad}}</td>
                <td class="text-center pt-4">{{$equipo->direccion}}</td>
                <td class="text-center pt-4">{{$equipo->tipoDeFutbol}}</td>
                <td class="text-center pt-4">{{$equipo->cantidadJugadores}}</td>
                <td class="text-center pt-4">{{$equipo->aclaraciones}}</td>
                <td class="text-center pt-4">
                <button type="button" class="btn btn-danger">
                  <a href="/exitoBuscoEquipo/{{auth()->user()->id}}" class="text-white">Jugar</a></button>
              </td>
              </tr>
            @empty
              No hay partidos.
            @endforelse

        </tbody>
      </table>
      </div>
      {{$equipos->links()}}
    </body>
  @endsection
