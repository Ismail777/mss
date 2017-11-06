@extends('layouts.app')
@section('pageTitle')
  Edit Role {{$role->id}}
@endsection
@section('content')

    <div class="row m-t-10">
      <div class="pull-right">
        {{ Breadcrumbs::render('role', $role) }}
      </div>
      <div class="content-header">
        <h1>Edit {{$role->display_name}}</h1>
        <h5>{{$role->description}}</h5>
      </div>
    </div>
    <hr class="m-t-0">

    {!! Form::model($role, ['route'=>['roles.update', $role->id], 'method'=>'PUT']) !!}


                <h2 class="title">Role Details:</h2>

                <div class="form-group">
                  <p class="control">
                    <label for="display_name" class="label-control">Name: (For Humans)</label>
                    {{Form::text('display_name',null,['class'=>'form-control'])}}
                  </p>
                </div>

                <div class="form-group">

                    <label for="name" class="label-control">Slug:</label>
                    {{Form::text('name',null,['class'=>'form-control','disabled'])}}

                </div>

                <div class="form-group">
                    <label for="description" class="label-control">Description</label>
                    {{Form::text('description',null,['class'=>'form-control'])}}
                </div>
                  <input type="hidden" name="permissions" :value="permissionsSelected">

    <div class="row">
      <div class="col">

                <h2 class="title">Permissions:</h2>
                <ul class="list-group">
                  @foreach ($permissions as $permission)
                    <div class="form-group">
                    <li class="list-group-item">
                      <input type="checkbox" class="minimal" :value="{{$permission->id}}" v-model="permissionsSelected">
                      {{$permission->display_name}} <em>{{$permission->description}}</em>
                    </li>
                  @endforeach
                </ul>

        <button name="button" class="btn btn-primary btn-lg m-b-20">Save Changes</button>
          </form>
        </div>
      </div>





@endsection

@section('scripts')
  <script>
     var app = new Vue({
       el: '#app',
       data: {
         permissionsSelected: {!! $role->permissions->pluck('id') !!}
       }
     });
  </script>


@endsection
