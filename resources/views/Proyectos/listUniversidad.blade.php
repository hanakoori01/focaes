<div class="row mt-3">
    <table class="table datatable dataTable-table table-striped" id="DataTableUni">
        <thead>
            <tr>
                <th scope="col" data-sortable="" class="text-center col-md-1"><a href="#" class="dataTable-sorter">Nombre</a></th>
                <th scope="col" data-sortable="" class="text-center"><a href="#" class="dataTable-sorter">Tipo</a></th>
                <th scope="col" data-sortable="" class="text-center"><a href="#" class="dataTable-sorter">Asignar / Desasignar</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach($universidades as $universidad)
            <tr style="vertical-align: middle;">
                <td class="text-center">{{$universidad->NombreUniversidad}}</td>
                <td class="text-center">{{$universidad->TipoUniversidad}}</td>
                <td class="text-center"><input type="checkbox" class="CheckBoxUni" id="{{$universidad->id}}" /></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#DataTableUni').DataTable({
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