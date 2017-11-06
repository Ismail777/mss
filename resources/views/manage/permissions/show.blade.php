@extends('layouts.app')
@section('pageTitle')
  Permission {{$permission->id}}
@endsection
@section('content')
  <div class="pull-right">
    {{ Breadcrumbs::render('permission', $permission) }}
  </div>
    <div class="jumbotron  m-t-10">
  <h1>{{$permission->display_name}}<small>{{$permission->name}}</small></h1>
  <p>{{$permission->description}}</p>
  <p><a class="btn btn-primary btn-lg" href="{{route('permissions.edit',$permission->id)}}" role="button">Edit</a></p>
</div>
@endsection
