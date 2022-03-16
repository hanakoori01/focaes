<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\socios_proyectos;
use App\Models\proyectos;

class SocioProyectoController extends Controller
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
        $socios_proyectos = new socios_proyectos();
        $proyectos = proyectos::all();
        foreach($proyectos as $proyec){
            if($proyec->CodigoSia === $request->get('CodigoSia')){
                $socios_proyectos->IdProyecto = $proyec->id;
            }
        }
        $socios_proyectos->IdSocio = $request->get('IdSocio');
        $socios_proyectos->save();
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
        $socios_proyectos = socios_proyectos::find($id);
        $socios_proyectos->delete();
    }
}
