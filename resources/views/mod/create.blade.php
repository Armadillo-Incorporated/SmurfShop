@extends('layouts.app')

@section('title')
    Create Account
@stop

@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ url('/accounts') }}">
    {!! csrf_field() !!}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Steam Account</div>
                <div class="panel-body">
                    <div class="form-group{{ $errors->has('steam_id') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Steam ID</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="steam_id" value="{{ old('steam_id') }}">

                            @if ($errors->has('steam_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('steam_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Username</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}">

                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('steam_password') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="steam_password">

                            @if ($errors->has('steam_password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('steam_password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('steam_password_confirmation') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="steam_password_confirmation">

                            @if ($errors->has('steam_password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('steam_password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('digits') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Number of digits</label>
                        
                        <div class="col-md-6">
                            <select name="digits">
                                @foreach ($digits as $digits)
                                    <option value="{{ $digits->digits }}">{{ $digits->digits }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('digits'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('digits') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('rank') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Rank</label>

                        <div class="col-md-6">
                            <select name="rank">
                                @foreach ($ranks as $rank)
                                    <option value="{{ $rank->rank }}">{{ $rank->rank }}</option>
                                @endforeach
                            </select>

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
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Email Account</div>
                <div class="panel-body">        
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>  
                    </div>

                    <div class="form-group{{ $errors->has('email_password') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="email_password">

                            @if ($errors->has('email_password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email_password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email_password_confirmation') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="email_password_confirmation">

                            @if ($errors->has('email_password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email_password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-8 col-md-offset-2">
            <button type="submit" class="btn btn-primary" style="width: 100%">
                <i class="fa fa-btn fa-user"></i>Create
            </button>
        </div>                      
    </div>
</form>
@stop