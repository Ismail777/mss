@extends('layouts.login')
@section('content')
  <div class="login-cover">
      <div class="login-cover-image"><img src="{{asset('/img/login-bg/bg-7.jpg')}}" data-id="login-cover-image" alt="" /></div>
      <div class="login-cover-bg"></div>
  </div>

  <!-- begin #page-container -->
  <div id="page-container" class="container">

      <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated flipInX">
            <!-- begin brand -->

            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> Mykad Smart Shopper
                    <small>Register</small>
                </div>
            </div>
            <!-- end brand -->
            <div class="login-content">
                <form action="{{route('register')}}" method="POST" class="margin-bottom-0">
                  {{ csrf_field() }}

                    <div class="form-group m-b-20"{{ $errors->has('name') ? ' has-error' : '' }}>
                        <label for="name" class="control-label">Name</label>
                        <input type="text" class="form-control input-lg" name="name"value="{{ old('name') }}"
                        required autofocus/>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group m-b-20" {{ $errors->has('email') ? ' has-error' : '' }}>
                      <label for="email" class="control-label">E-mail Address</label>
                        <input type="text" class="form-control input-lg" name="email" required/>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group m-b-20" {{ $errors->has('password') ? ' has-error' : '' }}>
                      <label for="password" class="control-label">Password</label>
                        <input type="password" class="form-control input-lg"   name="password" required/>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group m-b-10">
                      <label for="password_confirmation" class="control-label">Password Confirmation</label>
                        <input type="password" class="form-control input-lg"  name="password_confirmation" required/>
                    </div>

                    </div>

                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Register</button>
                    </div>


                    <div class="m-t-20">
                        Already a member? Login <a href="{{route('login')}}">here.</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- end login -->


  <!-- end of container -->
  {{--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
--}}
@endsection
