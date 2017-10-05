@extends('ui.system.index')

@section('content')
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ route('login') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
          <input name="email" id="email" type="email" class="form-control" value="{{ old('email') }}" placeholder="Email" required autofocus>
          @if ($errors->has('email'))
            <span class="glyphicon glyphicon-envelope form-control-feedback">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
          <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
          @if ($errors->has('password'))
              <span class="glyphicon glyphicon-lock form-control-feedback">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif

        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <a href="{{ route('password.request') }}">I forgot my password</a>

@endsection
