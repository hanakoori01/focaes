<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcademicoController;
use App\Http\Controllers\AcademicoProyectoController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\SocioProyectoController;
use App\Http\Controllers\UniversidadController;
use App\Http\Controllers\UniversidadProyectoController;
use App\Http\Controllers\BeneficiarioController;
use App\Http\Controllers\FinanciamientoController;
use App\Http\Controllers\PresupuestoController;
use App\Http\Controllers\ProyectoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class,'index']);

Route::get('/Academicos', [AcademicoController::class,'index']);
Route::post('/Academicos/create', [AcademicoController::class,'store']);
Route::get('/Academicos/edit/{id}', [AcademicoController::class,'edit']);
Route::put('/Academicos/edit/{id}', [AcademicoController::class,'update']);
Route::get('/Academicos/delete/{id}', [AcademicoController::class,'destroy']);


Route::get('/Socios', [SocioController::class,'index']);
Route::post('/Socios/create', [SocioController::class,'store']);
Route::get('/Socios/edit/{id}', [SocioController::class,'edit']);
Route::put('/Socios/edit/{id}', [SocioController::class,'update']);
Route::get('/Socios/delete/{id}', [SocioController::class,'destroy']);

Route::get('/Universidades', [UniversidadController::class,'index']);
Route::post('/Universidades/create', [UniversidadController::class,'store']);
Route::get('/Universidades/edit/{id}', [UniversidadController::class,'edit']);
Route::put('/Universidades/edit/{id}', [UniversidadController::class,'update']);
Route::get('/Universidades/delete/{id}', [UniversidadController::class,'destroy']);

Route::get('/Proyectos', [ProyectoController::class,'index']);
Route::get('/Proyectos/create', [ProyectoController::class,'create']);
Route::post('/Proyectos/create', [ProyectoController::class,'store']);
Route::get('/Proyectos/delete/{id}', [ProyectoController::class,'destroy']);

Route::get('/Proyectos/listAcademico', [ProyectoController::class,'listAcademico']);
Route::post('/Proyectos/storeAcademico', [ProyectoController::class,'storeAcademico']);

Route::get('/Proyectos/listUniversidad', [ProyectoController::class,'listUniversidad']);
Route::post('/Proyectos/storeUniversidad', [ProyectoController::class,'storeUniversidad']);

Route::get('/Proyectos/listSocio', [ProyectoController::class,'listSocio']);
Route::post('/Proyectos/storeSocio', [ProyectoController::class,'storeSocio']);

Route::post('/AcademicoProyecto/create', [AcademicoProyectoController::class,'store']);

Route::post('/UniversidadProyecto/create', [UniversidadProyectoController::class,'store']);

Route::post('/SocioProyecto/create', [SocioProyectoController::class,'store']);

Route::post('/Beneficiario/create', [BeneficiarioController::class,'store']);

Route::post('/Financiamiento/create', [FinanciamientoController::class,'store']);

Route::post('/Presupuesto/create', [PresupuestoController::class,'store']);
// Route::get('/Proyectos/listAcademico', function () {
//     return view('Proyectos.listAcademico');
// });