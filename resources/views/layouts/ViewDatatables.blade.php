
<link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class='fa fa-lock'></i> Acessos</h1>
            @if(Session::has('info'))
            <div class='alert alert-info'>
                <a class="panel-close close" data-dismiss="alert">×</a> 
                {{Session::get('info')}}
            </div>
            @endif

            @if(Session::has('success'))
            <div class='alert alert-success'>
                <a class="panel-close close" data-dismiss="alert">×</a> 
                {{Session::get('success')}}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">



            <div class="panel panel-default effect3">


                {{ Html::linkAction('AcessoController@addForm', 
                                                ' Adicionar Acesso', 
                                                null, 
                                                 array(
                                                    'class' => 'btn btn-success fa fa-plus pull-right add-modal',
                                                    'data-toggle'=>'modal',
                                                    'data-name'=>'add-modal',
                                                    'data-target'=> '#addModal'
                                                )
                                            ) 
                }}             
                <div class="panel-heading">
                    <i class='fa fa-lock'></i> Acessos

                </div>
                <!-- /.panel-heading -->
                <div class="panel-body" id='tabela'>
                    <!--<table id="users-table"  class="table table-striped table-bordered table-hover" cellspacing="0"  width="100%">-->
                    <table id="{{ $grid->idGrid }}"  width="100%" class="table">
                        <thead>

                            <tr>
                                @foreach ($grid->gridColumns as $th)
                                <th>{{$th}}</td>


                                    @endforeach
                                <th></th>
                            </tr>

                        </thead>

                        <tbody>

                        </tbody>


                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
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

