@extends('layouts.app')
@section('pageTitle')
  Role {{$role->display_name}}
@endsection
@section('content')

    <div class="row m-t-10">
      <div class="pull-right">
        {{ Breadcrumbs::render('role', $role) }}
      </div>
      <div class="content-header">
        <h1>{{$role->display_name}}<small class="m-l-25"><em>({{$role->name}})</em></small></h1>
        <h5>{{$role->description}}</h5>
      </div>
      <div class="col">
        <a href="{{route('roles.edit',$role->id)}}" class="btn btn-primary"><i class="fa fa-pencil m-r-10"></i> Edit This Role</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="row">
      <div class="col-md-8">

                <h2 class="title">Permissions:</h2>
                <ul class="list-group">
                  @foreach ($role->permissions as $r)
                    <li class="list-group-item">{{$r->display_name}}<em class="m-l-15">({{$r->description}})</em></li>
                  @endforeach
                </ul>
              </div>


@endsection
