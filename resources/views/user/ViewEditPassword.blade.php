@extends('layouts.app')

@section('content')

{{ Form::open(array('url' => 'usuarios/envia', 'method' => 'post')) }}
{!! Form::hidden('id', $usuario->id) !!}
{!! Form::hidden('tipo', $usuario->tipo) !!}
{!! Form::hidden('ativo',  $usuario->ativo) !!}
{!! Form::hidden('oidsigu', $usuario->oidsigu) !!}
{!! Form::hidden('email', $usuario->email) !!}

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
                    <div class="form-group">
                        {!! Form::label('Nome') !!}
                        {!! Form::text('name', $usuario->name, array('required', 'class'=>'form-control', 'placeholder'=>'Digite um login')) !!}

                    </div>


                    <div class="form-group">


                        {!! Form::label('Senha') !!}
                        {!! Form::password('password', array('class'=>'form-control')) !!}
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
{{ Form::close() }}
@endsection



