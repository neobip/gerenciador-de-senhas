@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-pencil-square-o"></i> {{$title}}</h1>

        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default effect3">
                <div class="panel-heading">
                    <i class="fa fa-pencil-square-o"></i> {{$title}}
                </div>
                <div class="panel-body">
                    <div class='row'>
                        {{ Form::open(array('url' => 'usuarios/envia', 'method' => 'post', 'data-toggle'=>"validator")) }}
                        {!! Form::hidden('id', $usuario->id) !!}
                        <div class="col-lg-4">

                            <div class="form-group">
                                {!! Form::label('Tipo de usuário') !!}
                                {!! Form::select('tipo', array($tipo), $usuario->tipo, array('required', 'class'=>'form-control')) !!}
                            </div>
                        </div>
                        
                        <div class="col-lg-4">

                            <div class="form-group">
                                {!! Form::label('Ativado?') !!}
                                {!! Form::select('ativo', array($ativado), $usuario->ativo, array('required', 'class'=>'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">

                            <div class="form-group">
                                {!! Form::label('Código SIGU') !!}
                                {!! Form::text('oidsigu', $usuario->oidsigu, array('class'=>'form-control')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">


                            <div class="form-group">
                                {!! Form::label('Nome') !!}
                                {!! Form::text('name', $usuario->name, 
                                    array(
                                        'class'=>'form-control required', 
                                        'placeholder'=>'Digite um login', 
                                        'required'
                                        )
                                    ) 
                                !!}
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="col-lg-6">

                            <div class="form-group">
                                {!! Form::label('Email') !!}
                                {!! Form::text('email', $usuario->email, 

                                            ['class'=>'form-control required', 
                                            'placeholder'=>'Digite uma acesso',
                                            'data-error'=>"Bruh, that email address is invalid",
                                            'required']
                                        
                                    ) 
                                !!}
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>
                    <div class='row'>
                        <div class="col-lg-6">

                            <div class="form-group">
                                {!! Form::label('Senha') !!}
                                {!! Form::password('password', array('class'=>'form-control')) !!}
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

