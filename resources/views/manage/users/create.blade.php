@extends('layouts.app')
  <head>
    <title>Manage Users | Create User</title>
  </head>
@section('content')


      <div class="row  m-t-10">

        <section class="content-header">
          <h1 class="col-md-4">Create User</h1>
          <div class="pull-right col-md-4">
            {{ Breadcrumbs::render('users') }}
          </div>
        </section>
      </div>

      <div class="row">

      <div class="col-md-10 m-t-30">

        <form class="form-horizontal" action="{{route('users.store')}}" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-10">
              <input type="text" name="name" class="form-control" id="name">
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">E-mail Address</label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" id="email">
            </div>
          </div>

          <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="password" id="password" v-if="!auto_password"
                 placeholder="Manually give a password to this user">
                <input type="checkbox" name="auto-generate" v-model="auto_password">Auto Generate Password</input>
            </div>
          </div>

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

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-Success">Create</button>
            </div>
        </div>
        </form>

    </div>

  </div>



@endsection

@section('scripts')
  <script>
  var app = new Vue({
    el: '#app',
    data: {
      auto_password: true,
      rolesSelected: []
    }
  });
</script>
@endsection
