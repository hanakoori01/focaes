@extends('Share.layout');

@section('contenido')

<div class="card">
    <div class="card-body">
        <h1 class="card-title title">Socios</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i class="bi bi-house-door"></i></a></li>
                <li class="breadcrumb-item">Socios</li>
                <li class="breadcrumb-item active">Lista</li>
            </ol>
            <button type="button" class="btn btn-sm btn-success btn-create" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                <i class="bi bi-plus-square"></i> Crear Socio
            </button>
        </nav>
    </div>
</div>
<!--Start Modal -->
<form action="/Socios/create" method="POST">
    @csrf
    <div class="modal fade" id="verticalycentered" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="bi bi-person"></i> Crear Socio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                            <!-- No Labels Form -->
                            <div class="row g-3 mt-1">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="NombreSocio" placeholder="Nombre">
                                </div>
                                <div class="col-md-12">
                                    <select name="TipoSocio" id="inputState" class="form-select">
                                        <option selected>Tipo de Socio...</option>
                                        <option value="Institucionalidad">Institucionalidad</option>
                                        <option value="Empresa privida">Empresa privada</option>
                                        <option value="Comunidad">Comunidad</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>

                            </div><!-- End No Labels Form -->

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--End of Modal -->
</form>

<section class="section">
    <div class="row align-items-top">
        @foreach($socios as $socio)
        <div class="col-lg-3">

            <!-- Special title treatmen -->
            <div class="card text-center">
                <div class="card-header">
                    <img src="../../assets/img/card.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$socio->NombreSocio}}</h5>
                    <p class="card-text">{{$socio->TipoSocio}}</p>
                    <a data-bs-toggle="modal" data-bs-target="#edit{{$socio->id}}" class="btn btn-primary">Editar <i class="bi bi-box-arrow-in-up-right"></i></a>
                    <a href="/Socios/delete/{{$socio->id}}" class="btn btn-danger">Eliminar <i class="bi bi-box-arrow-in-up-right"></i></a>
                    @include('Socios.edit')
                </div>
            </div><!-- End Special title treatmen -->

        </div>
        @endforeach
        
    </div>
</section>




@endsection