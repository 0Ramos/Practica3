@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ver </div>

                    <div class="card-body">

                        <table border="1" cellspacing="0">

                            <tr>
                                <th>Id</th>
                                <th>DESTINO DERIVACION</th>
                                <th>FECHA DERIVACION</th>
                                <th>ID_QUEJA</th>

                            </tr>

                            @foreach ($derivacion as $derivacion)
                                <tr>
                                    <td>{{$derivacion->id}}</td>
                                    <td>{{$derivacion->destino_der}}</td>
                                    <td>{{$derivacion->fecha_der}}</td>
                                    <td>{{$derivacion->id_quejas}}</td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

