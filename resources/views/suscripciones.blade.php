@extends('layouts.app')

@section('content')
<h3>Suscripciones</h3>
<a href="{{ route('suscripciones.create') }}">Agregar Suscripcion</a>
<table class="table">
    <thead>
        <th>fecha de inicio</th>
        <th>fecha de fin</th>
        <th>persona</th>
        <th>plan</th>
    </thead>
    <tbody>
        @forelse($suscripciones as $suscripcion)
            <tr>
                <td>{{ $suscripcion->fecha_ini }}</td>
                <td>{{ $suscripcion->fecha_fin}}</td>
                <td>{{ $suscripcion->persona->nombre}}</td>
                <td>{{ $suscripcion->plan->nombre}}</td>
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