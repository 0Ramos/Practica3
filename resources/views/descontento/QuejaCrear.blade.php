@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">CREAR</div>

                    <div class="card-body">
                        <br method="post" action="/Quejas">
                            @csrf

                            <input type="text" name="autogenerado_que" placeholder="Autogenerado"><br>
                            <input type="text" name="motivo_que" placeholder="Motivo de queja"><br>
                            <input type="text" id="fecha" name="fecha_recepcion" value="" placeholder="mm/dd/yyyy"></br>
                            <input type="text" name="id_clientes" placeholder="Id Cliente"><br>
                            <input type="text" name="id_usuarios" placeholder="Id Usuario"><br>
                            <input type="submit" name="submit" Value="Guardar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
