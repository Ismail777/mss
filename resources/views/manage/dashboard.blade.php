@extends('layouts.app')
<head>
  <title>MSS | Dashboard</title>
</head>
@section('content')
  <ol class="breadcrumb pull-right">
    <li class="active">Dashboard</li>
  </ol>

  <hr>

  @role('superadministrator')
  <!-- Small boxes (Stat box) -->
  <div class="row m-t-50 m-b-20">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>150</h3>

          <p>New Orders</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>

          <p>Bounce Rate</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{$users->count()}}</h3>

          <p>User Registrations</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="{{route('users.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>65</h3>

          <p>Unique Visitors</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>

  @endrole
                    <div class="row">
                        <div class="col-md-4">
                          <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h1 class="panel-title"><i class="fa fa-th-list"></i>  Profile Information</h1>
                          </div>
                          <div class="panel-body">
                            <ul class="list-group">
                                  <li class="list-group-item">User Role: Admin</li >
                                  <li class="list-group-item">Name: Mohamed Ismail Rashad</li >
                                  <li class="list-group-item">Identity Card Number: P022223334</li >
                                  <li class="list-group-item">Gender: Male</li >
                                  <li class="list-group-item">Email: mismail220@gmail.com</li >
                                  <li class="list-group-item">Mobile Phone Number: 01139854339</li >
                                  <li class="list-group-item">Office Telephone Number: 01139854339</li >
                                  <li class="list-group-item">Home Telephone number: 01139854339</li >
                                  <li class="list-group-item">Country: Sudan</li >
                                  <li class="list-group-item">State: Khartoum</li >
                                  <li class="list-group-item">District: 21</li >
                            </ul>
                          </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="panel panel-primary">
                            <div class="panel-heading">
                              <h1 class="panel-title">Announcments</h1>
                            </div>
                            <div class="panel-body">
                              <ul class="timeline">

                                <!-- timeline time label -->
                                <li class="time-label">
                                    <span class="bg-red">
                                        10 Feb. 2014
                                    </span>
                                </li>
                                <!-- /.timeline-label -->

                                <!-- timeline item -->
                                <li>
                                    <!-- timeline icon -->
                                    <i class="fa fa-envelope bg-blue"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                        <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

                                        <div class="timeline-body">
                                            ...
                                            Content goes here
                                        </div>

                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-xs">...</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <!-- timeline time label -->
                                <li class="time-label">
                                    <span class="bg-red">
                                        10 Feb. 2014
                                    </span>
                                </li>
                                <!-- /.timeline-label -->

                                <!-- timeline item -->
                                <li>
                                    <!-- timeline icon -->
                                    <i class="fa fa-envelope bg-blue"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                        <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

                                        <div class="timeline-body">
                                            ...
                                            Content goes here
                                        </div>

                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-xs">...</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                                <!-- timeline time label -->
                                <li class="time-label">
                                    <span class="bg-red">
                                        10 Feb. 2014
                                    </span>
                                </li>
                                <!-- /.timeline-label -->

                                <!-- timeline item -->
                                <li>
                                    <!-- timeline icon -->
                                    <i class="fa fa-envelope bg-blue"></i>
                                    <div class="timeline-item">
                                        <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                        <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

                                        <div class="timeline-body">
                                            ...
                                            Content goes here
                                        </div>

                                        <div class="timeline-footer">
                                            <a class="btn btn-primary btn-xs">...</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- END timeline item -->
                                  ...

                            </ul>
                            </div>
                          </div>
                        </div>
                    </div>

                @role('superadministrator')
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Members</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">8 New Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                    @foreach ($users as $user)
                      <li>
                        <img src="img/profile-picture.jpg" alt="User Image" width="50" height="50">
                        <a class="users-list-name" href="{{route('users.show',$user->id)}}">{{$user->name}}</a>
                        <span class="users-list-date">{{$user->created_at->toFormattedDateString()}}</span>
                      </li>
                    @endforeach
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="{{route('users.index')}}" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
                @endrole

@endsection
