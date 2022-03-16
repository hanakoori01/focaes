<?php

namespace App\Http\Controllers;

use App\Models\presupuestos;
use Illuminate\Http\Request;
use App\Models\proyectos;

class PresupuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $presupuesto = new presupuestos();
        $presupuesto->ARES = $request->get('ARES');
        $presupuesto->OVDE = $request->get('OVDE');
        $presupuesto->InstanciaNacional = $request->get('InstanciaNacional');
        $presupuesto->InstanciaInternacional = $request->get('InstanciaInternacional');
        $presupuesto->PresupuestoTotal = $request->get('PresupuestoTotal');
        $proyectos = proyectos::all();
        foreach($proyectos as $proyec){
            if($proyec->CodigoSia === $request->get('CodigoSia')){
                $presupuesto->IdProyecto = $proyec->id;
            }
        }
        $presupuesto->save();

        return "Finalizado";
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
        $presupuestos = presupuestos::find($id);
        $presupuestos->delete();
    }
}
