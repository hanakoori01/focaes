@extends('Share.layout');

@section('contenido')

<div class="card">
    <div class="card-body">
        <h1 class="card-title title">Acádemicos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i class="bi bi-house-door"></i></a></li>
                <li class="breadcrumb-item">Acádemicos</li>
                <li class="breadcrumb-item active">Lista</li>
            </ol>
            <button type="button" class="btn btn-sm btn-success btn-create" data-bs-toggle="modal" data-bs-target="#verticalycentered">
                <i class="bi bi-plus-circle"></i> Crear Acádemico
            </button>
        </nav>
    </div>
</div>
<!--Start Modal -->
<form action="/Academicos/create" method="POST">
    @csrf
    <div class="modal fade" id="verticalycentered" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="bi bi-person"></i> Crear Acádemico</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <!-- No Labels Form -->
                            <div class="row g-3 mt-1">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="Nombre" placeholder="Nombre Completo">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Apellido1" placeholder="Primer apellido">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Apellido2" placeholder="Segundo apellido">
                                </div>

                            </div><!-- End No Labels Form -->

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!--End of Modal -->
</form>

<section class="section">
    <div class="row align-items-top">
        @foreach($academicos as $academico)
        <div class="col-lg-3">

            <!-- Special title treatmen -->
            <div class="card text-center">
                <div class="card-header">
                    <img src="../../../../img/user.png" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$academico->Nombre}}</h5>
                    <p class="card-text">{{$academico->Apellido1}} {{$academico->Apellido2}}</p>
                    <a class="btn btn-primary edit-button"  title="Editar" data-bs-toggle="modal" data-bs-target="#edit{{$academico->id}}"><i class="bi bi-pencil-square"></i></a>
                    <a class="btn btn-danger delete-button" title="Eliminar" href="/Academicos/delete/{{$academico->id}}"><i class="bi bi-trash"></i></a>
                    @include('Academicos.edit')
                </div>
            </div><!-- End Special title treatmen -->

        </div>
        @endforeach

    </div>
</section>


@endsection