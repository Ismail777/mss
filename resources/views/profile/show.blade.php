@extends('layouts.app')
@section('pageTitle')
  Profile
@endsection
@section('styles')
  <link rel="stylesheet" href="{{asset('css/parsley.css')}}">
@endsection
@section('content')
  <div class="content-header">
    <h1>*USER* Profile</h1>
  </div>
  <hr>
    <div class="row">
<div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">User Profile</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Change Password</a></li>
              <li class=""><a href="#tab_3" data-toggle="tab"aria-expanded="false">Change E-pin</a></li>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="panel panel-primary">
                <div class="panel-body">
                  <div class="col-xs-12 col-sm-10 col-md-10">
                      <div class="well well-sm white">
                          <div class="row">
                              <div class="col-sm-6 col-md-4">
                                  <img src="{{ asset("img/qr.png")}}" alt="qr" class="img-responsive" />
                              </div>
                              <div class="col-sm-6 col-md-8">
                                  <h4>Ismail Rashad <small>Superadministrator</small></h4>
                                  <cite title="address"><i class="glyphicon glyphicon-map-marker">
                                  </i> Danau Kota, 53100 Kuala Lumpur, Federal Territory of Kuala Lumpur, Malaysia</cite>
                                  <p>
                                     <i class="glyphicon glyphicon-user"></i> IC Number: 999xx820
                                      <br/>
                                       <i class="glyphicon glyphicon-earphone"></i> Phone Number: 011111129
                                       <br/>
                                       <i class="glyphicon glyphicon-send"></i> P.O BOX 361
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
            </div><!-- End of Panel -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <form class="form" action="#" method="post" data-parsley-validate>
                  <div class="form-group">
                    <label for="password">Old Password</label>
                    <input type="password" class="form-control" id="password" required>
                  </div>
                  <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" name="password" class="form-control" required minlength="6" id="password">
                  </div>
                  <div class"form-group">
                    <label for="password_c">New Password Confirmation</label>
                    <input type="password" name="password_c" class="form-control" required minlength="6" data-parsley-equalto="#password">
                  </div>
                  <button type="submit" name="button" class="btn btn-primary btn-lg">Save Changes</button>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <form class="form" action="#" method="post">
                  <div class="form-group">
                    <label for="epin">E-Pin</label>
                    <input type="text" class="form-control" required id="epin">
                  </div>
                  <div class="form-group">
                    <label for="epin_c">E-Pin Confirmation</label>
                    <input type="text" name="epin_c" class="form-control" required data-parsley-equalto="#epin">
                  </div>
                  <button type="submit" name="button" class="btn btn-primary btn-lg">Save Changes</button>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
</div>
@endsection
@section('scripts')
  <script type="text/javascript" src={{asset('js/parsley.min.js')}}></script>
@endsection
