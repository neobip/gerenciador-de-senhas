@extends('layouts.app')

@section('content')
<link href="{{ asset('css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

<!--<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">-->

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class='fa fa-lock'></i> Senhas</h1>
            @if (Session::has('message'))
            <script>

                var type = "{{ Session::get('alert-type', 'info') }}";
                switch (type) {
                    case 'info':
                        toastr.info("{{ Session::get('message') }}");
                        break;
                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;
                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;
                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }

            </script>
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
                                                    'class' => 'btn btn-success fa fa-plus pull-right',
//                                                    'data-toggle'=>'modal',
//                                                    'data-name'=>'add-modal',
//                                                    'data-target'=> 'senhas',
                                                )
                                            ) 
                }} 

                <div class="panel-heading">
                    <i class='fa fa-lock'></i> Senhas
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body " id='tabela'>
                    <table width="100%" class="table " id="users-table">
                        <thead>
                            <tr>
                                <th style='text-align: center'>Acesso</th>
                                <th style='text-align: center'>Usuário</th>
                                <th style='text-align: center'>Login</th>
                                <th style='text-align: center'>Senha</th>
                                <th style='text-align: center'>Obs</th>
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
                                <td style='text-align: center'>{{$senha['Observacao']}}</td>

                                <td style='text-align: center'>
                                    @if(Auth::user()->id == $senha['UserID'] || Auth::user()->tipo == 1)

                                    {{ Html::linkAction('SenhasController@editForm', 
                                                '', 
                                                array(
                                                    'id'=>$senha['ID']
                                                ), 
                                                array(
                                                    'class' => 'btn btn-info fa fa-pencil',
//                                                    'data-toggle'=>'modal',
//                                                    'data-name'=>'edit-modal',
//                                                    'data-target'=> 'senhas',
//                                                    'name'=>$senha['Acesso'],
//                                                    'data-id'=>$senha['ID'],
                                                )
                                            ) 
                                    }}
                                    @endif



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

