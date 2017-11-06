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
        <li {{ Request::is('report*')? 'class=active':'' }} class="treeview">
          <a href="#">
            <i class="fa fa-bookmark"></i>
            <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            @role('member')
            <li {{ Request::is('report-member')? 'class=active':'' }}><a href="{{url('report-member')}}"><i class="fa fa-circle-o"></i> Monthly Report</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Transactions</a></li>
            @endrole
            @role(['affiliate'])
              <li {{ Request::is('report-affiliate')? 'class=active':'' }}><a href="{{url('report-affiliate')}}"></i>Monthly Commission Statement</a></li>
              <li><a href="#"></i>Daily Commission Statement</a></li>
            @endrole
          </ul>
        </li>
        <li {{ Request::is('promo')? 'class=active':'' }}><a href="{{url('promo')}}"><i class="fa fa-bell"></i> <span>Promotions</span></a></li>

          @role(['superadministrator','administrator','affiliate'])
          {{--For Admin & Affiliate --}}
          <li><a href="#"><i class="fa fa-male"></i> <span>Affiliate Profile</span></a></li>
          <li><a href="#"><i class="fa fa-male"></i> <span>Members List</span></a></li>
          <li><a href="#"><i class="fa fa-male"></i> <span>Merchants List</span></a></li>
          <li><a href="#"><i class="fa fa-male"></i> <span>Outlets List</span></a></li>
          <li><a href="#"><i class="fa fa-fire-extinguisher"></i> <span>Downloads Center</span></a></li>
          @endrole

          @role(['superadministrator','administrator','affiliate','outlet'])
        {{--For Admin, Affiliate, Merchant & Outlet --}}
        <li><a href="http://www.mykadshopper.com/faq/"><i class="fa fa-cubes"></i> <span>FAQ</span></a></li>
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
<div class="control-sidebar-bg"></div>
