<?php

namespace App\Http\Controllers;

use App\Models\Atencion;
use Illuminate\Http\Request;

class AtencionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atencion = new Atencion();
        $atencion = $atencion->get();
        return view("Atencion.AtencionVer", ["atencion"=>$atencion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Atencion.AtencionCrear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $atencion = new Atencion();
        $atencion-> descripcion_ate = $request-> descripcion_ate;
        $atencion-> estado_ate = $request-> estado_ate;
        $atencion-> fecha_atencion = $request-> fecha_atencion;
        $atencion-> id_derivacion = $request-> id_derivacion;
        $atencion->save();
        return redirect(Route("Atencion.index"));

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
