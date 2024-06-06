@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('partials.msg')
        <div class="col-md-10 align-self-center">
            <div class="row justify-content-center">
            @foreach($products as $item)
                <div class="col-8 col-xl-3 col-md-6 col-lg-5 col-sm-7 " style="margin-top:10px; margin-bottom:10px;">
                    <div class="card p-3">
                        <img src="{{URL('img/'.$item->imagen)}}" class="card-img-top" />
                        <div class="card-body mx-1">
                            <h2>{{ $item->name }}</h2>
                            <p>{{ $item->precio }} €</p>
                        </div>
                        <div class="card-footer">
                            <form action="{{route('add')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}" />
                                <input type="submit" name="btn" value="Añadir al carrito" class="btn btn-success w-100" />
</form>
                        </div>
                    </div>
                </div>
            @endforeach
</div>
        </div>
    </div>
</div>
@endsection
