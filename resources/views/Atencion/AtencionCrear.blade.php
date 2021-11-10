@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Atencion</div>

                    <div class="card-body">

                        <form method="post" action="/Atencion">
                            @csrf
                            <input type="text" name="descripcion_ate" placeholder="Ingrese descripcion "><br>
                            <input type="text" name="estado_ate" placeholder="Ingrese estado"><br>
                            <input type="text" name="fecha_atencion" placeholder="Ingrese fecha de atencion"><br>
                            <input type="text" name="id_derivacion" placeholder="Id derivacion"><br>
                            <input type="submit" name="submit" Value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
