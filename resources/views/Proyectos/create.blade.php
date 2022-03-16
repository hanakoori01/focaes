@extends('Share.layout');

@section('contenido')

<div class="card">
    <div class="card-body">
        <h1 class="card-title title">Crear proyecto</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i class="bi bi-house-door"></i></a></li>
                <li class="breadcrumb-item">Proyectos</li>
                <li class="breadcrumb-item active">Crear proyecto</li>
            </ol>
            <a type="button" id="RegresarProyectos" href="/Proyectos" class="btn btn-sm btn-success btn-create">
                <i class="bi bi-arrow-up-left-square"></i> Regresar a lista
            </a>
        </nav>
    </div>
</div>

<!--Start Modal -->
<form id="registration">


    <div class="card card-responsive">
        <div class="card-body">
            <nav class="mt-3">
                <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">General</a>
                    <a class="nav-link" id="step2-tab" data-bs-toggle="tab" href="#step2">Academicos</a>
                    <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step3">Universidades</a>
                    <a class="nav-link" id="step4-tab" data-bs-toggle="tab" href="#step4">Socios Estrategicos</a>
                    <a class="nav-link" id="step5-tab" data-bs-toggle="tab" href="#step5">Beneficiarios</a>
                    <a class="nav-link" id="step6-tab" data-bs-toggle="tab" href="#step6">Financiamiento</a>
                    <a class="nav-link" id="step7-tab" data-bs-toggle="tab" href="#step7">Presupuesto</a>
                </div>
            </nav>
            <div class="tab-content py-4">
                <!-- Paso 1 -->
                <div class="tab-pane fade show active" id="step1">
                    <div action="/Proyectos/create" method="POST" id="frmProye">
                        @csrf
                        <div class="container">
                            <h4>Información del proyecto</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Código SIA</label>
                                    <input type="text" name="CodigoSia" class="form-control" id="CodigoSia" placeholder="Código SIA">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Título</label>
                                    <input type="text" name="Titulo" class="form-control" id="Titulo" placeholder="Título">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">Año inicio</label>
                                    <input type="text" name="AnnoInicio" class="form-control datepicker" id="AnnoInicio" placeholder="Año inicio">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Vigencia</label>
                                    <input type="text" name="Vigencia" class="form-control datepicker" id="Vigencia" placeholder="Vigencia">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">Tipo de Proyecto</label>
                                    <select name="TipoProyecto" id="TipoProyecto" class="form-select">
                                        <option selected>Tipo de Proyecto...</option>
                                        <option value="Extension">Extension</option>
                                        <option value="Investigacion">Investigacion</option>
                                        <option value="Integrado">Integrado</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Estado</label>
                                    <select name="Estado" id="Estado" class="form-select">
                                        <option selected>Estado...</option>
                                        <option value="Vigente">Vigente</option>
                                        <option value="Por cerrar">Por cerrar</option>
                                        <option value="Cerrado">Cerrado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <h5>Cantidad de Estudiantes Vínculados</h5>
                                <div class="col-md-6">
                                    <label class="form-label">Sede</label>
                                    <input type="number" name="CantEstVinculadosSede" class="form-control" id="CantEstVinculadosSede" placeholder="Estudiantes vínculados sede">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Otros</label>
                                    <input type="number" name="CantEstVinculadosOtros" class="form-control" id="CantEstVinculadosOtros" placeholder="Estudiantes vínculados otros">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="form-label">Área de Influencia</label>
                                    <textarea type="text" name="AreaInfluencia" class="form-control" id="AreaInfluencia" placeholder="Área de Influencia"></textarea>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!--Final Paso 1 -->
                <!-- Paso 2 -->
                <div class="tab-pane fade" id="step2">
                    <div class="row">
                        <div class="col-md-9">
                            <h4>Lista de Academicos</h4>
                        </div>
                        <div class="col-md-3 text-end">
                            <button type="button" class="btn btn-primary mr-4" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                                Agregar academico
                            </button>
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="modal fade" id="verticalycentered" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><i class="bi bi-person"></i> Crear Academico</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <form id="frmAca" action="" method="POST">
                                                    @csrf
                                                    <div class="row g-3 mt-1">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="NombreAca" name="Nombre" placeholder="Nombre Completo">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" id="Apellido1Aca" name="Apellido1" placeholder="Primer apellido">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" id="Apellido2Aca" name="Apellido2" placeholder="Segundo apellido">
                                                        </div>

                                                    </div><!-- End No Labels Form -->
                                                </form>
                                                <!-- No Labels Form -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" id="CloseAca" data-bs-dismiss="modal">Cerrar</button>
                                        <a class="btn btn-primary" id="btnSaveAca">Guardar cambios</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of Modal -->
                    </div>
                    <div id="listAcademico">@include('Proyectos.listAcademico')</div>

                </div>
                <!--Final Paso 2 -->
                <!-- Paso 3 -->
                <div class="tab-pane fade" id="step3">
                    <div class="row">
                        <div class="col-md-9">
                            <h4>Lista de universidades</h4>
                        </div>
                        <div class="col-md-3 text-end">
                            <button type="button" class="btn btn-primary mr-4" data-bs-toggle="modal" data-bs-target="#modalUni">
                                Agregar universidad
                            </button>
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="modal fade" id="modalUni" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><i class="bi bi-person"></i> Crear Universidad</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <form id="frmUni" action="" method="POST">
                                                    @csrf
                                                    <!-- No Labels Form -->
                                                    <div class="row g-3 mt-1">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="NombreUni" name="NombreUni" placeholder="Nombre">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <select name="TipoUni" id="TipoUni" class="form-select">
                                                                <option selected value="0">Tipo de Universidad...</option>
                                                                <option value="Internacional">Internacional</option>
                                                                <option value="Nacional">Nacional</option>
                                                            </select>
                                                        </div>

                                                    </div><!-- End No Labels Form -->
                                                </form>
                                                <!-- No Labels Form -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" id="CloseUni" data-bs-dismiss="modal">Cerrar</button>
                                        <a class="btn btn-primary" id="btnSaveUni">Guardar cambios</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of Modal -->
                    </div>
                    <div id="listUniversidad">@include('Proyectos.listUniversidad')</div>
                </div>
                <!--Final Paso 3 -->
                <!-- Paso 4 -->
                <div class="tab-pane fade" id="step4">
                    <div class="row">
                        <div class="col-md-9">
                            <h4>Lista de socios</h4>
                        </div>
                        <div class="col-md-3 text-end">
                            <button type="button" class="btn btn-primary mr-4" data-bs-toggle="modal" data-bs-target="#modalSocio">
                                Agregar socio
                            </button>
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="modal fade" id="modalSocio" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><i class="bi bi-person"></i> Crear socio</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="frmSocio" action="" method="POST">
                                                    @csrf
                                                    <!-- No Labels Form -->
                                                    <div class="row g-3 mt-1">
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" name="NombreSocio" id="NombreSocio" placeholder="Nombre">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <select name="TipoSocio" id="TipoSocio" class="form-select">
                                                                <option selected>Tipo de Socio...</option>
                                                                <option value="Institucionalidad">Institucionalidad</option>
                                                                <option value="Empresa privida">Empresa privada</option>
                                                                <option value="Comunidad">Comunidad</option>
                                                                <option value="Otros">Otros</option>
                                                            </select>
                                                        </div>

                                                    </div><!-- End No Labels Form -->
                                                </div>
                                                <!-- No Labels Form -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" id="CloseSocio" data-bs-dismiss="modal">Cerrar</button>
                                        <a class="btn btn-primary" id="btnSaveSocio">Guardar cambios</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End of Modal -->
                    </div>
                    <div id="listSocio">@include('Proyectos.listSocio')</div>
                </div>
                <!--Final Paso 4 -->
                <!-- Paso 5 -->
                <div class="tab-pane fade" id="step5">
                    <section class="mb-2">
                        <h5 class="h5 text-blue">Beneficiarios</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Nombre:</label>
                                    <input type="text" class="form-control" id="NombreBeneficiario" name="NombreBeneficiario" placeholder="Nombre" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Tipo de beneficiario:</label>
                                    <select class="custom-select form-control" id="TipoBeneficiario" name="TipoBeneficiario">
                                        <option value="0">Tipo beneficiario...</option>
                                        <option value="Asociacion de desarrollo">Asociacion de desarrollo</option>
                                        <option value="Organizacion productores">Organizacion productores</option>
                                        <option value="ASADAS">ASADAS</option>
                                        <option value="MYPIME">MYPIME</option>
                                        <option value="Comunidad">Comunidad</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label>Clasificacion:</label>
                                    <select class="custom-select form-control" id="ClasificacionBeneficiario" name="ClasificacionBeneficiario">
                                        <option value="0">Clasificacion...</option>
                                        <option value="Directos">Directos</option>
                                        <option value="Indirectos">Indirectos</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Cantidad Hombres :</label>
                                    <input type="text" class="form-control" id="CantBeneHombres" name="CantBeneHombres" placeholder="Cantidad Beneficiarios (Masculinos)" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Cantidad mujeres :</label>
                                    <input type="text" class="form-control" id="CantBeneMujeres" name="CantBeneMujeres" placeholder="Cantidad Beneficiarios (Femininos)" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Cantidad familias:</label>
                                    <input type="text" class="form-control" id="CantBeneFamilia" name="CantBeneFamilia" placeholder="Cantidad Beneficiarios (Familias)" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Total:</label>
                                    <input type="text" class="form-control" id="CantBeneTotal" name="CantBeneTotal" placeholder="Cantidad Beneficiarios (Total):" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="col-md-12 col-sm-12 text-left">
                                    <div class="dropdown">
                                        <a class="btn btn-secondary" id="btnAgregarBene" style="margin-bottom: 20px; color:white">
                                            Agregar
                                        </a>
                                        <a class="btn btn-secondary" id="btnEliminarBene" style="margin-bottom: 20px; color:white">
                                            Eliminar
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="tablaBeneficiario">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th>Nombre</th>
                                                <th>Tipo</th>
                                                <th>Clasificacion</th>
                                                <th hidden>Hombre</th>
                                                <th hidden>Mujeres</th>
                                                <th hidden>Familias</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--Final Paso 5 -->
                <!-- Paso 6 -->
                <div class="tab-pane fade" id="step6">
                    <section>
                        <h5 class="h5 text-blue">Financiamiento</h5>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre :</label>
                                    <input type="text" class="form-control" id="NombreFinanciamiento" name="NombreFinanciamiento" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Financiamiento :</label>
                                    <select class="custom-select form-control" name="TipoFinanciamiento" id="TipoFinanciamiento">
                                        <option value="">Seleccione</option>
                                        <option value="UNA">UNA</option>
                                        <option value="Externo">Externo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Institución :</label>
                                    <select class="custom-select form-control" id="Institucion" name="Institucion">
                                        <option value="">Seleccione</option>
                                        <option value="FIDA">FIDA</option>
                                        <option value="FUNDER">FUNDER</option>
                                        <option value="FondosSistema">Fondos del Sistema</option>
                                        <option value="CONARE">CONARE Regionalización</option>
                                        <option value="Otra">Otra</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cantidad :</label>
                                    <input type="text" class="form-control" id="CantidadFinanciamiento" name="CantidadFinanciamiento" value="">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="col-md-12 col-sm-12 text-left">
                                    <div class="dropdown">
                                        <a class="btn btn-secondary" id="btnAgregarFina" style="margin-bottom: 20px; color:white">
                                            Agregar
                                        </a>
                                        <a class="btn btn-secondary" id="btnEliminarFina" style="margin-bottom: 20px; color:white">
                                            Eliminar
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="tablaFinanciamiento">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th>Nombre</th>
                                                <th>Tipo Financiamiento</th>
                                                <th>Institución</th>
                                                <th>Cantidad</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </section>
                </div>
                <!--Final Paso 6 -->
                <!-- Paso 7 -->
                <div class="tab-pane fade" id="step7">
                    <h4>Presupuesto</h4>
                    <div action="/Proyectos/create" method="POST" id="frmPre">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label">ARES</label>
                                <input type="number" class="form-control" id="ARES" name="ARES" value="" placeholder="ARES">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">OVDE</label>
                                <input type="number" class="form-control" id="OVDE" name="OVDE" value="" placeholder="OVDE">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label class="form-label">Instancia nacional</label>
                                <input type="number" class="form-control" id="InstanciaNacional" name="InstanciaNacional" value="" placeholder="Instancia Nacional">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Instancia internacional</label>
                                <input type="number" class="form-control" id="InstanciaInternacional" name="InstanciaInternacional" value="" placeholder="Instancia Internacional">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Presupuesto total</label>
                                <input type="number" class="form-control" id="PresupuestoTotal" name="PresupuestoTotal" value="" placeholder="Presupuesto total">
                            </div>
                        </div>

                    </div>
                    <!--Final Paso 7 -->
                </div>
                <div class="row justify-content-between mt-4">
                    <div class="col-auto"><button type="button" class="btn btn-secondary" data-enchanter="previous">Anterior</button></div>
                    <div class="col-auto">
                        <button type="button" class="btn btn-primary" data-enchanter="next">Siguiente</button>
                        <a type="submit" class="btn btn-primary" data-enchanter="finish" id="btnFinalizar">Finalizar</a>
                    </div>
                </div>

            </div>
        </div>
</form>
<!--End of Modal -->

@endsection