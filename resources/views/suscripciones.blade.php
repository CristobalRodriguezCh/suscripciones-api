@extends('layouts.app')

@section('content')
<h3>Suscripciones</h3>
<a class="btn btn-outline-success" href="{{ route('suscripciones.create') }}">Agregar Suscripcion</a>
<table class="table">
    <thead>
        <th>id</th>
        <th>fecha de inicio</th>
        <th>fecha de fin</th>
        <th>persona</th>
        <th>plan</th>
        <th>pago</th>
    </thead>
    <tbody>
        @forelse($suscripciones as $suscripcion)
            <tr>
                <td>{{ $suscripcion->id }}</td>
                <td>{{ $suscripcion->fecha_ini }}</td>
                <td>{{ $suscripcion->fecha_fin}}</td>
                <td>{{ $suscripcion->persona->nombre}}</td>
                <td>{{ $suscripcion->plan->nombre}}</td>
                <td>
                    @forelse($suscripcion->pagos as $pago)
                        {{$pago->valor}}
                    @empty
                        <p>Sin pagos</p>
                    @endforelse
                </td>
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