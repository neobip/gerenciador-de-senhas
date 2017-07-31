@extends('layouts.app')

@section('content')

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">

            <h1 class="page-header"><i class='fa fa-lock'></i> Geral</h1>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green effect2">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-lock fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$qtdSenhas}}</div>
                            <div>Senhas cadastradas!</div>
                        </div>
                    </div>
                </div>
                <a href="{{route('senha')}}">
                    <div class="panel-footer">
                        <span class="pull-left">Visualizar senhas</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>


        @include('ViewNotification')

    </div>
    <!-- /.panel .chat-panel -->
</div>

@endsection
