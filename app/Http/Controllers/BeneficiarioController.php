<?php

namespace App\Http\Controllers;

use App\Models\beneficiarios;
use Illuminate\Http\Request;
use App\Models\proyectos;

class BeneficiarioController extends Controller
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
        
        $beneficiario = new beneficiarios();
        $beneficiario->NombreBeneficiario = $request->get('NombreBeneficiario');
        $beneficiario->TipoBeneficiario = $request->get('TipoBeneficiario');
        $beneficiario->CantBeneFamilia = $request->get('CantBeneFamilia');
        $beneficiario->CantBeneMujeres = $request->get('CantBeneMujeres');
        $beneficiario->CantBeneHombre = $request->get('CantBeneHombres');
        $beneficiario->CantBeneTotal = $request->get('CantBeneTotal');
        $beneficiario->Clasificacion = $request->get('Clasificacion');
        $proyectos = proyectos::all();
        foreach($proyectos as $proyec){
            if($proyec->CodigoSia === $request->get('CodigoSia')){
                $beneficiario->IdProyecto = $proyec->id;
            }
        }
        $beneficiario->save();
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
        $beneficiarios = beneficiarios::find($id);
        $beneficiarios->delete();
    }
}
