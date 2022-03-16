<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\socios;

class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socios = socios::all();
        return view('Socios.index')->with('socios', $socios);
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
        $socio = new socios();
        $socio->NombreSocio = $request->get('NombreSocio');
        $socio->TipoSocio = $request->get('TipoSocio');

        $socio->save();

        return redirect()->action([SocioController::class,'index']);
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
        $socio = socios::find($id);
        return view('Socios.edit')->with('socio', $socio);
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
        $socio = socios::find($id);
        $socio->NombreSocio = $request->get('NombreSocio');
        $socio->TipoSocio = $request->get('TipoSocio');
        $socio->save();

        return redirect()->action([SocioController::class,'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $socio = socios::find($id);
        $socio->delete();
        return redirect()->action([SocioController::class,'index']);
    }
}
