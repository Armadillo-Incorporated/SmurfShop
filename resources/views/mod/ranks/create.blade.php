@extends('layouts.app')

@section('title')
Create Rank
@stop

@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ url('/ranks') }}">
    {!! csrf_field() !!}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Rank</div>
                <div class="panel-body">
                    <div class="form-group{{ $errors->has('rank') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="rank" value="{{ old('rank') }}" placeholder="Ex: Private Rank 3">

                            @if ($errors->has('rank'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('rank') }}</strong>
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