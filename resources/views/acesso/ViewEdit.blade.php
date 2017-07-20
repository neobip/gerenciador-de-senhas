{{ Form::open(array('url' => 'acessos/envia', 'method' => 'post')) }}
{!! Form::hidden('id', $acessos->id) !!}

<div class="form-group">

    {!! Form::label('Acesso') !!}
    {!! Form::text('acesso', $acessos->acesso, array('required', 'class'=>'form-control', 'placeholder'=>'Digite um login')) !!}

</div>

<div class="form-group">

    {!! Form::label('Link') !!}
    {!! Form::text('link', $acessos->link, array('required', 'class'=>'form-control', 'placeholder'=>'Digite uma acesso')) !!}
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

