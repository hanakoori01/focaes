@extends('Share.layout');

@section('contenido')
<div class="card">
    <div class="card-body">
        <h1 class="card-title title">Proyectos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/"><i class="bi bi-house-door"></i></a></li>
                <li class="breadcrumb-item">Proyectos</li>
                <li class="breadcrumb-item active">Lista</li>
            </ol>
            <a href="/Proyectos/create" type="button" class="btn btn-sm btn-success btn-create">
                <i class="bi bi-plus-square"></i> Crear Proyecto
            </a>
        </nav>
    </div>
</div>

<section class="section">
    <div class="row align-items-top">
        @foreach($proyectos as $proyecto)
        <div class="col-lg-3">

            <!-- Special title treatmen -->
            <div class="card text-center">
                <div class="card-header">
                    <img src="../../../../img/project.png" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$proyecto->CodigoSia}}</h5>
                    <p class="card-text">{{$proyecto->Titulo}}</p>
                    <a href="#" class="btn btn-primary">Ver más <i class="bi bi-box-arrow-in-up-right"></i></a>
                    <a href="/Proyectos/delete/{{$proyecto->id}}" class="btn btn-danger">Eliminar <i class="bi bi-box-arrow-in-up-right"></i></a>
                </div>
            </div><!-- End Special title treatmen -->

        </div>
        @endforeach
    </div>
</section>
@endsection