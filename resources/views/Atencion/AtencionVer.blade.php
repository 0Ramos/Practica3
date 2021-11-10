@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ver Atencion</div>

                    <div class="card-body">

                        <table border="1" cellspacing="0">

                            <tr>
                                <th>Id</th>
                                <th>DESCRIPCION</th>
                                <th>ESTADO DE ATENCION</th>
                                <th>FECHA DE ATENCION</th>
                                <th>ID_DERIVACION </th>

                            </tr>

                            @foreach ($atencion as $atencion)
                                <tr>
                                    <td>{{$atencion->id}}</td>
                                    <td>{{$atencion->descripcion_ate}}</td>
                                    <td>{{$atencion->estado_ate}}</td>
                                    <td>{{$atencion->fecha_atencion}}</td>
                                    <td>{{$atencion->id_derivacion}}</td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

