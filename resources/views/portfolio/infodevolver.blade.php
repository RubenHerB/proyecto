@extends('layouts.app')

@section('content')
<div class="container bg-white">
    <div class="row justify-content-center">
        @include('partials.msg')
        <div class="col-md-10">
            Para devolver este pedido porfavor envielo a nuestro llagar a traves de Correos, cuando llegue y se compruebe el estado de los articulos se le devolvera el dinero.
        </div>
    </div>
</div>
@endsection