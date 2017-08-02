@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-pencil-square-o"></i> Edição de senha </h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default effect3">
                <div class="panel-heading">
                    <i class="fa fa-pencil-square-o"></i> Edição de senha
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            {{ Form::open(array('url' => 'senhas/envia', 'method' => 'post')) }}
                            {!! Form::hidden('id', $senhas['ID']) !!}

                            @if(Auth::user()->tipo == 1)
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {!! Form::label('Senha compartilhada?') !!}

                                    @if($senhas['Global']=='S')
                                        {!! Form::checkbox('global', 'S', null, array('checked'=>'checked')) !!}
                                    @else
                                        {!! Form::checkbox('global', 'S', null, array()) !!}
                                    @endif

                                </div>
                            </div>
                            @endif

                            @if(Auth::user()->tipo == 1)
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {!! Form::label('Usuário pode visualizar está senha?') !!}
                                    @if($senhas['Visualiza']=='S')
                                        {!! Form::checkbox('visualiza', 'S', null, array('checked'=>'checked')) !!}
                                    @else
                                        {!! Form::checkbox('visualiza', 'S', null, array()) !!}
                                    @endif
                                    
                                </div>
                            </div>
                            @endif

                        </div>

                        <div class='col-lg-12'>
                            @if(Auth::user()->tipo == 1)
                            <div class="form-group">

                                {!! Form::label('Usuário') !!}
                                {!! Form::select('user_id', $users, $senhas['UserID'], array('required', 'class'=>'form-control')) !!}

                            </div>
                            @endif
                            
                        </div>

                        <div class="col-lg-4">


                            <div class="form-group">
                                {!! Form::label('Acesso') !!}
                                {!! Form::select('acesso_id', $acessos, $senhas['AcessoID'], array('required', 'class'=>'form-control')) !!}
                            </div>
                        </div>

                        <div class="col-lg-4">

                            <div class="form-group">
                                {!! Form::label('Login') !!}
                                {!! Form::text('login', $senhas['Login'], array('required', 'class'=>'form-control', 'placeholder'=>'Digite um login')) !!}
                            </div>
                        </div>

                        <div class="col-lg-4">

                            <div class="form-group">
                                {!! Form::label('Senha') !!}
                                {!! Form::text('pwd', $senhas['Senha'], array('class'=>'form-control', 'placeholder'=>'Digite uma senha')) !!}
                            </div>
                        </div>



                        <div class="col-lg-12">


                            <div class="form-group">
                                {!! Form::label('Observação') !!}
                                {!! Form::textarea('obs', $senhas['Observacao'], array('class'=>'form-control')) !!}
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

