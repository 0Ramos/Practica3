<?php

namespace App\Http\Controllers;

use App\Models\Derivacion;
use Illuminate\Http\Request;

class DerivacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $derivacion = new Derivacion();
        $derivacion = $derivacion->get();
        return view("Atencion.Ver", ["derivacion"=>$derivacion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Atencion.Crear");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $derivacion = new Derivacion();
        $derivacion-> destino_der= $request-> destino_der;
        $derivacion-> fecha_der = $request-> fecha_der;
        $derivacion-> id_quejas = $request-> id_quejas;
        $derivacion->save();
        return redirect(Route("Derivacion.index"));
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
