@extends('layouts.app')
@section('pageTitle')
  User {{$user->id}}
@endsection
@section('content')
  <div class="pull-right">
    {{ Breadcrumbs::render('user', $user) }}
  </div>
    <div class="jumbotron  m-t-50" style="background-color: rgb(200, 171, 205)">
  <h1>{{$user->name}}</h1>
  <p>{{$user->email}}</p>
  <p><a class="btn btn-primary btn-lg" href="{{route('users.edit',$user->id)}}" role="button">Edit</a></p>
</div>

  <div class="panel">
    <h2>Roles:</h2>
    <ol>
      @foreach ($user->roles as $role)
        <li><h4>{{$role->display_name}}</h4></li>
      @endforeach
    </ol>
  </div>
@endsection
