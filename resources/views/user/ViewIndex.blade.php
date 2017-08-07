@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> {{$title}}</h1>
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