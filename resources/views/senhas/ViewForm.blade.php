<div class="panel-body">
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

    

        <div class="col-lg-4">

            <div class="form-group">
                {!! Form::label('Login') !!}
                {!! Form::text('login', null, array('required', 'class'=>'form-control', 'placeholder'=>'Digite um login')) !!}
            </div>
        </div>

        <div class="col-lg-4">

            <div class="form-group">
                {!! Form::label('Senha') !!}
                {!! Form::text('pwd', null, array('required', 'class'=>'form-control', 'placeholder'=>'Digite uma senha')) !!}
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                {!! Form::label('Quem vizualiza senha') !!}
                {!! Form::text('login', null, array('class'=>'form-control', 'placeholder'=>'Selecione quais usuários podem visualizar a senha')) !!}
            </div>

            <div class="form-group">
                {!! Form::label('Observação') !!}
                {!! Form::textarea('obs', null, array('class'=>'form-control')) !!}
            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            {!! Form::submit('Salvar', array('class'=>'btn btn-success pull-right')) !!}
            {{ Form::close() }}
        </div>
    </div>
</div>
