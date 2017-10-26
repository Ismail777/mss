@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endsection
  <head>
    <title>{{$user->name}} | Create Profile</title>
  </head>
@section('content')

    <div class="row  m-t-10">
      <div class="col-md-6 col-offset-2">
        <h1>Create Profile</h1>
      </div>
      <hr class="m-t-0">

      <div class="col-md-10 m-t-30">

        {!! Form::model($user, ['route'=>['profile.create', $user->id], 'method'=>'POST']) !!}

          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Full Name</label>
            <div class="col-sm-10">
            {{Form::text('name',null,['class'=>'form-control'])}}
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">E-mail Address</label>
            <div class="col-sm-10">
              {{Form::text('email',null,['class'=>'form-control'])}}
            </div>
          </div>

          <div class="form-group">
            <label for="ic" class="col-sm-2 control-label">IC Number</label>
            <div class="col-sm-10">
              {{Form::text('ic',null,['class'=>'form-control'])}}
            </div>
          </div>


          <div class="form-group">
            <label for="phone_number" class="col-sm-2 control-label">Phone Number</label>
            <div class="col-sm-10">
              {{Form::text('phone_number',null,['class'=>'form-control'])}}
            </div>
          </div>

          <div class="form-group">
            <label for="home_number" class="col-sm-2 control-label">Home Number</label>
            <div class="col-sm-10">
            {{Form::text('home_number',null,['class'=>'form-control'])}}
            </div>
          </div>

          <div class="form-group">
            <label for="office_number" class="col-sm-2 control-label">Office Number</label>
            <div class="col-sm-10">
              {{Form::text('office_number',null,['class'=>'form-control'])}}
            </div>
          </div>

          <div class="form-group">
            <label for="country" class="col-sm-2 control-label">Country</label>
            <div class="col-sm-10">
              {{Form::text('country',null,['class'=>'form-control'])}}
            </div>
          </div>

          <div class="form-group">
            <label for="State" class="col-sm-2 control-label">Office Number</label>
            <div class="col-sm-10">
              {{Form::text('State',null,['class'=>'form-control'])}}
            </div>
          </div>

          <div class="form-group">
            <label for="district" class="col-sm-2 control-label">District</label>
            <div class="col-sm-10">
              {{Form::text('district',null,['class'=>'form-control'])}}
            </div>
          </div>



            <div class="col-sm-10 input-group date">
              <label for="birthday" class="col-sm-2 control-label">Birthday</label>
                 <div class="input-group-addon">
                   <i class="fa fa-calendar"></i>
                 </div>
                 <input type="text" class="form-control" id="datepicker">
            </div>

            <div class="form-group">
              <label for="pp" class="col-sm-2 control-label">Profile Picture</label>
              <div class="col-sm-10">
              {{Form::file('pp',null,['class'=>'form-control'])}}
              </div>
            </div>




          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-Success btn-lg m-t-30 pull-right">Save Profile</button>
            </div>
        </div>
        </form>

    </div>

  </div>



@endsection

@section('scripts')
  <script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <script type="text/javascript">
  //Date picker
 $('#datepicker').datepicker({
   autoclose: true
 })
  </script>
@endsection
