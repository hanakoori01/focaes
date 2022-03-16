<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\universidades;

class UniversidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universidades = universidades::all();
        return view('Universidades.index')->with('universidades', $universidades);
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
        $universidad = new universidades();
        $universidad->NombreUniversidad = $request->get('NombreUni');
        $universidad->TipoUniversidad = $request->get('TipoUni');

        $universidad->save();

        return redirect()->action([UniversidadController::class,'index']);
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
        $universidad = universidades::find($id);
        return view('Universidades.edit')->with('universidad', $universidad);
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
        $universidade = universidades::find($id);
        $universidade->NombreUniversidad = $request->get('NombreUni');
        $universidade->TipoUniversidad = $request->get('TipoUni');
        $universidade->save();

        return redirect()->action([UniversidadController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $universidad = universidades::find($id);
        $universidad->delete();
        return redirect()->action([UniversidadController::class,'index']);
    }
}
