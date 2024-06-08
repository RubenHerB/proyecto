@extends('layouts.app')

@section('content')
@include('partials.msg')
<div class="container-xl text-light text-center my-5">
    <article>
    <h2>Visítanos y Descubre el Encanto de Nuestro Llagar</h2>
    <br>
    <div class="row justify-content-center">
      <div class=" col-lg-8 col-md-9">
      <div class="ratio ratio-16x9">
        <iframe class="rounded border border-light" src="https://www.google.com/maps/embed?pb=!4v1702545986388!6m8!1m7!1sRvqu6Bys1mm99KRu6dZSGg!2m2!1d43.47081604607956!2d-5.646133118724781!3f63.943961652217034!4f-0.9989430849227716!5f0.7820865974627469" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      </div>
    </div>
    <br>
    <div >
    Bienvenido al llagar El Sidrero, donde la tradición y la modernidad se encuentran para ofrecerte una experiencia única en el mundo de la sidra asturiana. Te invitamos a sumergirte en nuestro llagar, donde cada rincón cuenta la historia de generaciones dedicadas a perfeccionar el arte de la sidra.
    </div>
  </article>
  <hr>

  <article>
    <h2>¿Qué Puedes Esperar?</h2>
    <br>
    <div class="row justify-content-center">
      <div class=" col-lg-8 col-md-9">
    <img class="img-fluid rounded border border-light" src="{{URL('/img/degustacion.jpg')}}" class="imgvisita" alt="Escanciado desde barrica para una degustacion">
  </div>
    </div>  
    <br>
    <div>
    <ol class="list-group list-group-flush list-group-numbered bg-transparent text-light">
      <li class="list-group-item bg-transparent text-light"><b>Recorridos Guiados:</b> De la manzana a la botella, nuestro equipo te llevará a través de cada paso del proceso artesanal. Descubre los secretos detrás de nuestras recetas familiares y aprende cómo creamos cada botella con pasión y dedicación.</li>
      <li class="list-group-item bg-transparent text-light"><b>Degustaciones Personalizadas:</b> Sumérgete en una experiencia sensorial única probando nuestras diferentes variedades de sidra. Desde la clásica y refrescante hasta las innovadoras con sabores únicos, encontrarás algo que se adapte perfectamente a tu paladar.</li>
      <li class="list-group-item bg-transparent text-light"><b>Ambiente Familiar:</b> Nuestro llagar es más que un lugar de producción; es un hogar lleno de historias. Disfruta de un ambiente acogedor y familiar mientras exploras nuestro espacio y conoces a la familia detrás de cada botella.</li>
    </ol>
  </div>
  </article>
  <hr>
  <article>
    <h2>¿Cómo Llegar?</h2>
    <br>
    <div>
    Nos encontramos en Periurbano, en el corazón de Gijón. Si estás listo para vivir la auténtica experiencia asturiana de la sidra, solo tienes que seguir el aroma a manzanas frescas y la risa de aquellos que comparten momentos especiales en nuestro llagar.
    </div>
    <br>
    <div class="row justify-content-center">
      <div class=" col-lg-8 col-md-9">
    <div class="ratio ratio-16x9">
    <iframe class="rounded border border-light" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11582.021288265532!2d-5.6457918!3d43.4709237!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd36635f039676cf%3A0xacf9ae4b29ce3b42!2sRestaurante%20Casa%20Trabanco!5e0!3m2!1ses!2ses!4v1702545304746!5m2!1ses!2ses"    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  </div>
</div>
  </article>
  <hr>
  <article>
    <h2>Horarios de Visita:</h2>
      <div>
        <ul class="list-group-flush">
          <li class="list-group-item">Viernes y Sabado 12:00-13:00 y 16:00-15:00</li>
        </ul><br/>
        ¡Esperamos darte la bienvenida pronto en el llagar El Sidrero y compartir contigo la magia que reside en cada botella!
      </div>
  </article>
  <hr>
  <article>
    <h2>Reservar Visita:</h2>
    @guest
    <h3>Inicia usuario para reservar visitas</h3>
    @else
    <form method="post" action="{{route('add_vis')}}">

      @csrf
        Cantidad de perosonas (Maximo de 12 por grupo):
        <select name="cantidad" class="form-select" style="max-width:10vw;margin-right:auto; margin-left:auto;" >
  <option value="1" selected>1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
</select>
    </br>
Dia: </br>
<input name="fecha" type="text" id="datepicker" /> </br></br>

Horario:</br>
<select name="horario" class="form-select" style="max-width:10vw;margin-right:auto; margin-left:auto;" >
  <option value="1" selected>12:00-13:00</option>
  <option value="2">16:00-17:00</option>
  </select>
    </br>
  <input type="submit" name="btn" value="Reservar" class="btn btn-success " />
    </form>
    @endguest
  </article>
  <br>
  </div>
  @endsection