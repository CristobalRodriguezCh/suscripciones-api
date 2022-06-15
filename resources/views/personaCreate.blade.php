<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personas</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body class="container">
    <h1>Agregar persona</h1>
    <hr>
    <a href="{{ route('personas.get') }}" class="btn btn-outline-info">Lista de personas</a>
    
    <form action="{{ route('persona.store') }}" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="Digite el nombre">

        <input type="text" name="apellido" placeholder="Digite el apellido">

        <input type="date" name="fecha_nac" placeholder="Seleccione la fecha">

        <input type="submit" value="Guardar" class="btn">
    </form>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>