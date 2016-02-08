@extends('layouts.app')

@section('title')
    Moderator Dashboard
@stop

@section('content')
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h1>Moderator Dashboard</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h3>All Accounts</h3>
            <hr>
            <table>
                <thead>
                    <tr>
                        <th>Steam ID</th>
                        <th>Username</th>
                        <th>Steam Password</th>
                        <th>Rank</th>
                        <th>Digits</th>
                        <th>Email</th>
                        <th>Email Password</th>
                        <th colspan="2">
                            <div class="box">
                              <div class="container-1">
                                  <span class="icon"><i class="fa fa-search"></i></span>
                                  <input type="search" id="search" placeholder="Search..." />
                              </div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($steam_accounts->where('active', 1) as $steam_account)
                        <tr>
                            <td>{{ $steam_account->steam_id }}</td>
                            <td>{{ $steam_account->username }}</td>
                            <td>{{ $steam_account->password }}</td>
                            <td>{{ $steam_account->rank->rank }}</td>
                            <td>{{ $steam_account->rank->rank }}</td>
                            <td>{{ $steam_account->rank->rank }}</td>
                            <td>{{ $steam_account->rank->rank }}</td>
                            <td><a href="accounts/{{$steam_account->username}}/edit" class="btn btn-info" role="button">Edit</a></td>
                            <td><a href="accounts/{{$steam_account->username}}/edit" class="btn btn-info" role="button">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ url('accounts/create') }}">Create new Account</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h3>Digits</h3>
            <hr>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th colspan="2">
                            <div class="box">
                              <div class="container-1">
                                  <span class="icon"><i class="fa fa-search"></i></span>
                                  <input type="search" id="search" placeholder="Search..." />
                              </div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($digits as $digit)
                        <tr>
                            <td>{{ $digit->digits }}</td>
                            <td><a href="digits/{{$digit->id}}/edit" class="btn btn-info" role="button">Edit</a></td>
                            <td><a href="digits/{{$digit->id}}/edit" class="btn btn-info" role="button">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ url('digits/create') }}">Create new Digit</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <h3>Ranks</h3>
            <hr>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th colspan="2">
                            <div class="box">
                              <div class="container-1">
                                  <span class="icon"><i class="fa fa-search"></i></span>
                                  <input type="search" id="search" placeholder="Search..." />
                              </div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ranks as $rank)
                        <tr>
                            <td>{{ $rank->rank }}</td>
                            <td><a href="ranks/{{$rank->id}}/edit" class="btn btn-info" role="button">Edit</a></td>
                            <td><a href="ranks/{{$rank->id}}/edit" class="btn btn-info" role="button">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ url('ranks/create') }}">Create new Rank</a>
        </div>
    </div>
@stop