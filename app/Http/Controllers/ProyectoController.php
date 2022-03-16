<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proyectos;
use App\Models\academicos;
use App\Models\academicos_proyectos;
use App\Models\universidades;
use App\Models\socios;
use App\Models\beneficiarios;
use App\Models\financiamientos;
use App\Models\presupuestos;
use App\Models\socios_proyectos;
use App\Models\universidades_proyectos;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = proyectos::all();
        return view('Proyectos.index')->with('proyectos', $proyectos);
    }

    public function listAcademico()
    {
        $academicos = $academicos = academicos::all();
        return view('Proyectos.listAcademico')->with('academicos', $academicos);
    }

    public function storeAcademico(Request $request)
    {
        $academico = new academicos();
        $academico->Nombre = $request->get('Nombre');
        $academico->Apellido1 = $request->get('Apellido1');
        $academico->Apellido2 = $request->get('Apellido2');
        $academico->save();
    }

    public function listUniversidad()
    {
        $universidades = universidades::all();
        return view('Proyectos.listUniversidad')->with('universidades', $universidades);
    }

    public function storeUniversidad(Request $request)
    {
        $universidad = new universidades();
        $universidad->NombreUniversidad = $request->get('NombreUni');
        $universidad->TipoUniversidad = $request->get('TipoUni');
        $universidad->save();
    }

    public function listSocio()
    {
        $socios = socios::all();
        return view('Proyectos.listSocio')->with('socios', $socios);
    }

    public function storeSocio(Request $request)
    {
        $socio = new socios();
        $socio->NombreSocio = $request->get('NombreSocio');
        $socio->TipoSocio = $request->get('TipoSocio');

        $socio->save();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $academicos = $academicos = academicos::all();
        $universidades = universidades::all();
        $socios = socios::all();
        return view('Proyectos.create')->with('academicos', $academicos)->with('universidades', $universidades)->with('socios', $socios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyectos = new proyectos();
        $proyectos->CodigoSia = $request->get('CodigoSia');
        $proyectos->Titulo = $request->get('Titulo');
        $proyectos->AnnoInicio = $request->get('AnnoInicio');
        $proyectos->Vigencia = $request->get('Vigencia');
        $proyectos->TipoProyecto = $request->get('TipoProyecto');
        $proyectos->CantEstVinculadosSede = $request->get('CantEstVinculadosSede');
        $proyectos->CantEstVinculadosOtros = $request->get('CantEstVinculadosOtros');
        $proyectos->AreaInfluencia = $request->get('AreaInfluencia');
        $proyectos->Estado = $request->get('Estado');
        $proyectos->save();
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
        $academico_proyectos = academicos_proyectos::all();
        foreach ($academico_proyectos as $academico) {
            if ($academico->IdProyecto == $id) {
                app('App\Http\Controllers\AcademicoProyectoController')->destroy($academico->id);
            }
        }

        $beneficiarios = beneficiarios::all();
        foreach($beneficiarios as $beneficiario){
            if ($beneficiario->IdProyecto == $id) {
                app('App\Http\Controllers\BeneficiarioController')->destroy($beneficiario->id);
            }
        }

        $financiamientos = financiamientos::all();
        foreach($financiamientos as $financiamiento){
            if ($financiamiento->IdProyecto == $id) {
                app('App\Http\Controllers\FinanciamientoController')->destroy($financiamiento->id);
            }
        }

        $presupuestos = presupuestos::all();
        foreach($presupuestos as $presupuesto){
            if ($presupuesto->IdProyecto == $id) {
                app('App\Http\Controllers\PresupuestoController')->destroy($presupuesto->id);
            }
        }

        $socios_proyectos = socios_proyectos::all();
        foreach($socios_proyectos as $socios_proyecto){
            if ($socios_proyecto->IdProyecto == $id) {
                app('App\Http\Controllers\SocioProyectoController')->destroy($socios_proyecto->id);
            }
        }

        $universidades_proyectos = universidades_proyectos::all();
        foreach($universidades_proyectos as $universidades_proyecto){
            if ($universidades_proyecto->IdProyecto == $id) {
                app('App\Http\Controllers\UniversidadProyectoController')->destroy($universidades_proyecto->id);
            }
        }

        $proyectos = proyectos::find($id);
        $proyectos->delete();
        return redirect()->action([ProyectoController::class,'index']);
    }
}
