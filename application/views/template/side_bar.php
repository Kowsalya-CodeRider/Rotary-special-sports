<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo IMG_URL;?>rotary-logo.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Rotary Foundation</p>
          <a href="#"><i class="fa fa-balance-scale text-success"></i>Non-profit organization </a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Authorities</li>
        <li class="active">
          <a href="<?php echo SITE_URL;?>Rotary/dashboard">
            <i class="fa fa-hourglass"></i>
            <span>Dashboard</span>
          </a>          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-mortar-board (alias)"></i> <span>Institution</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo SITE_URL;?>Rotary/institute" /><i class="fa fa-mortar-board (alias)"></i>Institute</a></li>
            <li class="active"><a href="<?php echo SITE_URL;?>Rotary/trustee"><i class="fa fa-users"></i> Trustee</a></li>
            <li class="active"><a href="<?php echo SITE_URL;?>Rotary/guardian"><i class="fa fa-user-secret"></i> Guardian</a></li>
          </ul>
        </li>        
        <li class="active">
          <a href="<?php echo SITE_URL;?>Rotary/rotarians">
            <i class="fa fa-user"></i>
            <span>Rotarians</span>
          </a>          
        </li>
        <li class="active">
          <a href="<?php echo SITE_URL;?>Rotary/rotractors">
            <i class="fa fa-user-plus"></i>
            <span>Rotractors</span>
          </a>
        </li>
        <li class="active">
          <a href="<?php echo SITE_URL;?>Rotary/participants">
            <i class="fa fa-odnoklassniki-square"></i>
            <span>Participants</span>
          </a>
        </li>
        <li class="active">
          <a href="<?php echo SITE_URL;?>Rotary/events">
            <i class="fa fa-object-ungroup"></i>
            <span>Events</span>
          </a>
        </li>
        <li class="active">
          <a href="http://rotaryspecialsports.org/filter/">
            <i class="fa fa-map-o"></i>
            <span>Filter</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>