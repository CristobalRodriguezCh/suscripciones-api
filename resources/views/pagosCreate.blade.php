@extends('layouts.app')

@section('content')
<h1>Realizar pago</h1>
<hr>
<a href="{{ route('pagos.get') }}" class="btn btn-outline-info">Lista de pagos</a>

<div class=" row col-4 mt-3">

    <form action="{{ route('pagos.store') }}" method="post">
        @csrf

        <label for="valor" class="form-laber">Monto del pago</label>
        <input id="valor" type="number" name="valor" placeholder="Digite la cantidad"
        class="form-control mb-3"
        >

        <label for="id_suscripcion">Seleccione la suscripción ala que va a hacer el pago  </label>
        <select id="id_suscripcion" class="form-select mb-3" name="id_suscripcion">
            @foreach($suscripciones as $suscripcion)
                <option value="{{$suscripcion->id}}">{{$suscripcion->id}} - {{$suscripcion->persona->nombre}}</option>
            @endforeach
        </select>

        
        <input type="submit" value="Guardar" class="btn btn-info">
    </form>
</div>
@endsection