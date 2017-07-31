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
                <a href="{{route('home')}}"><i class='fa fa-dashboard'></i> Geral</a>
            </li>

            @if(Auth::user()->tipo == 1)
            <li>
                <a href="{{route('acesso')}}"><i class='fa fa-bars'></i> Acessos</a>

            </li>
            <li>
                <a href="{{route('usuario')}}"><i class='fa fa-user'></i> Usuários</a>
            </li>
            @endif

            <li>
                <a href="#"><i class="fa fa-lock"></i> Senhas<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        {{ Html::linkAction('SenhasController@index', ' Minhas Senhas', null, array('class' => '')) }}
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>