@extends('ui.dashboard.master')

@section('content')
    <div class="container">
        <div class="row">
          @foreach( $user->clans as $clan )
            <div class="col-sm-12 panel panel-primary">
              <div class="panel-body">
                  <h4 class="card-title">{{ $clan->name }}</h4>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <a href="http://{{ $clan->subdomain }}.{{ request()->getHttpHost() }}" class="btn btn-primary">Admin Interface</a>
                </div>
            </div>
          @endforeach

          <div class="col-sm-12 panel panel-primary">
            <div class="panel-body">
                <h4 class="card-title">Create a new clan!</h4>
                <p class="card-text">Register your clan now!</p>
                <a href="{{ route('clans.create') }}" class="btn btn-primary">Let's Go!</a>
              </div>
          </div>

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
