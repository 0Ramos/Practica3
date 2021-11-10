<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = new Cliente();
        $clientes = $cliente->get();
        return view("Cliente.Ver", ["clientes"=>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cliente.Crear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente-> codigo = $request-> codigo;
        $cliente-> nombres_cli = $request-> nombre_cli;
        $cliente-> direccion_cli = $request-> direccion_cli;
        $cliente-> email_cli= $request-> email_cli;
        $cliente-> calificacion_cli = $request-> calificacion_cli;
        $cliente-> id_servicios = $request-> id_servicios;
        $cliente->save();
        return redirect(Route("Cliente.index"));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resultato = Cliente::find($id);
        return view('Cliente.editar', ["cliente"=>$resultato]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente-> codigo = $request-> codigo;
        $cliente-> nombres_cli = $request-> nombre_cli;
        $cliente-> direccion_cli = $request-> direccion_cli;
        $cliente-> email_cli= $request-> email_cli;
        $cliente-> calificacion_cli = $request-> calificacion_cli;
        $cliente-> id_servicios = $request-> id_servicios;
        $cliente->save();
        return redirect(Route("Cliente.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect(Route("Cliente.index"));

    }
}
