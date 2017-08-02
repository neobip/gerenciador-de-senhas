
{{ Form::open(array('url' => 'acessos/envia', 'method' => 'post')) }}


<div class="form-group">
    {!! Form::label('Acesso') !!}
    {!! Form::text('acesso', null, array('required', 'class'=>'form-control', 'placeholder'=>'Digite uma descrição do acesso')) !!}
</div>

<div class="form-group">
    {!! Form::label('Link') !!}
    {!! Form::text('link', null, array('required', 'class'=>'form-control', 'placeholder'=>'Digite uma descrição do acesso')) !!}
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

