@extends('layouts.app')

@section('content')

    <div class="row m-t-10">
      <div class="col-md-6">
        <h1 class="title">Create A New Role</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <form class="form" action="{{route('roles.store')}}" method="post">
      {{csrf_field()}}

    <div class="row">
        <div class="col">

                <h2 class="title">Role Details:</h2>

                <div class="form-group">
                    <label for="display_name" class="label-control">Name: (For Humans)</label>
                    <input type="text" name="display_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="name" class="label-control">Slug:</label>
                    <input type="text" name="name"  class="form-control">
                </div>

                <div class="form-group">
                    <label for="description" class="label-control">Description</label>
                    <input type="text" name="description"class="form-control">
                </div>

        </div>
            </div>

    <div class="row">
      <div class="col">
          <h2 class="title">Permissions:</h2>
              <ul class="list-group">
                @foreach ($permissions as $permission)
                  <li class="list-group-item bold">
                      <input type="checkbox" id="{{$permission->id}}"
                      value="{{$permission->id}}" v-model="permissionsSelected">
                      <label for="{{$permission->id}}">{{$permission->display_name}}
                      <em>{{$permission->description}}</em></label>
                  </li>
                @endforeach
              </ul>
        <input type="hidden" name="permissions" :value="permissionsSelected">
        <button name="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
    </form>



@endsection

@section('scripts')
  <script>
     var app = new Vue({
       el: '#app',
       data: {
         permissionsSelected: []
       }
     });
  </script>
@endsection
