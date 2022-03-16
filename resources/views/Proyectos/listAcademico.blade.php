<div class="row mt-3">
    <table class="table datatable dataTable-table table-striped" id="DataTable">
        <thead>
            <tr>
                <th scope="col" data-sortable="" class="text-center col-md-2"><a href="#" class="dataTable-sorter">Nombre completo</a></th>
                <th scope="col" data-sortable="" class="text-center"><a href="#" class="dataTable-sorter">Primero apellido</a></th>
                <th scope="col" data-sortable="" class="text-center"><a href="#" class="dataTable-sorter">Segundo apellido</a></th>
                <th scope="col" data-sortable="" class="text-center"><a href="#" class="dataTable-sorter">Tipo</a></th>
                <th scope="col" data-sortable="" class="text-center"><a href="#" class="dataTable-sorter">Asignar / Desasignar</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach($academicos as $academico)
            <tr style="vertical-align: middle;">
                <td class="text-center">{{$academico->Nombre}}</td>
                <td class="text-center">{{$academico->Apellido1}}</td>
                <td class="text-center">{{$academico->Apellido2}}</td>
                <td class="text-center">
                    <select class="custom-select form-control TipoAca text-center" id="TipoAcademico" name="TipoAcademico">
                        <option value="0">Seleccione...</option>
                        <option value="Responsable">Responsable</option>
                        <option value="Participante">Participante</option>
                    </select>
                </td>
                <td class="text-center"><input type="checkbox" class="CheckBoxAca" id="{{$academico->id}}" /></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#DataTable').DataTable({
            "language": {
                "url": "/json/Spanish.json"
            },
            "aLengthMenu": [
                [10, 20, 30, 50, 75, -1],
                [10, 20, 30, 50, 75, "All"]
            ],
            "pageLength": 10,

        });
    });
</script>