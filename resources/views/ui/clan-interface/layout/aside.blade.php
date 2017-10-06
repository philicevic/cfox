<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="img/user8-128x128.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
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

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">Menu</li>
      <!-- Optionally, you can add icons to the links -->
      <li{{ route('clan.home', ["clan" => $clan->subdomain])===Request::url() ? ' class=active' : '' }}><a href="{{ route('clan.home', ["clan" => $clan->subdomain]) }}"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
      <li{{ route('clan.member', ["clan" => $clan->subdomain])===Request::url() ? ' class=active' : '' }}><a href="{{ route('clan.member', ["clan" => $clan->subdomain]) }}"><i class="fa fa-envelope"></i> <span>Member</span></a></li>
      <li class="treeview">
        <a href="#"><i class="fa fa-cogs"></i> <span>Settings</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">Account</a></li>
          <li><a href="#">Appearence</a></li>
          <li><a href="#">Payment</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
