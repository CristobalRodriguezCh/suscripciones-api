@extends('layouts.app')
{{-- se especifica de donde viene el contenido --}}

@section('content')
    <h1>Agregar persona</h1>
    <hr>
    <a href="{{ route('personas.get') }}" class="btn btn-outline-info">Lista de personas</a>
    
    <div class=" row col-4 mt-3">
        <form action="{{ route('persona.store') }}" method="post">
            @csrf

            <input type="text" name="nombre" placeholder="Digite el nombre"
            class="form-control mb-3"
            >
            
            <input type="text" name="apellido" placeholder="Digite el apellido"
            class="form-control mb-3"
            >
        
            <input type="date" name="fecha_nac" placeholder="Seleccione la fecha"
            class="form-control mb-3"
            >

            <input type="submit" value="Guardar" class="btn btn-info">
        </form>
    </div>
@endsection