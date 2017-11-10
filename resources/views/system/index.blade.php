<!DOCTYPE html>
<html>
@include('ui.dashboard.partials.head')
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="{{ route('home') }}">{{ config('app.name') }}</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
    @yield('content')
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>
</html>
