<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personas</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body >
    
    @include('partials.nav')
    <div class="container">
        @yield('content')
        <!-- espacio en el cual se va apintar 
            las vistas cuendo las invoquemos
        -->
    </div>

    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>