@extends('layouts.app')

@section('content')
<div class="row justify-content-evenly">
<div class="col-8  col-md-6 col-lg-5 col-sm-7" style="margin-top: 10px; margin-bottom:10px">
    <div class="card">
        <div class="card-header">
          Visitas
        </div>
        <div class="card-body">
          <h5 class="card-title">Proximas visitas</h5>
          <p class="card-text">Comprueba cuando son las proximas visitas y la cantidad de visitantes de cada una.</p>
          <a href="{{route('todasvisitas')}}" class="btn btn-primary">Ver visitas</a>
        </div>
      </div>
</div>
<div class="col-8  col-md-6 col-lg-5 col-sm-7" style="margin-top: 10px; margin-bottom:10px">
    <div class="card">
        <div class="card-header">
          Contacto
        </div>
        <div class="card-body">
          <h5 class="card-title">Contacto de clientes</h5>
          <p class="card-text">Recive dudas y solicitudes de contactos de clientes.</p>
          <a href="{{route('panelcontacto')}}" class="btn btn-primary">Contacto</a>
        </div>
      </div>
</div>
<div class="col-8  col-md-6 col-lg-5 col-sm-7" style="margin-top: 10px; margin-bottom:10px">
    <div class="card">
        <div class="card-header">
          Compras
        </div>
        <div class="card-body">
          <h5 class="card-title">Ve las ultimas compras realizadas</h5>
          <p class="card-text">Ve y administra las compras.</p>
          <a href="{{route('nuevos_pedidos')}}" class="btn btn-primary">Ir a compras</a>
        </div>
      </div>
</div>
<div class="col-8  col-md-6 col-lg-5 col-sm-7" style="margin-top: 10px; margin-bottom:10px">
  <div class="card">
      <div class="card-header">
        Devoluciones
      </div>
      <div class="card-body">
        <h5 class="card-title">Ve las ultimas devoluciones realizadas</h5>
        <p class="card-text">Ve y administra las devoluciones.</p>
        <a href="{{route('devoluciones_pedidos')}}" class="btn btn-primary">Ir a devoluciones</a>
      </div>
    </div>
</div>
</div>
@endsection