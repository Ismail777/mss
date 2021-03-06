@extends('layouts.app')
@section('pageTitle')
  Manage Roles
@endsection
@section('content')

      <div class="row m-t-10">
        <section class="content-header">
          <h1 class="col-md-4">Manage Roles</h1>
          <div class="pull-right col-md-4">
            {{ Breadcrumbs::render('roles') }}
          </div>
        </section>
      </div>

      <div class="row">
        <a href="{{route('roles.create')}}" class="btn btn-primary pull-right btn-lg"><i class="fa fa-user-secret m-r-10"></i> Create New Role</a>
      </div>
      <div class="row">
        <div class="col-xs-12 m-t-5">
          <div class="box box-primary">
            <div class="box-body">
              @foreach ($roles as $role)
                <div class="col-xs-6 col-lg-4">
                       <h3>{{$role->display_name}}</h3>
                       <h4 class="subtitle"><em>{{$role->name}}</em></h4>
                       <p>
                         {{$role->description}}
                       </p>
                       <div class="col-xs-6 col-lg-4">
                         <a class="btn btn-pink btn-white" href="{{route('roles.show',$role->id)}}" role="button">View details &raquo;</a>

                       </div>
                       <div class="col-xs-6 col-lg-4 m-l-5">
                       <a class="btn btn-pink btn-white" href="{{route('roles.edit',$role->id)}}" role="button">Edit Role &raquo;</a>
                      </div>
                     </div><!--/.col-xs-6.col-lg-4-->
              @endforeach
            </div>
          </div>
        </div>
      </div>




    </div>

@endsection
