@extends('layouts.app')
<head>
  <link rel="stylesheet" href="{{asset('plugins/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
</head>
@section('pageTitle')
  Monthly Report
@endsection

@section('content')
  <div class="content-header">
    <h1>Monthly Statment</h1>
  </div>

<hr>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="table-responsive">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Year</th>
                <th>Month</th>
                <th>Cash Points</th>
                <th>Reward Points</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 4.0
                </td>
                <td>Win 95+</td>
                <td> 4</td>
                <td><a href="{{url('report/details')}}" class="btn btn-pink btn-white">View</a></td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 5.0
                </td>
                <td>Win 95+</td>
                <td>5</td>
              <td><a href="#" class="btn btn-pink btn-white">View</a></td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 5.5
                </td>
                <td>Win 95+</td>
                <td>5.5</td>
            <td><a href="#" class="btn btn-pink btn-white">View</a></td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 6
                </td>
                <td>Win 98+</td>
                <td>6</td>
            <td><a href="#" class="btn btn-pink btn-white">View</a></td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet Explorer 7</td>
                <td>Win XP SP2+</td>
                <td>7</td>
            <td><a href="#" class="btn btn-pink btn-white">View</a></td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>AOL browser (AOL desktop)</td>
                <td>Win XP</td>
                <td>6</td>
          <td><a href="#" class="btn btn-pink btn-white">View</a></td>
              </tr>
              </tbody>
            </table>
          </div>

        </div>
        <div class="panel-footer">
          MSS
        </div>
      </div>
    </div>
  </div>



@endsection
@section('scripts')
  <script src="{{asset('plugins/datatables.net-bs/js/jquery.dataTables.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endsection
