<!-- /.row -->

 
<div class="row">
    <div class="col-sm-12">
        @if(isset($elements['id']))
        {!! $elements['id'] !!}
        @endif

        @if(Auth::user()->tipo == 1)
        <div class="row">
            <div class="form-group">
                <div class="col-xs-3 col-sm-3 col-md-3">
                    {!! $elements['global'] !!}
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3">
                    {!! $elements['visualiza'] !!}
                </div>
            </div>
        </div>
        @endif

        <div class="row">
            <div class="form-group">
                @if(Auth::user()->tipo == 1)

                <div class="col-xs-6 col-sm-6 col-md-6">
                    {!! $elements['user_id'] !!}
                </div>
                @endif

                <div class="col-xs-6 col-sm-6 col-md-6">
                    {!! $elements['acesso_id'] !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    {!! $elements['login'] !!}
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    {!! $elements['pwd'] !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    {!! $elements['obs'] !!}
                </div>
            </div>
        </div>

        <div id='btn' style='margin-top: 20px'>
            <div class='pull-right'>
                {!! $elements['btnSave'] !!} {!! $elements['btnCancel'] !!}
            </div>
        </div>


    </div>
</div>
