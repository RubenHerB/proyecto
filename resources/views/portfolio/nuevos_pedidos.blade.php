@extends('layouts.app')

@section('content')
@include('partials.msg')
@foreach ($pedidos as $pedido)
<div class="card bg-dark border-dark" style="max-width:80vw; margin-left:auto; margin-right:auto; margin-bottom:15px">
    <div class="card-body text-light">
        <h5 class="card-title ">
            <h2>Pedido {{ $pedido->id }}</h2>
        </h5>
    </div>

        <div class="card-body text-light border-light">

            <table class="table table-striped">
                <thead>
                    <th></th>
                    <th>NOMBRE</th>
                    <th>CANTIDAD</th>
                    <th>PRECIO UNITARIO</th>
                    <th>IMPORTE</th>
                </thead>
                <tbody>
                    @foreach (unserialize($pedido->carrito)->toArray() as $item)
                        <tr class="align-middle">
                            <td><img src="{{ URL('/img/' . $item['options']['image']) }}" style="width:50px"></td>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['qty'] }}</td>
                            <td>{{ number_format($item['price'], 2) }}</td>
                            <td>{{ number_format($item['price'] * $item['qty'], 2) }}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop{{ $pedido->id }}">
                Confirmar envio
            </button>

            <div class="modal fade" id="staticBackdrop{{ $pedido->id }}" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirmar envio</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h2>¿Confirmar envio?</h2>
                            <h3 style="color:red">¡Cuidado! Una vez enviado no se podrá recuperar</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <form method="post" action="{{ route('enviar') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $pedido->id }}" />
                                <input type="submit" name="btn" value="Confirmar" class="btn btn-warning" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endforeach
@endsection
   