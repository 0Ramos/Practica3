@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ver</div>

                    <div class="card-body">

                        <table border="1" cellspacing="0">

                            <tr>
                                <th>Id</th>
                                <th>SERVICIO</th>


                            </tr>

                            @foreach ($servicios as $servicio)
                                <tr>
                                    <td>{{$servicio->id}}</td>
                                    <td>{{$servicio->nombres_ser}}</td>


                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

