





<html><script src="chrome-extension://ljdobmomdgdljniojadhoplhkpialdid/page/prompt.js"></script><script src="chrome-extension://ljdobmomdgdljniojadhoplhkpialdid/page/runScript.js"></script><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Orion Tech Resources | Forgot Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  

  <link rel="stylesheet" href="/css/app.css">
</head>
<body class="login-page" style="min-height: 348.391px;">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Retrive your password</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

     
      <form method="POST" action="{{ url('/forgot_password') }}">
      @csrf
        <div class="input-group mb-3">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
           
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Request new password') }}
            </button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mt-3 mb-1">
        <a href="/login">Login</a>
      </p>
      <p class="mb-0">
        <a href="/register" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>



</body></html>

