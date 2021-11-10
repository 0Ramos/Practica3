@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">CREAR</div>

                    <div class="card-body">
                        <form method="post" action="/Promocion">
                            @csrf

                            <input type="text" name="decripcion_pro" placeholder="Ingresar descripcion"><br>
                            <input type="text" name="fecha_inicio" placeholder="Ingresar fecha "><br>
                            <input type="text" name="fecha_fin" placeholder="Ingresar fecha de fin"><br>
                            <input type="text" name="id_promocion" placeholder="Id Cliente"><br>
                            <input type="submit" name="submit" Value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

