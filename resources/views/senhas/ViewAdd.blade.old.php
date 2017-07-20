@extends('layouts.app')

@section('content')

<script type="text/javascript">
//$(document).ready(function() {
    $(".js-example-basic-single").select2({
        placeholder: "Select a state",
        allowClear: true

    });
</script>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-pencil-square-o"></i> Cadastrar senha</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default effect3">
                <div class="panel-heading">
                    <i class="fa fa-pencil-square-o"></i> Cadastro de senha
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            {{ Form::open(array('url' => 'senhas/envia', 'method' => 'post')) }}

                            @if(Auth::user()->tipo == 1)
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {!! Form::label('Senha compartilhada?') !!}
                                    {!! Form::checkbox('global', 'S', null, array()) !!}

                                </div>
                            </div>
                            @endif

                            @if(Auth::user()->tipo == 1)
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {!! Form::label('Usuário pode visualizar está senha?') !!}
                                    {!! Form::checkbox('visualiza', 'S', null, array()) !!}

                                </div>
                            </div>
                            @endif

                            @if(Auth::user()->tipo == 2)
                            <div class="col-lg-4" style='display: none'>
                                <div class="form-group">
                                    {!! Form::label('Usuário pode visualizar está senha?') !!}
                                    {!! Form::checkbox('visualiza', 'S', null, array('checked'=>'checked')) !!}                                    
                                </div>
                            </div>
                            @endif



                        </div>

                        <div class="col-lg-12">
                            @if(Auth::user()->tipo == 1)
                            <div class="form-group">

                                {!! Form::label('Usuário') !!}
                                {!! Form::select('user_id', $users, Auth::user()->id, array('required', 'class'=>'form-control')) !!}

                            </div>
                            @endif
                            @if(Auth::user()->tipo == 2)
                            <div class="form-group"  style='display: none'>

                                {!! Form::label('Usuário') !!}
                                {!! Form::text('user_id', Auth::user()->id, array('required', 'class'=>'form-control')) !!}

                            </div>
                            @endif
                        </div>

                        <div class="col-lg-4">

                            <div class="form-group">
                                {!! Form::label('Acessos') !!}
                                {!! Form::select('acesso_id', $acessos, null, array('required', 'class'=>'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-lg-4">

                            <div class="form-group">
                                {!! Form::label('Login') !!}
                                {!! Form::text('login', null, array('required', 'class'=>'form-control', 'placeholder'=>'Digite um login')) !!}
                            </div>
                        </div>

                        <div class="col-lg-4">

                            <div class="form-group">
                                {!! Form::label('Senha') !!}
                                {!! Form::text('pwd', null, array('class'=>'form-control', 'placeholder'=>'Digite uma senha')) !!}
                            </div>
                        </div>

                        <div class="col-lg-12">

                            <div class="form-group">
                                {!! Form::label('Observação') !!}
                                {!! Form::textarea('obs', null, array('class'=>'form-control')) !!}
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::submit('Salvar', array('class'=>'btn btn-success pull-right')) !!}
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

