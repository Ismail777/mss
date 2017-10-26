@extends('layouts.app')
  <head>
    <title>Manage Users | Edit User: {{$user->id}}</title>
  </head>
@section('content')

  <div class="row  m-t-10">

    <section class="content-header">
      <h1 class="col-md-4">Create User</h1>
      <div class="pull-right col-md-4">
        {{ Breadcrumbs::render('user', $user) }}
      </div>
    </section>
  </div>

  <div class="row">

      <div class="col-md-10 m-t-30">

        <div class="panel panel-success">
          <div class="panel-body">
            {!! Form::model($user, ['route'=>['users.update', $user->id], 'method'=>'PUT']) !!}


              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Full Name</label>
                <div class="col-sm-10">
                  {{Form::text('name',null,['class'=>'form-control'])}}
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email Address</label>
                <div class="col-sm-10">
                  {{Form::text('email',null,['class'=>'form-control'])}}
                </div>
              </div>

                <label for="password" class="col-sm-2 control-label">Password</label>

                <div class="form-group col-md-7">

                  <label class="radio">
                    <input type="radio" name="password_options" id="radio1" value="keep" v-model="password_options"> Do Not Change Password
                  </label>
                  <label class="radio">
                    <input type="radio" name="password_options" id="radio2" value="auto" v-model="password_options"> Auto-generate A New Password
                  </label>
                  <label class="radio">
                    <input type="radio" name="password_options" id="radio3" value="manual" v-model="password_options"> Manually Set New Password
                  </label>

                  <input type="text" class="form-control" name="password" id="password" v-if="password_options=='manual'"
                  placeholder="Manually give a password to this user">

                </div>
                <hr>
                <div class="col-md-10">
                  <h3>Roles</h3>
                  <input type="hidden" name="roles" :value="rolesSelected">

                    @foreach ($roles as $role)
                    <div>
                      <label for="role" class="checkbox">
                        <input type="checkbox" name="role" value="{{$role->id}}" v-model="rolesSelected">{{$role->display_name}}
                      </label>
                    </div>
                    @endforeach

                </div>

                  <div class="col-sm-10">

                      <input type="submit" name="submit" value="Save Changes" class="btn btn-success btn-lg pull-right">
                    {!!Form::close()!!}
                  </div>
          </div>
        </div>


          </div> <!-- end of col -->
          </div> <!-- end of row -->







@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        password_options: 'keep',
        rolesSelected: {!! $user->roles->pluck('id') !!}
      }
    });
  </script>
@endsection
