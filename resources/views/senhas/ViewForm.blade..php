
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-12">
                    {{ Form::open(array('url' => 'senhas/envia', 'method' => 'post')) }}

                    @if(Auth::user()->tipo == 1)
                    <div class="col-lg-4">
                        <div class="form-group">
                            {!! Form::label('Senha compartilhada?') !!}
                            {!! Form::checkbox('global', 'S', null, array()) !!}

                        </div>
                    </div>
                    @endif

                    @if(Auth::user()->tipo == 1)
                    <div class="col-lg-4">
                        <div class="form-group">
                            {!! Form::label('Usuário pode visualizar está senha?') !!}
                            {!! Form::checkbox('visualiza', 'S', null, array()) !!}

                        </div>
                    </div>
                    @endif

                    @if(Auth::user()->tipo == 2)
                    <div class="col-lg-4" style='display: none'>
                        <div class="form-group">
                            {!! Form::label('Usuário pode visualizar está senha?') !!}
                            {!! Form::checkbox('visualiza', 'S', null, array('checked'=>'checked')) !!}                                    
                        </div>
                    </div>
                    @endif



                </div>

                <div class="col-lg-12">
                    @if(Auth::user()->tipo == 1)
                    <div class="form-group">

                        {!! Form::label('Usuário') !!}
                        {!! Form::select('user_id', $users, Auth::user()->id, array('required', 'class'=>'form-control')) !!}

                    </div>
                    @endif
                    @if(Auth::user()->tipo == 2)
                    <div class="form-group"  style='display: none'>

                        {!! Form::label('Usuário') !!}
                        {!! Form::text('user_id', Auth::user()->id, array('required', 'class'=>'form-control')) !!}

                    </div>
                    @endif
                </div>

                <div class="col-lg-4">

                    <div class="form-group">
                        {!! Form::label('Acessos') !!}
                        {!! Form::select('acesso_id', $acessos, null, array('required', 'class'=>'form-control')) !!}
                    </div>
                </div>

                <div class="col-lg-4">

                    <div class="form-group">
                        {!! Form::label('Login') !!}
                        {!! Form::text('login', null, array('required', 'class'=>'form-control', 'placeholder'=>'Digite um login')) !!}
                    </div>
                </div>

                <div class="col-lg-4">

                    <div class="form-group">
                        {!! Form::label('Senha') !!}
                        {!! Form::text('pwd', null, array('class'=>'form-control', 'placeholder'=>'Digite uma senha')) !!}
                    </div>
                </div>

                <div class="col-lg-12">

                    <div class="form-group">
                        {!! Form::label('Observação') !!}
                        {!! Form::textarea('obs', null, array('class'=>'form-control')) !!}
                    </div>

                </div>

            </div>



        </div>
        <div class="deleteContent">
            Deletar <strong><span class="dname"></span></strong> ? <span
                class="hidden did"></span>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn actionBtn" data-dismiss="modal">
                {!! Form::submit('Editar', array('class'=>'btn btn-success ')) !!}
            </button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">
                <span class='glyphicon glyphicon-remove'></span> Fechar
            </button>
        </div>

        {{ Form::close() }}
    </div>
</div>

