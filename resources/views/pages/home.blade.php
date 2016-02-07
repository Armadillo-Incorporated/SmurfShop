@extends('layouts.app')

@section('header')
      <div class="jumbotron">
        <h1>Welcome to Smurf Shop!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fringilla justo ex, non bibendum eros porttitor nec. Aenean tempor a urna a cursus. Cras quis consectetur tellus. Aliquam tempus dolor turpis, a imperdiet dolor feugiat non. Phasellus vel nunc ac leo mollis maximus non vel nisi. Curabitur vel justo ut nulla convallis venenatis quis id dui. Sed ornare dapibus auctor.</p>
      </div>
@stop

@section('content')

    <!-- Early beta alert -->
    <div class="alert alert-dismissible alert-warning">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <h4>Heads up!</h4>
        <p>Website is still in a really early beta stage, if you have any problem you can contact us through our <a href="#" class="alert-link">support system</a>.</p>
    </div>

    <div class="well bs-component">
        <h3>CS:GO Accounts<a class="btn btn-primary pull-right" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="csgoaccs">Buy now</a></h3>
        <div class="collapse" id="csgoaccs">
        <div class="well">
            <h4>Private Rank 3 <a href="#" class="btn btn-info pull-right" role="button">Buy now</a></h4>
            </div>
        </div>
    </div>
    
    <div class="well bs-component">
    <h3>Low Digit Accounts<a class="btn btn-primary pull-right" role="button" data-toggle="collapse" href="#lowdig" aria-expanded="false" aria-controls="lowdig">Buy now</a></h3>
    <div class="collapse" id="lowdig">
    <h4>6 Digit<a href="#" class="btn btn-info pull-right" role="button">Buy now</a></h4>
    <br />
    <h4>7 Digit<a href="#" class="btn btn-info pull-right" role="button">Buy now</a></h4>
    </div>
    </div>

  @include('partials.modal')
@endsection
