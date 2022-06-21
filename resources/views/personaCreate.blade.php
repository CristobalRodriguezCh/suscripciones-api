@extends('layouts.app')
{{-- se especifica de donde viene el contenido --}}

@section('content')
    <h1>Agregar persona</h1>
    <hr>
    <a href="{{ route('personas.get') }}" class="btn btn-outline-info">Lista de personas</a>

    <div class=" row  col-sm-6 mt-3">
        <form action="{{ route('persona.store') }}" method="post">
            @csrf

            @error('nombre')
                <label for="nombre">{{$message}}</label>
            @enderror
            <input type="text" name="nombre" placeholder="Digite el nombre"
            class="form-control mb-3" id="nombre" value="{{old('nombre')}}"
            >
            
          
            @error('apellido')
                <label for="apellido">{{$message}}</label>
            @enderror
            <input type="text" name="apellido" placeholder="Digite el apellido"
            class="form-control mb-3" id="apellido" value="{{old('apellido')}}"
            >
            
            @error('fecha_nac')
                <label for="fecha_nac">{{$message}}</label>
            @enderror
            <input type="date" name="fecha_nac" placeholder="Seleccione la fecha"
            class="form-control mb-3" id="fecha_nac" value="{{old('fecha_nac')}}"
            >

            <select class="form-select mb-3" name="plan">
                @foreach($planes as $plan)
                    <option value="{{$plan}}">{{$plan->nombre}}</option>
                @endforeach
            </select>

            <input type="submit" value="Guardar" class="btn btn-info">
        </form>
    </div>
@endsection