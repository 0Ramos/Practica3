@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">CREAR</div>

                    <div class="card-body">

                        <form method="post" action="/Cliente">
                                @csrf
                                <input type="text" name="codigo" placeholder="Cod"><br>
                                <input type="text" name="nombre_cli" placeholder="Ingrese nombre"><br>
                                <input type="text" name="direccion_cli" placeholder="Ingrese direccion"><br>
                                <input type="text" name="email_cli" placeholder="Ingrese email"><br>
                                <input type="text" name="calificacion_cli" placeholder="Ingrese calificacion"><br>
                                <input type="text" name="id_servicios" placeholder="Id servicios"><br>
                                <input type="submit" name="submit" Value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
