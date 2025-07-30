
    <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('AdminTemplate/plugins/iCheck/square/blue.css')}}">

  <link rel="stylesheet" href="{{ asset('mycss/styles.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition login-page" style="background-image: url('{{ asset('images/loginImg.jpg') }}')">
  
<div class="login-box">
  <div class="login-logo">
    <a href=""><b style="font-family: 'logoFont'; font-size: 16px;">INFOLAHTADAM IX/UDY</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <img src="{{ asset('images/logo_inloahtanew2.png') }}" class="img-responsive center-block" width="100" alt="Centered Image">
     <a href=""><b style="font-family: 'logoFont'; font-size: 16px; text-align: center">INFOLAHTADAM IX/UDY</b></a>
    <p class="login-box-msg">Sign in</p>

    @if ($errors->has('email'))
    <span class="text-danger">{{ $errors->first('email') }}</span>
@endif
    <form action="{{ route('login.authenticate') }}" method="post">
            @csrf
            
      <div class="form-group has-feedback">
        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="form-group">
              <div class="captcha">
                <span> {!! captcha_img() !!} </span>
                <button type="button" class="btn btn-danger pull-right reload" id="reload">&#x21bb;</button>
              </div>
            </div>

            <div class="form-group  mt-2">
                <input type="text" class="form-control" name="captcha" placeholder="captcha">
                @error('captcha')
                  <label for="" class="text-danger">{{ $message }}</label>
                  
                @enderror
            </div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input name="remember" value="remember" type="checkbox"> Remember Me
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

    {{-- <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a> --}}

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="{{ asset('AdminTemplate/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('AdminTemplate/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{ asset('AdminTemplate/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });

  $('#reload').click(function(){
    $.ajax({
      type:'GET',
      url:'reload-captcha',
      success:function(data){
        $(".captcha span").html(data.captcha)
      }
    })
  })
</script>
</body>
</html>
