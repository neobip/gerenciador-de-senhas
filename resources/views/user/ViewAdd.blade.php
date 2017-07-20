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
                    <div class="row">
                        <div class="col-lg-6">
                            {{ Form::open(array('url' => 'acessos/envia', 'method' => 'post')) }}
                            

                            <div class="form-group">
                                {!! Form::label('Acesso') !!}
                                {!! Form::text('nomeacesso', null, array('required', 'class'=>'form-control', 'placeholder'=>'Digite uma descrição do acesso')) !!}
                            </div>
                        </div>

                        <div class="col-lg-6">

                            <div class="form-group">
                                {!! Form::label('Link') !!}
                                {!! Form::text('link', null, array('required', 'class'=>'form-control', 'placeholder'=>'Digite um link')) !!}
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

