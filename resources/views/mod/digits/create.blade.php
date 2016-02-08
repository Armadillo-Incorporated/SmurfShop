@extends('layouts.app')

@section('title')
Create Digits
@stop

@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ url('/digits') }}">
    {!! csrf_field() !!}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Digits</div>
                <div class="panel-body">
                    <div class="form-group{{ $errors->has('digits') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="digits" value="{{ old('digits') }}" placeholder="Ex: 7">

                            @if ($errors->has('digits'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('digits') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <button type="submit" class="btn btn-primary" style="width: 100%">
            <i class="fa fa-plus"></i>  Create
        </button>
    </div> 
</form>
@stop