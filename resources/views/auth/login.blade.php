@extends('layouts.app')

@section('content')

<style>
    body {
        /*    font-family: Open Sans;
            font-size: 14px;*/
        line-height: 1.42857;
        background: #333333;
        height: 350px;
        padding: 0;
        margin: 0;
    }

    /*    .oaerror {
            width: 90%;  Configure it fit in your design  
            margin: 0 auto;  Centering Stuff 
            background-color: #FFFFFF;  Default background 
            padding: 20px;
            border: 1px solid #black;
            border-left-width: 5px;
            border-radius: 3px;
            margin: 0 auto;
                    font-family: 'Open Sans', sans-serif;
                    font-size: 16px;
        }
    
        .info {
            border-left-color: #black;
            background-color: rgba(91, 192, 222, 0.1);
        }
    
        .info strong {
            color: #5bc0de;
        }*/
</style>
<div class="container" style="margin-top:20%">
    <div class="col-md-4 col-md-offset-4">


        <div class="panel panel-default">

            <div class="panel-heading">
                <img class="img-responsive" style="margin: auto" src="http://www.uneworld.com.br/ImagensCapa/logo_novo.png"> 

                <div style="float:right; font-size: 80%; position: relative; top:-10px; display: none"><a class="btn btn-link" href="{{ route('password.request') }}">Esqueceu sua senha?</a></div>
            </div>
            <div class="panel-heading">
                <h3 class="panel-title" style='text-align: center'>

                    <i class='fa fa-lock' style='color: orange'></i> <strong >Gerenciador de senhas </strong>
                </h3>
            </div>

            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        <a class="close" data-dismiss="alert" href="#">×</a><strong>{{ $errors->first('email') }}</strong>
                    </div>
                    @endif

                    @if ($errors->has('password'))
                    <div class="alert alert-danger">
                        <a class="close" data-dismiss="alert" href="#">×</a><strong>{{ $errors->first('password') }}</strong>
                    </div>
                    @endif

                    @if(Session::has('info'))
                    <div class=' alert alert-info'>
                        <a class="panel-close close" data-dismiss="alert">×</a> 
                        {{Session::get('info')}}
                    </div>
                    @endif

                    <div style="margin-bottom: 12px" class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Digite seu e-mail" required autofocus>


                    </div>

                    <div style="margin-bottom: 12px" class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" placeholder="Digite sua senha" name="password" required>
                    </div>

                    <div class="input-group"  style='display: none'>
                        <div class="checkbox" style="margin-top: 0px;">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success pull-left col-lg-12">
                        Login
                    </button>
            </div>
        </div>
        </form>
    </div>
</div>

@endsection
