<?php

namespace App\Http\Controllers;

use App\Models\academico;
use Illuminate\Http\Request;
use App\Models\academicos;

class AcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academicos = academicos::all();
        return view('Academicos.index')->with('academicos', $academicos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Academicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $academico = new academicos();
        $academico->Nombre = $request->get('Nombre');
        $academico->Apellido1 = $request->get('Apellido1');
        $academico->Apellido2 = $request->get('Apellido2');

        $academico->save();

        return redirect()->action([AcademicoController::class,'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $academico = academicos::find($id);
        return view('Academicos.edit')->with('academico', $academico);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $academico = academicos::find($id);
        return view('Academicos.edit')->with('academico', $academico);
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
        $academico = academicos::find($id);
        $academico->Nombre = $request->get('Nombre');
        $academico->Apellido1 = $request->get('Apellido1');
        $academico->Apellido2 = $request->get('Apellido2');
        $academico->save();

        return redirect()->action([AcademicoController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $academico = academicos::find($id);
        $academico->delete();
        return redirect()->action([AcademicoController::class,'index']);
    }
}
