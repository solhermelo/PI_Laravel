
@extends('layouts.app')


@section('content')
<div class="">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  </div>
              </div>
          </div>
      </div>
      </div>
            <div class="card cartalogin">
              <div class="card-header">
                Has iniciado sesion.
              </div>
              <div class="card-body">
                <h4 class="card-title titulologin">Bienvenido!</h5>
                <p class="card-text">Ahora ya podes armar un equipo o buscar un partido para jugar! </p>
                <a href="/" class="btn btn-danger">Volver al incio</a>
              </div>
            </div>


@endsection
