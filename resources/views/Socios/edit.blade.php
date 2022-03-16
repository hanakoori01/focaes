<form action="/Socios/edit/{{$socio->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="modal fade" id="edit{{$socio->id}}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="bi bi-person"></i> Editar Socio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">

                            <!-- No Labels Form -->
                            <div class="row g-3 mt-1">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="NombreSocio" value="{{$socio->NombreSocio}}" placeholder="Nombre">
                                </div>
                                <div class="col-md-12">
                                    <select name="TipoSocio" id="inputState" class="form-select">
                                        <option >Tipo de Socio...</option>
                                        <option value="Institucionalidad" {{$socio->TipoSocio === 'Institucionalidad' ? 'selected' : ''}}>Institucionalidad</option>
                                        <option value="Empresa privada" {{$socio->TipoSocio === 'Empresa privada' ? 'selected' : ''}}>Empresa privada</option>
                                        <option value="Comunidad" {{$socio->TipoSocio === 'Comunidad' ? 'selected' : ''}}>Comunidad</option>
                                        <option value="Otros"> {{$socio->TipoSocio === 'Otros' ? 'selected' : ''}}Otros</option>
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