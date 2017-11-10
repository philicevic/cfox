<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane active" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Recent Activity</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:;">
            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

              <p>Will be 23 on April 24th</p>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

      <h3 class="control-sidebar-heading">Tasks Progress</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:;">
            <h4 class="control-sidebar-subheading">
              Custom Template Design
              <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

    </div>
    <!-- /.tab-pane -->
    <!-- Stats tab content -->
    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
    <!-- /.tab-pane -->
    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
      <form method="post">
        <h3 class="control-sidebar-heading">General Settings</h3>
        <div class="form-group">
          <label>Themecolor</label>
          <select class="form-control" onchange="changeSkinColor($(this).val())">
              <option value="yellow" selected>Yellow</option>
              <option value="blue">Blue</option>
              <option value="black">Black</option>
              <option value="purple">Purple</option>
              <option value="red">Red</option>
              <option value="green">Green</option>
          </select>
          <br>
          <label>Themetype</label>
          <select class="form-control" onchange="changeSkinType($(this).val())">
              <option value="" selected>Dark</option>
              <option value="-light">Light</option>
          </select>
          <script type="text/javascript">
              var currentSkin = "skin-yellow";
              var currentColor = "yellow";
              var currentType = "";
              function changeSkinColor(color) {
                  $('body').removeClass(currentSkin);
                  currentSkin = "skin-" + color + currentType;
                  currentColor = color;
                  $('body').addClass(currentSkin);
              }
              function changeSkinType(type) {
                  $('body').removeClass(currentSkin);
                  currentSkin = currentSkin.replace('-light', '') + type;
                  currentType = type;
                  $('body').addClass(currentSkin);
              }
          </script>
        </div>
      </form>
    </div>
    <!-- /.tab-pane -->
  </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
