@extends('layouts.master')

@section('content')
  <main>
    <!--comienzo card -->
      <article class="container mt-5 pt-5">
          <div class="card-deck">
              <div class="card border">
                  <img src="IMAGENES/jugador.jpg" class="card-img-top" alt="busco jugador">
                  <div class="card-body">
                      <h3 class="card-title text-center">Busco Jugador</h3>
                      <p class="card-text text-center">¿Te falta un/a jugador/a para tu equipo? Encontralo.</p>
                      <div class="d-flex justify-content-center">
                      <a class="btn btn-danger w-25 mt-2" href="buscoJugador" role="button">
                        <i class="fas fa-angle-up"></i>
                      </a>
                    </div>
                  </div>
              </div>
              <div class="card border">
                  <img src="IMAGENES/buscar_equipo2.jpg" class="card-img-top" alt="buscar equipo">
                  <div class="card-body">
                      <h3 class="card-title text-center">Busco Equipo</h3>
                      <p class="card-text text-center">¿Querés jugar y no tenes equipo? Encontrá con quien jugar. </p>
                      <div class="d-flex justify-content-center">
                      <a class="btn btn-danger w-25 mt-2" href="buscoEquipo" role="button">
                          <i class="fas fa-angle-up"></i>
                      </a>
                    </div>
                  </div>
              </div>
              <div class="card border">
                  <img src="IMAGENES/armar_partido.jpg" class="card-img-top" alt="busco equipo">
                  <div class="card-body">
                      <h3 class="card-title text-center">Armar Partido</h3>
                      <p class="card-text text-center">Crea un partido para el dia que quieras y encontrá a todos los jugadores.</p>
                      <div class="d-flex justify-content-center">
                      <a class="btn btn-danger w-25 mt-2" href="#" role="button">
                          <i class="fas fa-angle-up"></i>
                      </a>
                      </div>
                  </div>
              </div>
          </div>
          <br>
          <br>
        </article>
      <!--fin card -->
  </main>
@endsection
