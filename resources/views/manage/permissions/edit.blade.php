@extends('layouts.app')
@section('pageTitle')
  Edit Permission {{$permission->id}}
@endsection
@section('content')

  <div class="row  m-t-10">
    <div class="pull-right">
      {{ Breadcrumbs::render('permission', $permission) }}
    </div>
    <div class="content-header">
      <h1>Edit Permissions Details</h1>
    </div>
  </div>
  <hr>
  <div class="row">
      <div class="column col-md-8">

        {!! Form::model($permission, ['route'=>['permissions.update', $permission->id], 'method'=>'PUT']) !!}


          <label for="display_name" class="label-control">Name (Display Name)</label>

              {{Form::text('display_name',null,['class'=>'form-control'])}}



          <label for="name" class="label-control">Slug: Cannot Be Changed</label>

                {{Form::text('name',null,['class'=>'form-control','disabled'])}}



          <label for="description" class="label-control">description</label>

                {{Form::text('description',null,['class'=>'form-control'])}}



        <button class="btn btn-primary">Save Changes</button>
      {!!Form::close() !!}
    </div>
  </div>


@endsection
