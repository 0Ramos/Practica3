<?php

namespace App\Http\Controllers;

use App\Models\Facturacion;
use Illuminate\Http\Request;

class FacturacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturacion = new Facturacion();
        $facturacion = $facturacion->get();
        return view("Facturacion.Mostrar", ["facturacion"=>$facturacion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Facturacion.CrearFac");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facturacion = new Facturacion();
        $facturacion-> monto_fac = $request-> monto_fac;
        $facturacion-> fecha_pago = $request-> fecha_pago;
        $facturacion-> id_clientes = $request-> id_clientes;
        $facturacion->save();
        return redirect(Route("Facturacion.index"));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

