@extends('layouts.app')
{{-- se especifica de donde viene el contenido --}}

@section('content')
{{-- y se dice en que parte se va a pintar --}}
    <h1>Pagos</h1>
    
    <a href="{{ route('pagos.create') }}" class="btn btn-outline-success">Generar pago</a>
    
    <table class="table">
        <thead>
            <th>id</th>
            <th>fecha</th>
            <th>Adjunto</th>
            <th>id suscripcion</th>
        </thead>
        <tbody>
            @forelse($pagos as $pago)
                <tr>
                    <td>{{ $pago->id }}</td>
                    <td>{{ $pago->fecha }}</td>
                    <td>{{ $pago->adjunto}}</td>
                    <td>{{ $pago->id_suscripcion}}</td>
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