<form action="/Academicos/edit/{{$academico->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal fade" id="edit{{$academico->id}}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="bi bi-person"></i> Editar Acádemico</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <!-- No Labels Form -->
                            <div class="row g-3 mt-1">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="Nombre" value="{{$academico->Nombre}}" placeholder="Nombre Completo">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Apellido1" value="{{$academico->Apellido1}}" placeholder="Primer apellido">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="Apellido2" value="{{$academico->Apellido2}}" placeholder="Segundo apellido">
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