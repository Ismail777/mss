@extends('layouts.app')
@section('pageTitle')
  Promotion
@endsection
@section('content')
  <div class="content-header">
    <h1>Promotions</h1>
  </div>
  <hr>
  <div class="panel panel-primary">
    <div class="panel-body">
      <div class="table-responsive">
        <table class="table table-condensed table-hover">
          <thead>
            <th>Title</th>
            <th>Date</th>
            <th>Contain</th>
          </thead>
          <tbody>
            <tr>
              <td>Lorem ipsum</td>
              <td>28/10/2017</td>
              <td>Sea Food</td>
              <td><button type="button" name="button" class="btn btn-pink btn-white"data-toggle="modal" data-target="#promoModal">View</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="panel-footer">
    </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="promoModal" role="dialog">
   <div class="modal-dialog">

     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Promotion</h4>
       </div>
       <div class="modal-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>

   </div>
  </div><!-- End of Modal -->

@endsection
