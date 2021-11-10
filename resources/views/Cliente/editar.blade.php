@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">CREAR</div>

                    <div class="card-body">

                        <form method="post" action="/Cliente/{{$cliente['id']}}">
                            @csrf
                            <input type="text" name="codigo" value="{{$cliente['codigo']}}"><br>
                            <input type="text" name="nombre_cli" value="{{$cliente['nombres_cli']}}"><br>
                            <input type="text" name="direccion_cli" value="{{$cliente['direccion_cli']}}"><br>
                            <input type="text" name="email_cli" value="{{$cliente['email_cli']}}"><br>
                            <input type="text" name="calificacion_cli" value="{{$cliente['calificacion_cli']}}"><br>
                            <input type="text" name="id_servicios" value="{{$cliente['id_servicios']}}"><br>
                            <input type="submit" name="submit" Value="Guardar">
                            @method("PUT")
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

