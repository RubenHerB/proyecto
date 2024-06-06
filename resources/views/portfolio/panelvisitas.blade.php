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
                                <span style="margin-left:30px">A nombre de: {{ $visita->name }}</span>
                            </li>
                        @else
                            <li class="list-group-item  text-bg-warning ">
                                <h2>Cancelada</h2>Tamaño del grupo: {{ $visita->cantidad_personas }}
                                <span style="margin-left:30px">A nombre de: {{ $visita->name }}</span>
                            </li>
                        @endif
                    @endforeach
                </ul>
            @endforeach

        </div>
    @endforeach
    .
@endsection
