<?php

namespace App\Http\Controllers;

use App\Models\Promocion;
use Illuminate\Http\Request;

class PromocionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promocion = new Promocion();
        $promocion = $promocion->get();
        return view("Promocion.PromocionCrear", ["promocion"=>$promocion]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Promocion.PromocionCrear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promocion = new Promocion();
        $promocion-> descripcion_pro = $request-> descripcion_pro;
        $promocion-> fecha_inicio = $request-> fecha_inicio;
        $promocion-> fecha_fin = $request-> fecha_fin;
        $promocion-> id_clientes = $request-> id_clientes;
        $promocion->save();
        return redirect(Route("Promocion.index"));
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
