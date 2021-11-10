@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">CREAR SERVICIO</div>

                    <div class="card-body">

                        <form method="post" action="/Servicio">
                            @csrf

                            <input type="text" name="nombres_ser" placeholder="Ingrese servicio"><br>
                            <input type="submit" name="submit" Value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
