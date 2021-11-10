@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">VISUALIZAR</div>

                    <div class="card-body">
                        <table border="1" cellspacing="0">
                            <tr>
                                <th>Id</th>
                                <th>MONTO DE FACTURACION</th>
                                <th>FECHA DE PAGO</th>
                                <th>ID CLIENTES</th>

                            </tr>

                            @foreach ($facturacion as $facturacion)
                                <tr>
                                    <td>{{$facturacion->id}}</td>
                                    <td>{{$facturacion->monto_fac}}</td>
                                    <td>{{$facturacion->fecha_pago}}</td>
                                    <td>{{$facturacion->id_clientes}}</td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
