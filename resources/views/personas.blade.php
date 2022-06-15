@extends('layouts.app')
{{-- se especifica de donde viene el contenido --}}

@section('content')
{{-- y se dice en que parte se va a pintar --}}
    <h1>Personas</h1>
    
    <a href="{{ route('personas.create') }}" class="btn btn-outline-success">Agregar persona</a>
    
    <table class="table">
        <thead>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de nacimiento</th>
            <th>Suscripcion</th>
        </thead>
        <tbody>
            @forelse($personas as $persona)
                <tr>
                    <td>{{ $persona->id }}</td>
                    <td>{{ $persona->nombre }}</td>
                    <td>{{ $persona->apellido}}</td>
                    <td>{{ $persona->fecha_nac}}</td>
                    <td>{{ $persona->suscripcion->plan->nombre 
                    ?? 'Sin suscripcion' }}</td>
                    {{-- <td> <a href="{{ route(nombre del a ruta),parametro }}">Detalles</a> </td> --}}
                </tr>
            @empty
                <tr>
                    <td>No hay reguistros disponibles</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
