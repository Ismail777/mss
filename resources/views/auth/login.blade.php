@extends('layouts.login')
<head>
  <title>MSS | Login</title>
  <style media="screen">
    body {
      background-repeat: no-repeat;
      background-size: cover;
      background-image: url({{asset('img/login_new.png')}});
    }
    .container {
      height: 100%;
      width: 90%;
    }
    img.center {
    display: block;
    margin: 0 auto;
}
  </style>
</head>
@section('content')
<div class="container">
    <div class="row m-t-100">
        <div class="col-md-6 col-md-offset-7">
            <div class="panel panel-default transparent">
              <img src="{{asset('img/lg-icon.png')}}" alt="lg-icon" height="130" class="center image-responsive">
              <div class="panel-heading">
                <h2 class="text-center">Welcome To MSS</h2>
              </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control-login" name="email" placeholder="E-Mail Address"
                                value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        </div>

                        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control-login"
                                placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-pink btn-white btn-block btn-lg">
                                    Login
                                </button>
                                <hr>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
