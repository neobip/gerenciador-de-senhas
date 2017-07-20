@extends('layouts.app')

@section('content')
<link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class='fa fa-lock'></i> Senhas</h1>
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
                {{ Html::linkAction('SenhasController@addForm', 
                                                ' Nova senha', 
                                                null, 
                                                 array(
                                                    'class' => 'btn btn-success fa fa-plus pull-right add-modal',
                                                    'data-toggle'=>'modal',
                                                    'data-name'=>'add-modal',
                                                    'data-target'=> 'senhas',
                                                )
                                            ) 
                }} 
                
                <div class="panel-heading">
                    <i class='fa fa-lock'></i> Senhas
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body " id='tabela'>
                    <table width="100%" class="table table-striped table-bordered table-hover" id="users-table">
                        <thead>
                            <tr>
                                <th style='text-align: center'>Acesso</th>
                                <th style='text-align: center'>Usuário</th>
                                <th style='text-align: center'>Login</th>
                                <th style='text-align: center'>Senha</th>
                                <th style='text-align: center'><em class="fa fa-cog"></em></th>
                            </tr> 
                        </thead>

                        <tbody id='conteudo'>
                            @foreach($senhas as $key => $senha)
                            <tr class="item{{$senha['ID']}}">

                                <td style='text-align: center'><a href="{{$senha['Link']}}" target='_blank'>{{ $senha['Acesso'] }}</a></td>
                                <td style='text-align: center'>{{$senha['Usuario']}}</td>
                                <td style='text-align: center' id='login'>{{$senha['Login']}}</td>
                                <td style='text-align: center'>{{$senha['Senha']}}</td>

                                <td style='text-align: center'>
                                    @if(Auth::user()->id == $senha['UserID'] || Auth::user()->tipo == 1)

                                    {{ Html::linkAction('SenhasController@editForm', 
                                                '', 
                                                array(
                                                    'id'=>$senha['ID']
                                                ), 
                                                array(
                                                    'class' => 'btn btn-info fa fa-pencil edit-modal',
                                                    'data-toggle'=>'modal',
                                                    'data-name'=>'edit-modal',
                                                    'data-target'=> 'senhas',
                                                    'name'=>$senha['Acesso'],
                                                    'data-id'=>$senha['ID'],
                                                )
                                            ) 
                                    }}
                                    @endif

                                    {{ Html::linkAction('SenhasController@editForm', 
                                                '', 
                                                array(
                                                    'id'=>$senha['ID']
                                                ), 
                                                array(
                                                    'class' => 'btn btn-danger fa fa-trash delete-modal',
                                                    'data-toggle'=>'modal',
                                                    'data-name'=>'delete-modal',
                                                    'data-target'=> 'senhas',
                                                    'name'=>$senha['Acesso'],
                                                    'data-id'=>$senha['ID'],
                                                )
                                            ) 
                                    }}


                                </td>


                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
