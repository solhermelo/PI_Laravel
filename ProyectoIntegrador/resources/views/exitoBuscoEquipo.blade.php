@extends('layouts.main')

@section('content')
  <main>
    <div class="containerExito">
      <div class="card mb-3 alert cardExito" style="max-width: 700px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="/imagenes/arquero2.jpg" class="card-img img-exito" alt="jugador con pelota">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title d-flex justify-content-center">Felicitaciones!</h5>
              <p class="card-text d-flex justify-content-center text-center">Te uniste al equipo exitosamente. A la brevedad te llegará un mail con los detalles del partido.
              Podrás comunicarte con el capitán en cualquier momento. <br>
              Suerte en tu partido!
            </p>
              <p class="card-text text-center"><small class="text-muted">
              </small>
                <a class="text-dark" href="/">
                <i class="fas fa-home textoexito"><br>Inicio</i>
                </a>
            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
