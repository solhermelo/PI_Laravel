@extends('layouts.main')

@section('content');
  <main>
        <form class="" action="/eliminarPartido" method="post">
          {{csrf_field()}}
          <input type="hidden" name="eliminarPartido" value="{{$equipos->user_id}}">
          <select class="form-control form-control-lg">
              <option>{{$equipos->user_id}}</option>
            </select>
            <input type="submit" name="" value="Borrar Partido">
            </select>
        </form>
  </main>
@endsection
