
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/dashboard') }}">
              <img src="{{asset('img/admin_logo.png')}}" alt="logo" height="35">
            </a>
        </div>

<ul class="nav navbar-nav navbar-right">
  @guest
      <li><a href="{{ route('login') }}">Login</a></li>
      <li><a href="{{ route('register') }}">Register</a></li>
  @else
  <li>
    <form class="navbar-form full-width">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Enter keyword" />
        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
      </div>
    </form>

  </li>
  <li class="dropdown">
    <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
      <i class="fa fa-bell-o"></i>
      <span class="label">5</span>
    </a>
    <ul class="dropdown-menu media-list pull-right animated fadeInDown">
                    <li class="dropdown-header">Notifications (5)</li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading">Server Error Reports</h6>
                                <div class="text-muted f-s-11">3 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><!--Image goes here --></div>
                            <div class="media-body">
                                <h6 class="media-heading">John Smith</h6>
                                <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                <div class="text-muted f-s-11">25 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left">  </div>
                            <div class="media-body">
                                <h6 class="media-heading">Olivia</h6>
                                <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                <div class="text-muted f-s-11">35 minutes ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"> New User Registered</h6>
                                <div class="text-muted f-s-11">1 hour ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="media">
                        <a href="javascript:;">
                            <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                            <div class="media-body">
                                <h6 class="media-heading"> New Email From John</h6>
                                <div class="text-muted f-s-11">2 hour ago</div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-footer text-center">
                        <a href="javascript:;">View more</a>
                    </li>
    </ul>
  </li>
  <li class="dropdown navbar-user">
    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
      <!-- Image goes here -->
      <span class="hidden-xs">Hello, {{Auth::user()->name}}</span> <b class="caret"></b>
    </a>
    <ul class="dropdown-menu animated fadeInLeft">
      <li class="arrow"></li>
      <li><a href="javascript:;">Edit Profile</a></li>
      <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
      <li><a href="javascript:;">Calendar</a></li>
      <li><a href="javascript:;">Setting</a></li>
      <li class="divider"></li>
      <li>  <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
      </li>
    </ul>
  </li>
</ul>
  @endguest
</div>

<!-- end header navigation right -->

</nav>
