



<html><script src="chrome-extension://ljdobmomdgdljniojadhoplhkpialdid/page/prompt.js"></script><script src="chrome-extension://ljdobmomdgdljniojadhoplhkpialdid/page/runScript.js"></script><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="/css/app.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b>Register</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form method="POST" action="{{ route('register') }}">
                        @csrf
      <div class="form-group has-feedback">
      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Middle name" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback">
      <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" placeholder="Last Name" name="lastName" value="{{ old('lastName') }}" required autofocus>

            @if ($errors->has('lastName'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('lastName') }}</strong>
                </span>
            @endif
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback">
      <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" placeholder="First Name" name="firstName" value="{{ old('firstName') }}" required autofocus>

            @if ($errors->has('lastName'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('lastName') }}</strong>
                </span>
            @endif
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback">
      <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback">
      <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="Phone" name="phone" value="{{ old('phone') }}" required autofocus>

                @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback">
      <select class="form-control" id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" placeholder="Country" name="country" value="{{ old('country') }}" required autofocus>
            <option>Country</option>
            <option>Nigeria</option>
            <option>USA</option>
            <option>Canada</option>
            <option>Cameroon</option>
       </select>
       </div>


       <div class="form-group has-feedback">
       <select class="form-control" id="type" type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" placeholder="Type" name="type" value="{{ old('type') }}" required autofocus>
            <option>Role.....</option>
            <option>Publisher</option>
            <option>Advertiser</option>
           
       </select>
       </div>


      <div class="form-group has-feedback">
     
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
                        
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback">
      <input id="password-confirm" type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label class="">
              <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"   ></ins></div> I agree to the <a href="#" data-toggle="modal" data-target="#myModal">terms</a>
            </label>
          </div>


        </div>
        <!-- /.col -->
        

        <div class="col-xs-4">
        <br><br>
        <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="/login" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Terms and Conditions</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">ok</button>
        
      </div>
    </div>
  </div>
</div>

<script src='/js/app.js'></script>


</body></html>