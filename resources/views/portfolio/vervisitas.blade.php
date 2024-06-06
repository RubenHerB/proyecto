@extends('layouts.app')

@section('content')
    @include('partials.msg')

    @foreach ($agrupadas as $fecha => $horarios)
        <div class="card bg-dark border-dark" style="max-width:80vw; margin-left:auto; margin-right:auto; margin-bottom:15px">
            <div class="card-body text-light">
                <h5 class="card-title ">
                    <h2>Dia de la visita: {{ $fecha }}</h2>
                </h5>
            </div>

            @foreach ($horarios as $horario => $visitas)
                <div class="card-header text-light border-light">
                    Horario:
                    @if ($horario == 1)
                        12:00-13:00
                    @else
                        16:00-17:00
                    @endif
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($visitas as $visita)
                        @if ($visita->status == 0)
                            <li class="list-group-item  text-bg-success ">Tamaño del grupo: {{ $visita->cantidad_personas }}
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$visita->id}}">
                                    Cancelar visita
                                  </button>
                            </li>
                            <div class="modal fade" id="staticBackdrop{{$visita->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Cancelar visita</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <h2>¿Cancelar visita de {{$visita->cantidad_personas}} en la fecha {{$visita->fecha}}?</h2>
                                      <h3 style="color:red">¡Cuidado! La reserva no se podra recuperar</h3>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <form method="post" action="{{ route('cancelvisita') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $visita->id }}" />
                                         <input type="submit" name="btn" value="Confirmar"
                                            class="btn btn-warning" />
                                    </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        @else
                        <li class="list-group-item  text-bg-warning "><h2>Cancelada</h2>Tamaño del grupo: {{ $visita->cantidad_personas }}
                        </li>
                        @endif
                    @endforeach
                </ul>
            @endforeach

        </div>
    @endforeach
    .
@endsection
