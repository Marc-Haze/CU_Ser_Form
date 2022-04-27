{{-- @extends('dataPedido.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Generar Pedido</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('welcome.blade') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Algo pasó y fue chungo.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<!DOCTYPE html>
<html>
    <body>
        <h1>Formulario:</h1>
        {{ csrf_field() }}
        <form method="POST" action="/pruebas">
            Creación:
            Sí<input type="radio" name="dato1" value="si">
            No<input type="radio" name="dato1" value="no">
            <br>
            <br>
            <h3>Trabajos:</h3>
            Boceto<input type="checkbox" name="dato2" value="boceto">
            {{-- Bordado<input type="checkbox" name="dato2[]" value="bordado" >
            Serigrafía<input type="checkbox" name="dato2[]" value="serigrafia">
            Transfer<input type="checkbox" name="dato2[]" value="transfer" >
            Impresión Digital<input type="checkbox" name="dato2[]" value="impresion_digital"> --}}
            <br>
            <br>
            <h3>Datos de Tarifa:</h3>
            <br>
            Referencia Estampa:
            <input type="text" name="dato3">
            <br>
            <br>
            <input type="submit" name="submit" value="Enviar">
        </form>
    </body>
</html>
{{-- @endsection   --}}