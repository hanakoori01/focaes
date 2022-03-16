<!--Start Modal -->
<form action="/Universidades/edit/{{$universidad->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal fade" id="edit{{$universidad->id}}" tabindex="-1">
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
                                    <input type="text" class="form-control" name="NombreUni" placeholder="Nombre" value="{{$universidad->NombreUniversidad}}">
                                </div>
                                <div class="col-md-12">
                                    <select name="TipoUni" id="inputState" class="form-select">
                                        <option>Tipo de Universidad...</option>
                                        <option value="Internacional" {{$universidad->TipoUniversidad === 'Internacional' ? 'selected' : ''}}>Internacional</option>
                                        <option value="Nacional" {{$universidad->TipoUniversidad === 'Nacional' ? 'selected' : ''}}>Nacional</option>
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