
@extends('layouts.app')

@section('content')


<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="page-title-box">
                        <h4 class="page-title float-left"> {{$title}}</h4>

                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="#">Geral</a></li>
                            <li class="breadcrumb-item active"> {{$title}}</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card-box effect3">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="header-title m-t-0"></h4>

                                {!! $formulario !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="deleteContent">
</div>



@endsection
