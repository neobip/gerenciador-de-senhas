@extends('layouts.app')

@section('content')

<script type="text/javascript">
//    setInterval(function () {
    setTimeout(function () {
        $("#alerta").fadeOut();
//        $("#alerta").fadeIn();
    }, 5000);
</script>

<div class="row" >
    <div id = 'alerta' class = "" style = 'width: 100%; margin-top: -30px; position: absolute; z-index: 9999;opacity: 0.8;'>
        @if(Session::has('success'))
        <div class = "alert alert-success alert-block col-lg-4" style='float: right; box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.5);' >
            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 
            <button type = "button" class = "close" data-dismiss = "alert">×</button>
            {{Session::get('success')}}
        </div>
        @endif
        @if(Session::has('info'))
        <div class = "alert alert-info alert-block col-lg-4" style='float: right; box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.5); ' >

            <i class="fa fa-info-circle" aria-hidden="true"></i>

            <button type = "button" class = "close" data-dismiss = "alert">×</button>
          {{Session::get('info')}}
        </div>
        @endif
    </div>
</div>

<div id="page-wrapper">


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="{!! $icon !!}" aria-hidden="true"></i> {{$title}}</h1>

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