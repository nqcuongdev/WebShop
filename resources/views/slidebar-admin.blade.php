<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="{{route('index')}}" class="site_title"><i class="fa fa-paw"></i> <span>Admin</span></a>
      </div>

      <div class="clearfix"></div>

<!-- menu profile quick info -->
<div class="profile clearfix">
    <div class="profile_pic">
        <img src="{{url('/admin/images/img.jpg')}}" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
      <span>Welcome,</span>
      <h2>Cường</h2>
    </div>
  </div>
  <!-- /menu profile quick info -->

  <br />

  <!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-home"></i> Dashboard</a></li>
        <li><a><i class="fa fa-edit"></i> Products Management</span></a>
          <ul class="nav child_menu">
            @foreach ($typeproduct as $item)
              <li><a href="{{ $item -> link }}">{{ $item -> name }}</a></li>
            @endforeach
          </ul>
        </li>
        <li><a><i class="fa fa-desktop"></i> Web Management</span></a>
          <ul class="nav child_menu">
            <li><a href="">Banner</a></li>
            <li><a href="">Promotion</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-table"></i> Customer Management</span></a>
          <ul class="nav child_menu">
            <li><a href="">Order</a></li>
            <li><a href="">Customer</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-archive"></i> Staff Management</a>
        </li>
      </ul>
    </div>
  </div>
  <!-- /sidebar menu -->
</div>
</div>

<!-- top navigation -->
<div class="top_nav">
<div class="nav_menu">
  <nav>
    <div class="nav toggle">
      <a id="menu_toggle"><i class="fa fa-bars"></i></a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li class="">
        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="{{url('/admin/images/img.jpg')}}" alt="">Anh Cường
          <span class=" fa fa-angle-down"></span>
        </a>
        <ul class="dropdown-menu dropdown-usermenu pull-right">
          <li><a href=""> Profile</a></li>
          <li><a href=""><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
        </ul>
      </li>

      <li role="presentation" class="dropdown">
        <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-shopping-cart"></i>
          <span class="badge bg-green">6</span>
        </a>
        <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
          <li>
            <a>
                <span class="image"><img src="{{url('/admin/images/img.jpg')}}" alt="Profile Image" /></span>
              <span>
                <span>John Smith</span>
                <span class="time">3 mins ago</span>
              </span>
              <span class="message">
                Film festivals used to be do-or-die moments for movie makers. They were where...
              </span>
            </a>
          </li>
          <li>
            <a>
              <span class="image"><img src="{{url('/admin/images/img.jpg')}}" alt="Profile Image" /></span>
              <span>
                <span>John Smith</span>
                <span class="time">3 mins ago</span>
              </span>
              <span class="message">
                Film festivals used to be do-or-die moments for movie makers. They were where...
              </span>
            </a>
          </li>
          <li>
            <a>
              <span class="image"><img src="{{url('/admin/images/img.jpg')}}" alt="Profile Image" /></span>
              <span>
                <span>John Smith</span>
                <span class="time">3 mins ago</span>
              </span>
              <span class="message">
                Film festivals used to be do-or-die moments for movie makers. They were where...
              </span>
            </a>
          </li>
          <li>
            <a>
              <span class="image"><img src="{{url('/admin/images/img.jpg')}}" alt="Profile Image" /></span>
              <span>
                <span>John Smith</span>
                <span class="time">3 mins ago</span>
              </span>
              <span class="message">
                Film festivals used to be do-or-die moments for movie makers. They were where...
              </span>
            </a>
          </li>
          <li>
            <div class="text-center">
              <a>
                <strong>See All Alerts</strong>
                <i class="fa fa-angle-right"></i>
              </a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</div>
</div>
