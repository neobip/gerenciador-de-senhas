<div class="col-lg-7">
    <div class="panel panel-default effect3">


        <div class="panel-heading">
            <i class="fa fa-bell fa-fw"></i> Notificações
        </div>

        <div class="panel-body">
            <div class="list-group">
                @foreach ($notificacaoLst as $key => $notificacao)
                <a href="#" class="list-group-item">
                    <i class="fa fa-tasks fa-fw"></i>  <strong>{{$notificacao['Title']}}</strong> - {{$notificacao['Notificacao']}}
                    <span class="pull-right text-muted small"><em>Adicionado em {{$notificacao['Data']}}</em>
                    </span>
                </a>
                @endforeach

            </div>

        </div>

    </div>
</div>

<div class="col-lg-5">
    <div class="panel panel-default effect3">


        <div class="panel-heading">
            <i class="fa fa-user fa-fw"></i> Contatos senhas
        </div>

        <div class="panel-body">
            <div class="list-group">
                @foreach ($contatosLst as $key => $contatos)

                <a href="#" class="list-group-item">
                    <strong>{{$contatos->titulo}}</strong> - {{$contatos->nome}} - {{$contatos->email}} {{$contatos->telefone}}

                </a>
                @endforeach

            </div>

        </div>

    </div>
</div>