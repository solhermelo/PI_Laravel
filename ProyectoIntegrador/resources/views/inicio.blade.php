@extends('layouts.master')

@section('content')
  <main>
    <!--comienzo card -->
      <article class="container mt-5 pt-5">
          <div class="card-deck">
              <div class="card">
                  <img src="IMAGENES/jugador.jpg" class="card-img-top" alt="busco jugador">
                  <div class="card-body">
                      <h3 class="card-title">Busco Jugador</h3>
                      <p class="card-text">¿Te falta un/a jugador/a para tu equipo? Encontralo.</p>
                      <a class="btn btn-danger" href="buscoJugador" role="button">Clickea acá</a>
                  </div>
              </div>
              <div class="card">
                  <img src="IMAGENES/buscar_equipo2.jpg" class="card-img-top" alt="buscar equipo">
                  <div class="card-body">
                      <h3 class="card-title">Busco Equipo</h3>
                      <p class="card-text">¿Querés jugar y no tenes equipo? Encontrá con quien jugar. </p>
                      <a class="btn btn-danger" href="buscoEquipo" role="button">Clickea acá</a>
                  </div>
              </div>
              <div class="card">
                  <img src="IMAGENES/armar_partido.jpg" class="card-img-top" alt="busco equipo">
                  <div class="card-body">
                      <h3 class="card-title">Armar Partido</h3>
                      <p class="card-text">Crea un partido para el dia que quieras y encontrá a todos los jugadores.</p>
                      <a class="btn btn-danger" href="#" role="button">Clickea acá</a>
                  </div>
              </div>
          </div>
          <br>
          <br>
        </article>
      <!--fin card -->

  </section>
  </main>
@endsection
