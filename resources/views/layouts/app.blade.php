<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--<title>{{ config('app.name', 'Laravel') }}</title>-->
        <title>Gerenciador Uneworld</title>

        <!-- Styles -->
        <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/morrisjs/morris.css') }}" rel="stylesheet">
        <link href="{{ asset('css/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/principal.css') }}" rel="stylesheet">

        <!--        <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet">-->
        <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">


        <link href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
        <style>
            .btn {
                border-radius: 0px !important;
            }

            .effect1{
                -webkit-box-shadow: 0 10px 6px -6px #777;
                -moz-box-shadow: 0 10px 6px -6px #777;
                box-shadow: 0 10px 6px -6px #777;
            }

            .effect2:hover {
                -webkit-box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
                -moz-box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
                -ms-box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
                -o-box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            }

            .effect3 {
                -webkit-box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
                -moz-box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
                -ms-box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
                -o-box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
                box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            @if (!Auth::guest())
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Gerenciador </a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <!--<a class="dropdown-toggle" data-toggle="dropdown" href="#">-->
                            <!--<i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>-->
                        <!--</a>-->
                        <!--<ul class="dropdown-menu dropdown-messages">-->
                        <!--<li>-->
                        <!--<a href="#">-->
                        <!--<div>-->
<!--                                        <strong>John Smith</strong>
                            <span class="pull-right text-muted">
                                <em>Yesterday</em>
                            </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                    </a>
                </li>
                <li class="divider"></li>
                <li>-->
                        <!--                                <a href="#">
                                                            <div>
                                                                <strong>John Smith</strong>
                                                                <span class="pull-right text-muted">
                                                                    <em>Yesterday</em>
                                                                </span>
                                                            </div>
                                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                                        </a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">
                                                            <div>-->
                        <!--                                        <strong>John Smith</strong>
                                                                <span class="pull-right text-muted">
                                                                    <em>Yesterday</em>
                                                                </span>
                                                            </div>
                                                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                                        </a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>-->
                        <!--                                <a class="text-center" href="#">
                                                            <strong>Read All Messages</strong>
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>-->
                        <!-- /.dropdown-messages -->
                        <!--</li>-->
                        <!-- /.dropdown -->
                        <!--                    <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                    <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-tasks">
                                                    <li>
                                                        <a href="#">
                                                            <div>
                                                                <p>
                                                                    <strong>Task 1</strong>
                                                                    <span class="pull-right text-muted">40% Complete</span>
                                                                </p>
                                                                <div class="progress progress-striped active">
                                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                                        <span class="sr-only">40% Complete (success)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">
                                                            <div>
                                                                <p>
                                                                    <strong>Task 2</strong>
                                                                    <span class="pull-right text-muted">20% Complete</span>
                                                                </p>
                                                                <div class="progress progress-striped active">
                                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                                        <span class="sr-only">20% Complete</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">
                                                            <div>
                                                                <p>
                                                                    <strong>Task 3</strong>
                                                                    <span class="pull-right text-muted">60% Complete</span>
                                                                </p>
                                                                <div class="progress progress-striped active">
                                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                                        <span class="sr-only">60% Complete (warning)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">
                                                            <div>
                                                                <p>
                                                                    <strong>Task 4</strong>
                                                                    <span class="pull-right text-muted">80% Complete</span>
                                                                </p>
                                                                <div class="progress progress-striped active">
                                                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                                        <span class="sr-only">80% Complete (danger)</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a class="text-center" href="#">
                                                            <strong>See All Tasks</strong>
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>-->
                        <!-- /.dropdown-tasks -->
                        <!--</li>-->
                        <!-- /.dropdown -->
                        <!--                    <li class="dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-alerts">
                                                    <li>
                                                        <a href="#">
                                                            <div>
                                                                <i class="fa fa-comment fa-fw"></i> New Comment
                                                                <span class="pull-right text-muted small">4 minutes ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">
                                                            <div>
                                                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                                                <span class="pull-right text-muted small">12 minutes ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">
                                                            <div>
                                                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                                                <span class="pull-right text-muted small">4 minutes ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">
                                                            <div>
                                                                <i class="fa fa-tasks fa-fw"></i> New Task
                                                                <span class="pull-right text-muted small">4 minutes ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#">
                                                            <div>
                                                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                                                <span class="pull-right text-muted small">4 minutes ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a class="text-center" href="#">
                                                            <strong>See All Alerts</strong>
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                 /.dropdown-alerts 
                                            </li>-->
                        <!-- /.dropdown -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
<!--                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            -->                        

                            <li>
                                {{ Html::linkAction('UserController@editPasswordForm', 
                                                'Mudar senha', 
                                                array(
                                                    'id'=>Auth::user()->id
                                                ), 
                                                array(
//                                                    'class' => 'edit-modal',
//                                                    'data-toggle'=>'modal',
//                                                    'data-name'=>'edit-modal',
//                                                    'data-target'=> 'usuarios',
//                                                    'name'=>Auth::user()->name,
//                                                    'data-id'=>Auth::user()->id,
                                                )
                                            ) 
                                    }}
                
                                <!--{{ Html::linkAction('UserController@editPasswordForm', ' Mudar Senha', array('data-id'=>Auth::user()->id, 'data-name'=>Auth::user()->name),null, array('class' => 'edit-modal')) }}-->
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    Sair
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <!--                            <li class="sidebar-search">
                                                            <div class="input-group custom-search-form">
                                                                <input type="text" class="form-control" placeholder="Search...">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button">
                                                                        <i class="fa fa-search"></i>
                                                                    </button>
                                                                </span>
                                                            </div>
                                                             /input-group 
                                                        </li>-->
                            <li>
                                {{ Html::linkAction('HomeController@index', ' Geral', null, array('class' => 'fa fa-dashboard')) }}
                            </li>

                            @if(Auth::user()->tipo == 1)
                            <li>

                                {{ Html::linkAction('AcessoController@index', ' Acessos', null, array('class' => '')) }}
                            </li>
                            <li>

                                {{ Html::linkAction('UserController@index', ' Usuários', null, array('class' => 'fa fa-user')) }}
                            </li>
                            @endif

                            <li>
                                <a href="#"><i class="fa fa-lock"></i> Senhas<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        {{ Html::linkAction('SenhasController@index', ' Minhas Senhas', null, array('class' => '')) }}
                                    </li>
                                    <!--                                    <li>
                                                                            <a href="morris.html">Solicitar senha</a>
                                                                        </li>-->
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            @endif


            @yield('content')
        </div>

        <!-- Scripts -->
        <!--<script src="{{ asset('js/app.js') }}"></script>-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!--<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>-->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('js/morrisjs/morris.min.js') }}"></script>
        <script src="{{ asset('js/sb-admin-2.js') }}"></script>
        <script src="{{ asset('js/select2.min.js') }}"></script>
<!--        <script src="{{ asset('js/datatables.min.js') }}"></script>-->

        <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('js/modal.js') }}"></script>
        <script src="{{ asset('js/toastr.min.js') }}"></script>
        <script src="{{ asset('js/validator.min.js') }}"></script>
        <script src="{{ asset('js/principal.js') }}"></script>

    </body>
</html>
