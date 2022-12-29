<!DOCTYPE html>
<html>
<head> 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
         Trustee
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-md"></i> Membership:</a></li>
        <li class="active">2.2 Million</li>
      </ol>
    </section>    
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header"><br><br>
              <center><h3 class="box-title">Trustee details</h3></center>
            </div>           
            <div class="box-body"><br><br>
            <form class="form-horizontal">
              <div class="form-group">
                <label class="col-md-3 control-label">Institute:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="institute" name="institute" value="<?php echo $ilist->i_name;?>" readonly>
            </div>
              </div><br>
              <div class="form-group">
                <label class="col-md-3 control-label">Name:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $plist->name;?>" readonly>
            </div>
              </div><br>
              <div class="form-group">
                <label class="col-md-3 control-label">Contact No:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="contactno" name="contactno" value="<?php echo $plist->contactno;?>" readonly>
            </div>
              </div><br>
              <div class="form-group">
                <label class="col-md-3 control-label">Email:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="email" name="email" value="<?php echo $plist->email;?>" readonly>
            </div>
              </div><br>
            </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>  
          </div>
        </div>
      </div>
  </div> 
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Rotary International One Rotary Center</b> 
    </div>
    <strong> <a href="https://adminlte.io">Contact:</a>.</strong> +1 866-976-8279 (toll free), 1560 Sherman Ave. Evanston, IL 60201-3698, USA
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
</body>
</html>
<?php include "script.php";?>