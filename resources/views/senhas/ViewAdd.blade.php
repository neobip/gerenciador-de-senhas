{{ Form::open(array('url' => 'senhas/envia', 'method' => 'post')) }}

<div class="form-group">
    @if(Auth::user()->tipo == 1)
    <div class="col-lg-4">
        {!! Form::label('Compartilhada?') !!}
        {!! Form::checkbox('global', 'S', null, array()) !!}

    </div>

    <div class="col-lg-4">
        {!! Form::label('Visualiza senha?') !!}
        {!! Form::checkbox('visualiza', 'S', null, array()) !!}
    </div>
    @endif

    @if(Auth::user()->tipo == 2)
    <div class="col-lg-4" style='display: none'>
        {!! Form::label('Compartilhada?') !!}
        {!! Form::checkbox('global', 'S', null, array()) !!}
    </div>

    <div class="col-lg-4" style='display: none'>

        {!! Form::label('Visualiza senha?') !!}
        {!! Form::checkbox('visualiza', 'S', null, array('checked'=>'checked')) !!}                                    
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
</div>


<div class="col-lg-12">
    @if(Auth::user()->tipo == 2)
        <div class="form-group " style='display: none'>

            {!! Form::label('Usuário') !!}
            {!! Form::text('user_id', Auth::user()->id, array('required', 'class'=>'form-control')) !!}

        </div>
    @endif
</div>

<div class="form-group">

    <div class="col-lg-4">
        {!! Form::label('Acessos') !!}
        {!! Form::select('acesso_id', $acessos, null, array('required', 'class'=>'form-control')) !!}
    </div>

    <div class="col-lg-4">
        {!! Form::label('Login') !!}
        {!! Form::text('login', null, array('required', 'class'=>'form-control', 'placeholder'=>'Digite um login')) !!}
    </div>

    <div class="col-lg-4">
        {!! Form::label('Senha') !!}
        {!! Form::text('pwd', null, array('class'=>'form-control', 'placeholder'=>'Digite uma senha')) !!}
    </div>

</div>



<div class="form-group">

    {!! Form::label('Observação') !!}
    {!! Form::textarea('obs', null, array('class'=>'form-control')) !!}
</div>

{{ Form::close() }}
<div class="modal-footer">
    <button type="button" class="btn actionBtn" data-dismiss="modal">
        <span id="footer_action_button" class='glyphicon'> </span>
    </button>

    <button id=''type="button" class="btn btn-warning" data-dismiss="modal">
        <span class='glyphicon glyphicon-remove'></span> Cancelar
    </button>
</div>



