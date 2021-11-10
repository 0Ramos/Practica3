@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">CREAR</div>

                    <div class="card-body">
                        <form method="post" action="/Facturacion">
                            @csrf
                            <input type="text" name="id" placeholder="Id"><br>
                            <input type="text" name="monto_fac" placeholder="Ingresar monto"><br>
                            <input type="text" name="fecha_pago" placeholder="Ingresar fecha de pago"><br>
                            <input type="text" name="id_clientes" placeholder="Id Cliente"><br>
                            <input type="submit" name="submit" Value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

