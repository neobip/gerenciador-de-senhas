<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Gerenciador Uneworld</title>

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <script src="{{ asset('js/jquery.min.js') }}"></script>
    </head>
    <body>
        <div>
            <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
            <link href="{{ asset('css/morrisjs/morris.css') }}" rel="stylesheet">
            <link href="{{ asset('css/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
            <link href="{{ asset('css/principal.css') }}" rel="stylesheet">

            <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">


            <link href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
            <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
        </div>
        <div id="wrapper">
            @if (!Auth::guest())
            @include('navbar')
            @endif


            @yield('content')
        </div>

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('js/morrisjs/morris.min.js') }}"></script>
        <script src="{{ asset('js/sb-admin-2.js') }}"></script>
        <script src="{{ asset('js/select2.min.js') }}"></script>

        <script src="{{ asset('js/modal.js') }}"></script>


        <script src="{{ asset('js/toastr.min.js') }}"></script>
        <script src="{{ asset('js/principal.js') }}"></script>
                <script src="{{ asset('Browser/control.js') }}"></script>


    </body>
</html>
