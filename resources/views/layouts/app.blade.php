<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title', 'Smurf Shop')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/css/app.min.css" rel="stylesheet">
</head>
<body>
  <div class="wrapper">    
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">SmurfShop</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{ url('/') }}">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#" data-toggle="modal" data-target="#myModal">Support</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                    @if (!Auth::guest())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">My Accounts</a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#">Settings</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Moderator</li>
                                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ url('accounts/create') }}">Add Account</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    
    @yield('header')

    <div class="container">
      @yield('content')
    </div>
  </div>

    <footer>
      <p class="text-center"><a href="#">© Armadillo, Inc</a></p>

        <script src="/js/app.min.js"></script>
    </footer>

     @include('partials.modal')
</body>
</html>