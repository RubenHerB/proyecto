@extends('layouts.app')

@section('content')
    @include('partials.msg')

    @foreach ($contactos as $contacto)
        <div class="card bg-dark border-dark" style="max-width:80vw; margin-left:auto; margin-right:auto; margin-bottom:15px">
            <div class="card-body text-light">
                <h5 class="card-title ">
                    <h2>Solicitud de contacto</h2>
                </h5>
            </div>
            <div class="card-header text-light border-light">
                Solicitante: {{ $contacto->cnombre }} Telefono: {{ $contacto->telefono }} Email: {{ $contacto->email }}
            </div>
            <div class="card-body text-light border-light">
                Mensaje: {{ $contacto->mensaje }}
                <br>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$contacto->id}}">
                    Marcar como resuelto
                  </button>
            <div class="modal fade" id="staticBackdrop{{$contacto->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Marcar como resuelto</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <h2>Marchar la solicitud de {{$contacto->cnombre}} Como completa?</h2>
                      <h3 style="color:red">¡Cuidado! El mensaje no se podra recuperar</h3>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <form method="post" action="{{ route('marcarcontacto') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $contacto->id }}" />
                         <input type="submit" name="btn" value="Confirmar"
                            class="btn btn-warning" />
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    @endforeach
@endsection
