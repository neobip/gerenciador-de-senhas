
@extends('layouts.app')

@section('content')

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">

            <h1 class="page-header"><i class='{{$icon}}'></i> {{$title}}</h1>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                
                <div class="panel-body card-box effect3">

                    <!--<div class="card-box effect3">-->
                    <div class="row ">
                        <div class="col-lg-12 ">


                            {!! $formulario !!}
                        </div>
                    </div>
                    <!--</div>-->
                </div>
            </div>
        </div>

    </div>

</div>

<div class="deleteContent">
</div>

<script>
    $(document).ready(function () {
        $('.select2').select2();
    });
</script>


@endsection
