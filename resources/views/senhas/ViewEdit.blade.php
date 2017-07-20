<script>
    $('#select').select2({
    });
</script>

{{ Form::open(array('url' => 'senhas/envia', 'method' => 'post', 'class'=>'form-horizontal formulario', 'data-toggle'=>'validator')) }}
{!! Form::hidden('id', $senhas['ID']) !!}

@if(Auth::user()->tipo == 1)

<div class="form-group">
    <div class="col-lg-12">
        <div class="col-lg-4">
            {!! Form::label('Compartilhada?') !!}

            @if($senhas['Global']=='S')
            {!! Form::checkbox('global', 'S', null, array('checked'=>'checked')) !!}
            @else
            {!! Form::checkbox('global', 'S', null, array()) !!}
            @endif

        </div>


        @endif

        @if(Auth::user()->tipo == 1)
        <div class="col-lg-4">
            {!! Form::label('Visualiza senha?') !!}
            @if($senhas['Visualiza']=='S')
            {!! Form::checkbox('visualiza', 'S', null, array('checked'=>'checked')) !!}
            @else
            {!! Form::checkbox('visualiza', 'S', null, array()) !!}
            @endif

        </div>
    </div>
</div>
@endif


<div class="form-group">
    @if(Auth::user()->tipo == 1)
    <div class="col-lg-12">

        {!! Form::label('Usuário') !!}
        {!! Form::select('user_id', $users, $senhas['UserID'], array('required','id'=>'select', 'class'=>'form-control')) !!}

        @endif

    </div>
</div>




<div class="form-group">
    <div class="col-lg-12">
        <div class="col-lg-4">
            {!! Form::label('Acesso') !!}
            {!! Form::select('acesso_id', $acessos, $senhas['AcessoID'], array('required', 'id'=>'select','class'=>'form-control')) !!}
        </div>


        <div class="col-lg-4">

            {!! Form::label('Login') !!}
            {!! Form::text('login', $senhas['Login'], array('required', 'class'=>'form-control', 'placeholder'=>'Digite um login')) !!}
            <div class="help-block with-errors"></div>
        </div>

        <div class="col-lg-4">


            {!! Form::label('Senha') !!}
            {!! Form::text('pwd', $senhas['Senha'], array('class'=>'form-control', 'placeholder'=>'Digite uma senha')) !!}
        </div>
    </div>
</div>

<div class="form-group">

    <div class="col-lg-12">
        {!! Form::label('Observação') !!}
        {!! Form::textarea('obs', $senhas['Observacao'], array('class'=>'form-control')) !!}
    </div>
</div>


{{ Form::close() }}

<div class="deleteContent">

</div>
<div class="modal-footer">
    <button type="button" class="btn actionBtn" data-dismiss="modal">
        <span id="footer_action_button" class='glyphicon'> </span>
    </button>

    <button id=''type="button" class="btn btn-warning" data-dismiss="modal">
        <span class='glyphicon glyphicon-remove'></span> Cancelar
    </button>
</div>




