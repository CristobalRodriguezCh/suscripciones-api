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
    <h1>Personas</h1>
    
    <a href="{{ route('personas.create') }}" class="btn btn-outline-success">Agregar persona</a>
    
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de nacimiento</th>
        </thead>
        <tbody>
            @forelse($personas as $persona)
                <tr>
                    <td>{{ $persona->nombre }}</td>
                    <td>{{ $persona->apellido}}</td>
                    <td>{{ $persona->fecha_nac}}</td>
                    {{-- <td> <a href="{{ route(nombre del a ruta),parametro }}">Detalles</a> </td> --}}
                </tr>
            @empty
                <tr>
                    <td>No hay reguistros disponibles</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>