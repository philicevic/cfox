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
