@extends('layouts.app')

@section('content')

@if(isset($elements['id']))
{!! $elements['id'] !!}
@endif

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Senhas</h1>

        </div>
    </div>

    @if($elements['tipo'] = 1)
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            {!! $elements['global'] !!}
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
            {!! $elements['visualiza'] !!}
        </div>
    </div>
    @endif

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            {!! $elements['user'] !!}
        </div>

    
        <div class="col-xs-6 col-sm-6 col-md-6">
            {!! $elements['acessos'] !!}
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            {!! $elements['login'] !!}
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            {!! $elements['pwd'] !!}
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            {!! $elements['observacao'] !!}
        </div>
    </div>

</div>

@endsection
