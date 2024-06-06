<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Llagar el sidrero</title>

    <!--favicon-->
    <link rel="icon" type="image/x-icon" href="{{URL('img/favicon.png')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!--<link href="/assets/css/estilos.css" rel="stylesheet">-->
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

            <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" crossorigin="anonymous" referrerpolicy="no-referrer"/>
            <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js" crossorigin="anonymous" referrerpolicy="no-referrer" ></script>
            
            <script>
                var dateToday= new Date() ;
            $(function () {
                $("#datepicker").datepicker({
                    language: 'es',
                    minDate: dateToday,
                    beforeShowDay: function (d) {
                        var day = d.getDay();
                        return [day != 0 && day != 1 && day != 2 && day != 3 && day != 4];
                    },
                });
            });
            </script>

    <style>
        @font-face {
    font-family: 'Montserrat';
    src: url('/css/monstserrat/Montserrat-VariableFont_wght.ttf') format('truetype');   
  }
  @font-face {
    font-family: 'Lato';
    src: url('/css/lato/Lato-Regular.ttf') format('truetype');   
  }
  @font-face{
    font-family: 'Playfare';
    src: url('/css/playfair/PlayfairDisplay-VariableFont_wght.ttf') format('truetype');
  }

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

html{background: url("{{URL('/img/llagar.png')}}") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;background-color: black;}

  .titulo {font-size: 35px;font-family: 'Playfare', sans-serif;color: #4b4b4b;vertical-align: middle;}
.titulo span{color: black;font-family: 'Playfare', sans-serif;}

nav{
    background-color: #13E674;
}
.imagenico{
    max-width: 60px;
    height: auto;
}
.nav-link{
  padding: 35.5px 50px;
        font-family: 'Lato', sans-serif;
}

.nav-link:hover{background-color: #13C774;
  -webkit-animation: color_change 0.5s;
  -moz-animation: color_change 0.5s;
  -ms-animation: color_change 0.5s;
  -o-animation: color_change 0.5s;
  animation: color_change 0.5s;}

  @-webkit-keyframes color_change {
    from { background-color: #13E674; }
    to { background-color: #13C774; }
}
@-moz-keyframes color_change {
    from { background-color: #13E674; }
    to { background-color: #13C774; }
}
@-ms-keyframes color_change {
    from { background-color: #13E674; }
    to { background-color: #13C774; }
}
@-o-keyframes color_change {
    from { background-color: #13E674; }
    to { background-color: #13C774; }
}
@keyframes color_change {
    from { background-color: #13E674; }
    to { background-color: #13C774; }
}
.redes a img{height: auto;width: 45px ;border-radius: 1%;padding: 3px;}

    </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-transparent">
    <div id="app" class="bg-transparent">
    @include('partials.navbar')

        <main class="py-4 bg-transparent">
            @yield('content')
        </main>
        @include('partials.footer')
    </div>

</body>

</html>
