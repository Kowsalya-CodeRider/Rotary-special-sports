<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ROTARY</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Rotary</b>CLUB</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php echo $this->session->userdata('username');?>
              <img src="<?php echo IMG_URL;?>rotary-logo.jpg" class="user-image" alt="User Image">
              
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo IMG_URL;?>rotary-logo.jpg" class="img-circle" alt="User Image">

                <p>
                  Rotary club - Chennai
                  <small>Address: Rayala Towers I, II Mezzanine, 781, Anna Salai, Chennai, Tamil Nadu 600002</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <center><a class="btn btn-warning" href="<?php echo SITE_URL;?>Rotary/log_out">Log out</a>                
                </div>
                <!-- /.row -->
              </li>              
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->          
        </ul>
      </div>
    </nav>
  </header>