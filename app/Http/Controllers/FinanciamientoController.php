<?php

namespace App\Http\Controllers;

use App\Models\financiamientos;
use Illuminate\Http\Request;
use App\Models\proyectos;

class FinanciamientoController extends Controller
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
        $financiamiento = new financiamientos();
        $financiamiento->NombreFinanciamiento = $request->get('NombreFinanciamiento');
        $financiamiento->TipoFinanciamiento = $request->get('TipoFinanciamiento');
        $financiamiento->Institucion = $request->get('Institucion');
        $financiamiento->Cantidad = $request->get('Cantidad');
        $proyectos = proyectos::all();
        foreach($proyectos as $proyec){
            if($proyec->CodigoSia === $request->get('CodigoSia')){
                $financiamiento->IdProyecto = $proyec->id;
            }
        }
        $financiamiento->save();
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
        $financiamientos = financiamientos::find($id);
        $financiamientos->delete();
    }
}
