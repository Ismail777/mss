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
                    <small>Reset Password</small>
                </div>
            </div>
            <!-- end brand -->
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif


            <div class="login-content">
                <form action="{{route('password.email')}}" method="POST" class="margin-bottom-0">
                  {{ csrf_field() }}

                    <div class="form-group m-b-20" {{ $errors->has('email') ? ' has-error' : '' }}>
                        <input type="text" class="form-control input-lg" name="email" placeholder="Email Address" value="{{ old('email') }}"
                        required autofocus/>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Send Reset Link</button>
                    </div>

                </form>
            </div>
        </div>
        <!-- end login -->

{{--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
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
