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
                                <th>CODIGO</th>
                                <th>NOMBRES</th>
                                <th>DIRECCION</th>
                                <th>CORREO</th>
                                <th>CALIFICACION</th>
                                <th>ID-SERVICIOS</th>

                            </tr>

                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->codigo}}</td>
                                    <td>{{$cliente->nombres_cli}}</td>
                                    <td>{{$cliente->direccion_cli}}</td>
                                    <td>{{$cliente->email_cli}}</td>
                                    <td>{{$cliente->calificacion_cli}}</td>
                                    <td>{{$cliente->id_servicios}}</td>
                                    <td>
                                        <form method='post' action='Cliente/{{$cliente->id}}'>
                                            <input type='submit' value='Eliminar'>
                                            @csrf
                                            @method("DELETE")
                                        </form>
                                    </td>
                                    <td><a href="Cliente/{{$cliente['id']}}/edit">Actualizar</a></td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

