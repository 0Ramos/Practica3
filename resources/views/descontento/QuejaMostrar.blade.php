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
                                <th>AUTOGENERADO</th>
                                <th>MOTIVO QUEJA</th>
                                <th>FECHA RECEPCION</th>
                                <th>ID CLIENTE</th>
                                <th>ID USUARIOS</th>

                            </tr>

                            @foreach ($quejas as $queja)
                                <tr>
                                    <td>{{$queja->id}}</td>
                                    <td>{{$queja->autogenerado_que}}</td>
                                    <td>{{$queja->motivo_que}}</td>
                                    <td>{{$queja->fecha_recepcion}}</td>
                                    <td>{{$queja->id_clientes}}</td>
                                    <td>{{$queja->id_usuarios}}</td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
