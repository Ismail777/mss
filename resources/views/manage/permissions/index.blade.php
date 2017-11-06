@extends('layouts.app')
@section('pageTitle')
  Manage Permissions
@endsection
@section('content')

  <div class="row  m-t-10">

    <section class="content-header">
      <h1 class="col-md-4">Manage Permissions</h1>
      <div class="pull-right col-md-4">
        {{ Breadcrumbs::render('roles') }}
      </div>
    </section>
  </div>

  <div class="row">
        <a href="{{route('permissions.create')}}" class="btn btn-primary btn-lg pull-right"><i class="fa fa-toggle-on m-r-10"></i>Create Permissions</a>
  </div>
  <div class="row">
      <div class="col-md-12 m-t-10">
            <div class="panel panel-pink">
              <div class="panel-heading">
                <h3 class="panel-title">All Permissions</h3>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-condensed">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Slug</th>
                          <th>Description</th>
                          <th>    </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                          <td><a href="{{route('permissions.show',$permission->id)}}"><b>{{$permission->display_name}}</b></a></td>
                          <td>{{$permission->name}}</td>
                          <td>{{$permission->description}}</td>
                          <td><a href="{{route('permissions.edit',$permission->id)}}" class="btn btn-default">Edit</a> </td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
                </div>

              </div>
            </div>
      </div>
    </div>
    {{$permissions->links()}}

@endsection
