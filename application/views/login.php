<?php include "template/i_header_file.php";?>
<!DOCTYPE html>
<html>
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
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
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
                  <div class="col-xs-4 text-center">
                    <a href="#">Service</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Above</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Self</a>
                  </div>
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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <br><br><br><br><br>
          <div class="box box-success">
            <div class="box-header">
              <center><h3 class="box-title">Login form</h3></center>
            </div>
            <br><br>
            <div class="box-body">
            <form class="form-horizontal" method="POST" action="<?php echo SITE_URL;?>Rotary/login_check">
            <p><?php echo @$error; ?></p>            
            <div class="form-group">
                <label class="col-md-3 control-label">Email id:</label>
                <div class="col-sm-8">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your mail id" required>
            </div>
              </div><br>
              <div class="form-group">
                <label class="col-md-3 control-label">Password:</label>
                <div class="col-sm-8">
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
              </div>       
              <div class="box-footer">
                <center><button type="submit" class="btn bg-green">Submit</button></center>
              </div>
            </form>
            </div>           
          </div>
        </div>   
      </div>
</div>
</body>
</html>