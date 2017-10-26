@extends('layouts.app')
<head>
  <title>User Profile</title>
</head>
@section('content')
  <div class="row  m-t-10">
    <div class="col-md-8 col-offset-2">
      <h1>User Profile</h1>
    </div>
    <hr class="m-t-0">
  </div>
  <div class="row m-t-50">
    <div class="col-md-10">
      <div class="panel panel-primary">
      <div class="panel-heading">
        <h2 class="panel-title"><b>Profile Information</b></h2>
      </div>
      <div class="panel-body">
        <div class="col-xs-12 col-sm-10 col-md-10">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="{{ asset("img/man-logo-icon.png")}}" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4 >Ismail Rashad <small>Superadministrator</small></h4>
                        <cite title="address"><i class="glyphicon glyphicon-map-marker">
                        </i> Danau Kota, 53100 Kuala Lumpur, Federal Territory of Kuala Lumpur, Malaysia</cite>
                        <p>
                           <i class="glyphicon glyphicon-user"></i> IC Number: 999xx820
                            <br/>
                             <i class="glyphicon glyphicon-earphone"></i> Phone Number: 011111129
                            <br/>
                            <i class="glyphicon glyphicon-earphone"></i> Home Number: 011111129
                           <br/>
                           <i class="glyphicon glyphicon-earphone"></i> Office Number: 011111129
                          <br/>
                            <i class="glyphicon glyphicon-envelope"></i> superadministrator@app.com
                            <br/>

                            <i class="glyphicon glyphicon-gift"></i> 15/April/1995
                            <br>
                            <i class="glyphicon glyphicon-circle-arrow-down"></i> Male
                            </p>

                    </div>
                </div>
          </div>
      </div>
    </div>
  </div>
    </div>

</div>
@endsection
