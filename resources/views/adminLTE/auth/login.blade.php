<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <title>{{ config('app.name', 'AdminYDd') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('themes/admin_lte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('themes/admin_lte/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('themes/admin_lte/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!--Theme style -->
  <link rel="stylesheet" href="{{ asset('themes/admin_lte/css/AdminLTE.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>{{ __('Admin') }}</b>{{ __('YD') }}</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">{{ __('开启  美好的一天')}}</p>

    <form action="{{ route('login') }}" method="post">
      @csrf

      <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
        <input name="email" type="email" class="form-control" value="{{ old('email') }}" placeholder="{{__('邮箱')}}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback "></span>
      </div>
      <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : ''}}" required>
        <input name="password" value="" type="password" class="form-control" placeholder="{{__('密码')}}">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> {{ __('记住密码') }}
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('登 录') }}</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-fw fa-qq"></i> QQ登录</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-fw fa-weixin"></i> 微信登录</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset('themes/admin_lte/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('themes/admin_lte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- iCheck -->
<script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

</body>
</html>