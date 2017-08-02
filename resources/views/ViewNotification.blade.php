<div class="col-lg-12">
    <div class="panel panel-default effect2">

        
        <div class="panel-heading">
            <i class="fa fa-bell fa-fw"></i> Notificações
        </div>
        @foreach ($notificacaoLst as $key => $notificacao)
        <div class="panel-body">
            <div class="list-group">
                <a href="#" class="list-group-item">
                    <i class="fa fa-tasks fa-fw"></i>  <strong>{{$notificacao['Title']}}</strong> - {{$notificacao['Notificacao']}}
                    <span class="pull-right text-muted small"><em>Adicionado em {{$notificacao['Data']}}</em>
                    </span>
                </a>

            </div>

        </div>
        @endforeach
    </div>
</div>