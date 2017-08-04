@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> {{$title}}</h1>
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
        <div class='pull-right'>
            {!! $btnAdd !!}
        </div>
        

        <div class="col-lg-12" style='margin-top: 30px;'>
            {!! $htmlGrid !!}

        </div>
    </div>
</div>

@endsection