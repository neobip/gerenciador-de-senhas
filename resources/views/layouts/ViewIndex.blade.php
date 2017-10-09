@extends('layouts.app')

@section('content')

<script type="text/javascript">
        setTimeout(function() {
            $("#alerta").fadeOut(300);
        }, 5000);
</script>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> {{$title}}</h1>

        </div>

        <div id = 'alerta' class = "publl-right col-lg-4" style = 'margin-top: 20px; margin-left: 570px; position: absolute'>
            @if(Session::has('success'))
            <div class = "alert alert-success alert-block">
                <button type = "button" class = "close" data-dismiss = "alert">×</button>
                <strong>{{Session::get('success')}}</strong>
            </div>
            @endif
            @if(Session::has('info'))
            <div class = "alert alert-info alert-block">
                <button type = "button" class = "close" data-dismiss = "alert">×</button>
                <strong>{{Session::get('info')}}</strong>
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