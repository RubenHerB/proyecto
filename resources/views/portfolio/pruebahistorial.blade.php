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
                <div class="card-header text-light border-light">
                    Estado: En preparacion
                </div>
                <div class="card-body text-light border-light">

                    <table class="table table-striped">
                        <thead>
                            <th></th>
                            <th>NOMBRE</th>
                            <th>CANTIDAD</th>
                            <th>PRECIO UNITARIO</th>
                            <th>IMPORTE</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                $carrito=unserialize($pedido->carrito)->toArray()
                            ?>

                            @foreach ($carrito as $item)
                                <tr class="align-middle">
                                 
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['qty'] }}</td>
                                    <td>{{ number_format($item['price'], 2) }}</td>
                                    <td>{{ number_format($item['price'] * $item['qty'], 2) }}</td>
                                    
                                </tr>
                            @endforeach
                            <tr class="fw-bolder">
                                <td colspan="5"></td>
                                <td class="text-end">Total</td>
                                <td class="text-end">{{Cart::subtotal()}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop{{ $pedido->id }}">
                        Cancelar pedido
                    </button>


                    <div class="modal fade" id="staticBackdrop{{ $pedido->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Cancelar el pedido</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h2>¿Cancelar pedido?</h2>
                                    <h3 style="color:red">¡Cuidado! Una vez cancelado no se podrá recuperar</h3>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @endforeach
        @endsection
