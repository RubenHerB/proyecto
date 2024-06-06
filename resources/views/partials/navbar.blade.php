<nav class="navbar navbar-expand-lg">
  <div class="container-fluid ">
    <a class="navbar-brand titulo icon-link" href="index.html">
      <div class="row justify-content-start align-items-center">
        <div class="col col-md-2"><img src="{{URL('img/botella.png')}}" alt="Logo" class="img-fluid imagenico"> </div>
        <div class="col col-md-10 text-wrap text-md-nowrap titulo">Llagar <span>El Sidrero</span> 1952</div>
      </div>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{URL('/')}}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL('/visitas')}}">Visitanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL('/productos')}}">Nuestros productos</a>
        </li>



        <li class="nav-item">
          <a class="nav-link" href="{{ route('checkout') }}">Carrito <span
              class="badge bg-danger">{{Cart::count()}}</span></a>
        </li>
        <!-- Authentication Links -->
        @guest
      @if (Route::has('login'))
      <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
      </li>
    @endif
    @else
    <li class="nav-item dropdown">
      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">
      {{ Auth::user()->name }}
      </a>
      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
      @if (Route::has('historial'))
      <a class="dropdown-item" href="{{ route('historial') }}">Historial de compras</a>
    @endif
      @if (Route::has('misvisitas'))
      <a class="dropdown-item" href="{{ route('misvisitas') }}">Mis visitas</a>
    @endif
      @if (Auth::user()->role == 0)
      @if (Route::has('contacto'))
      <a class="dropdown-item" href="{{ route('contacto') }}">Contacto con la empresa</a>
    @endif
    @else
      @if (Route::has('panel'))
      <a class="dropdown-item" href="{{ route('panel') }}">Panel de trabajador</a>
    @endif
    @endif




      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
        {{ __('Cerrar sesion') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
      </div>
    </li>
  @endguest
      </ul>
    </div>
  </div>
</nav>