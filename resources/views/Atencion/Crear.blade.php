
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear </div>

                    <div class="card-body">

                        <form method="post" action="/Derivacion">
                            @csrf
                            <input type="text" name="destino_der" placeholder="Ingrese destino"><br>
                            <input type="text" name="fecha_der" placeholder="Ingrese fecha"><br>
                            <input type="text" name="id_quejas" placeholder="Id queja"><br>
                            <input type="submit" name="submit" Value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
