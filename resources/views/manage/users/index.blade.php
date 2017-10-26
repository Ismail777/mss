@extends('layouts.app')
  <head>
    <title>Manage Users | Index</title>
  </head>
@section('content')

    <div class="row  m-t-10">

      <section class="content-header">
        <h1 class="col-md-4">Manage Users</h1>
        <div class="pull-right col-md-4">
          {{ Breadcrumbs::render('users') }}
        </div>
      </section>
    </div>

    <div class="row">

        <a href="{{route('users.create')}}" class="btn btn-primary btn-lg pull-right"><i class="fa fa-user-plus m-r-10"></i>Create User</a>

      <div class="col-md-12 m-t-10">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">All Users</h3>
              </div>
              <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)
                        <tr>
                          <th>{{$user->id}}</th>
                          <td><a href="{{route('users.show',$user->id)}}"><b>{{$user->name}}</b></a></td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->created_at->toFormattedDateString()}}</td>
                          <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-default">Edit</a></td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
              </div>
            </div>
      </div>
    </div>
    {{$users->links()}}

@endsection
