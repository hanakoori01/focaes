@extends('Share.layout');

@section('contenido')

<div class="card">
    <div class="card-body">
        <h1 class="card-title title">Universidades</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i class="bi bi-house-door"></i></a></li>
                <li class="breadcrumb-item">Universidades</li>
                <li class="breadcrumb-item active">Lista</li>
            </ol>
            <button type="button" class="btn btn-sm btn-success btn-create" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                <i class="bi bi-plus-square"></i> Crear Universidad
            </button>
        </nav>
    </div>
</div>
<!--Start Modal -->
<form action="/Universidades/create" method="POST">
    @csrf
    <div class="modal fade" id="verticalycentered" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="bi bi-person"></i> Crear Universidad</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                            <!-- No Labels Form -->
                            <div class="row g-3 mt-1">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="NombreUni" placeholder="Nombre">
                                </div>
                                <div class="col-md-12">
                                    <select name="TipoUni" id="inputState" class="form-select">
                                        <option selected>Tipo de Universidad...</option>
                                        <option value="Internacional">Internacional</option>
                                        <option value="Nacional">Nacional</option>
                                    </select>
                                </div>

                            </div><!-- End No Labels Form -->

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>
    <!--End of Modal -->
</form>

<section class="section">
    <div class="row align-items-top">
        @foreach($universidades as $universidad)
        <div class="col-lg-3">

            <!-- Special title treatmen -->
            <div class="card text-center">
                <div class="card-header">
                    <img src="../../assets/img/card.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$universidad->NombreUniversidad}}</h5>
                    <p class="card-text">{{$universidad->TipoUniversidad}}</p>
                    <a data-bs-toggle="modal" data-bs-target="#edit{{$universidad->id}}" class="btn btn-primary">Editar <i class="bi bi-box-arrow-in-up-right"></i></a>
                    <a href="/Universidades/delete/{{$universidad->id}}" class="btn btn-danger">Eliminar <i class="bi bi-box-arrow-in-up-right"></i></a>
                    @include('Universidades.edit')
                </div>
            </div><!-- End Special title treatmen -->

        </div>
        @endforeach

    </div>
</section>



@endsection