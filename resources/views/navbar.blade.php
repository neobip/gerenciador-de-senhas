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
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                @foreach($notificacaoLst as $notificacao)
                <li>
                    <a href="#">
                        <div>
                            <strong>{{$notificacao->titulo}}</strong>
                            <span class="pull-right text-muted">
                                <em>{{$notificacao->created_at}}</em>
                            </span>
                        </div>
                        <div>{{$notificacao->notificacao}}</div>
                    </a>
                </li>
                @endforeach
            </ul>
        </li>            

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <strong>Bem vindo</strong>, {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-user">

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

    @include('menuleft')
    <!-- /.navbar-static-side -->
</nav>