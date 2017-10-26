<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>

        <li {{ Request::is('dashboard')? 'class=active':'' }}><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="#"><i class="fa fa-file-pdf-o"></i><span>Report</span></a></li>
        <li><a href="#"><i class="fa fa-cubes"></i> <span>Resource Center</span></a></li>

          @role(['superadministrator','administrator','affiliate'])
          {{--For Admin & Affiliate --}}
          <li><a href="#"><i class="fa fa-male"></i> <span>Affiliate</span></a></li>
          <li><a href="#"><i class="fa fa-male"></i> <span>Member</span></a></li>
          <li><a href="#"><i class="fa fa-male"></i> <span>Merchant</span></a></li>
          <li><a href="#"><i class="fa fa-mobile-phone"></i> <span>SMS</span></a></li>
          <li><a href="#"><i class="fa fa-comments-o"></i> <span>BearinBag</span></a></li>

          @endrole

          @role(['superadministrator','administrator','affiliate','outlet'])
        {{--For Admin, Affiliate, Merchant & Outlet --}}
        <li><a href="#"><i class="fa fa-cubes"></i> <span>FAQ</span></a></li>
          @endrole

          {{--For Merchant & Outlet Only --}}
            @role(['superadministrator','outlet','merchant'])
          <li><a href="#"><i class="fa fa-phone-square"></i> <span>Top-Up</span></a></li>
            @endrole

        {{--For Member & superadministrator Only --}}
          @role(['member','superadministrator'])
        <li><a href="#"><i class="fa fa-info-circle"></i> <span>Redeption</span></a></li>
          @endrole

          @role('superadministrator')
        {{--Admin Only Area --}}
        <li class="header">ADMIN SECTION</li>
      <li {{ Request::is('manage/*')? 'class=active':'' }} class="treeview">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>Manage</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li {{ Request::is('manage/users*')? 'class=active':'' }}><a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i> Users</a></li>
          <li {{ Request::is('manage/roles*')? 'class=active':'' }}><a href="{{route('roles.index')}}"><i class="fa fa-circle-o"></i> Roles</a></li>
          <li {{ Request::is('manage/permissions*')? 'class=active':'' }}><a href="{{route('permissions.index')}}"><i class="fa fa-circle-o"></i> Permissions</a></li>
        </ul>
      </li>

        <li><a href="#"><i class="fa fa-group"></i> <span>Staff</span></a></li>
        <li><a href="#"><i class="fa fa-server"></i> <span>Smart Server</span></a></li>
        <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
        @endrole


  </section>
  <!-- /.sidebar -->
</aside>
