<div class="row">

    <div class="col-lg-12">
        {!! $fields['id'] !!} 

        @if(Auth::user()->tipo == 1)
        <div class="col-lg-4">
            <div class="form-group">
                {!! $fields['global'] !!} 

            </div>
        </div>
        @endif
    </div>

    <div class="col-lg-12">
        @if(Auth::user()->tipo == 1)
        <div class="form-group">

            {!! $fields['link'] !!}

        </div>
        @endif

    </div>
</div>

<script type="text/javascript">
    
    var data = [{id:0, text: 'aa'}];
    $(".select").select2({
        placeholder: "Selecione",
        data: data,
        
//        allowClear: true
    });
</script>

