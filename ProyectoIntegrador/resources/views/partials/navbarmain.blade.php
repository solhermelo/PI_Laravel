
<div id="app" >
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light fixed-top p-1">
          <a class="navbar-brand" href="/home">
              <img src="imagenes/logo-quienjuega.png" width="60" height="60" alt="logo" class="ml-2">
          </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <!-- Right Side Of Navbar -->
                <div class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <a class="nav-link nav-item active boton" href="{{ route('login') }}">{{ __('Iniciar Sesion') }} <span class="sr-only">(current)</span></a>
                        @if (Route::has('register'))
                        <button type="button" name="button" class="btn btn-danger ml-4 mr-4 pl-2 pr4">
                                <a class="boton" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                            </button>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

</div>
