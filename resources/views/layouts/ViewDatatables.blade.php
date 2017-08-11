
<link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">



<table id="{{ $grid->idGrid }}"  cellspacing="0"  width="100%" class="table">
    <thead>

        <tr>
            @foreach ($grid->gridColumns as $th)
            <th style="text-align: center">{{$th->chead}}</td>
            @endforeach
            <th style='text-align: center'><em class="fa fa-cog"></em></th>
        </tr>

    </thead>

    <tbody>

    </tbody>


</table>


<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables.bootstrap.js') }}"></script>



<script type="text/javascript">
$(function () {
    var table = $('#{{ $grid->idGrid }}').DataTable({
        select: true,
        "lengthChange": false,
        ajax: "{{route($grid->idGrid)}}",
        "language": {
            //            "sLengthMenu": "Mostrar _MENU_ registros por p&aacute;gina",
            "sZeroRecords": "Nenhum registro encontrado",
            "sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
            //            "sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
            "sInfoFiltered": "(filtrado de _MAX_ registros)",
            "sSearch": "Pesquisar: ",
            "paginate": {
                "previous": "Anterior",
                "next": "Pr&oacute;ximo"
            }
        }
    });


});
</script>

