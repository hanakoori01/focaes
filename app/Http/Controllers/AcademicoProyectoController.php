<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\academicos_proyectos;
use App\Models\proyectos;
use Illuminate\Support\Facades\Route;

class AcademicoProyectoController extends Controller
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
        $academicos_proyectos = new academicos_proyectos();
        $proyectos = proyectos::all();
        foreach($proyectos as $proyec){
            if($proyec->CodigoSia === $request->get('CodigoSia')){
                $academicos_proyectos->IdProyecto = $proyec->id;
            }
        }
        $academicos_proyectos->IdAcademico = $request->get('IdAcademico');
        $academicos_proyectos->TipoAcademico = $request->get('TipoAcademico');
        $academicos_proyectos->save();
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
        $academico_proyecto = academicos_proyectos::find($id);
        $academico_proyecto->delete();
    }
}
