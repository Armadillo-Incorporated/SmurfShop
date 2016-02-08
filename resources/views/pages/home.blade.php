@extends('layouts.app')

@section('header')
<div class="container">
    <div class="row">
        <div class="col-xs-offset-1 col-xs-10">
            <div class="jumbotron">
                <h1>Welcome to Smurf Shop!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla justo ex, non bibendum eros porttitor nec. Aenean tempor a urna a cursus. Cras quis consectetur tellus. Aliquam tempus dolor turpis, a imperdiet dolor feugiat non. Phasellus vel nunc ac leo mollis maximus non vel nisi. Curabitur vel justo ut nulla convallis venenatis quis id dui. Sed ornare dapibus auctor.</p>
            </div>
        </div>
    </div>
</div>
@stop

@section('content')

    <!-- Early beta alert -->
    <div class="row">
        <div class="col-xs-offset-1 col-xs-10">
            <div class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h4>Heads up!</h4>
                <p>Website is still in a really early beta stage, if you have any problem you can contact us through our <a href="#" class="alert-link">support system</a>.</p>
            </div>
        </div>
    </div>
    @foreach ($ranks as $rank)
    <div class="row">
        <div class="col-xs-offset-1 col-xs-10">
            <h3>{{ $rank->rank }}</h3>
            <hr>
            <div class="well bs-component">
                <div class="row">
                    @foreach ($rank->digits as $digits)
                        <div class="col-xs-12">
                            <table>
                                <h3>{{ $digits->digits }} Digit</h3>
                                <thead>
                                    <tr>
                                        <th>Steam ID</th>
                                        <th>Username</th>
                                        <th><i class="fa fa-shopping-cart"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($digits->steam_account->where('active', 1)->where('rank_id', $rank->id) as $steam_account)
                                        <tr>
                                            <td>{{ $steam_account->steam_id }}</td>
                                            <td>{{ $steam_account->username }}</td>
                                            <td><a href="#" class="btn btn-info" role="button">Buy now</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
