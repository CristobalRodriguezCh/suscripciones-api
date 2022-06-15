@extends('layouts.app')
{{-- se especifica de donde viene el contenido --}}

@section('content')
    <h1>Crear suscripcion</h1>
    <hr>
    <a href="{{ route('suscripciones.get') }}" class="btn btn-outline-info">Lista de suscripciones</a>
    
    <form action="{{ route('suscripciones.store') }}" method="post">
        @csrf
        <input type="number" name="id_persona" placeholder="id_persona">

        <input type="number" name="id_plan" placeholder="id_plan">

        <input type="submit" value="Guardar" class="btn btn-success">
    </form>
@endsection