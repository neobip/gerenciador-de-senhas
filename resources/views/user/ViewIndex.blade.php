@extends('layouts.app')

@section('content')
<link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class='fa fa-user'></i> {{$title}}</h1>
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
                <div class="panel-heading">
                    <i class='fa fa-user'></i> {{$title}}

                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!--<table id="users-table"  class="table table-striped table-bordered table-hover" cellspacing="0"  width="100%">-->
                    <table id="users-table"  width="100%" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th style='text-align: center'><em class="fa fa-cog"></em></th>
                            </tr> 
                        </thead>

                        <tbody>
                            @foreach($usuariosLst as $usuarios)
                            <tr>
                                <td>{{$usuarios->name}}</td>
                                <td>{{$usuarios->email}}</td>
                                <td>{{ Html::linkAction('UserController@editForm', '', array('id'=>$usuarios->id), array('class' => 'btn btn-info fa fa-pencil')) }}</td>
                            </tr>
                            @endforeach
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
//$(function () {
//    $('#users-table').DataTable({
//        processing: true,
//        serverSide: true,
//        ajax: 'http://127.0.0.1/gerenciador_senhas/public/acessos/get_datatable',
//        columns: [
//            {data: 'nomeacesso'},
//            {data: 'link'},
//            {data: 'action', name: 'action', orderable: false, searchable: false}
//
//        ]
//    });
//});
$(function () {
    $('#users-table').DataTable({
        select: true,
        "lengthChange": false,
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

    @endsection

