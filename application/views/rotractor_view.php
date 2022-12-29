<!DOCTYPE html>
<html>
<head> 
	</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
         Rotractor
        <small>Form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-globe"></i> Type:</a></li>
        <li class="active">Service club</li>
      </ol>
    </section>    
      <div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <center><h3 class="box-title">Rotractor details</h3></center>
            </div>
            <br><br>
            <div class="box-body">
            <form class="form-horizontal" method="POST">
              <div class="form-group">
                <div class="col-md-5"></div>
                <div class="col-sm-3">
                  <img id="picture" name="picture" src="<?php echo UPLOAD_URL.$plist->picture;?>" width="150px;">
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Name:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $plist->name;?>" readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Contact No:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="phno" name="phno" value="<?php echo $plist->phno;?>" readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Gender:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $plist->gender;?>" readonly>
            </div>
              </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Email id:</label>
                <div class="col-sm-7">
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $plist->email;?>" readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Password:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" id="name" name="password" value="<?php echo $plist->password;?>" readonly>
            </div>
              </div>       
              <div class="form-group">
                <label class="col-md-3 control-label">Address:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" rows="3" id="address" name="address" value="<?php echo $plist->address;?>" readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Rotarian:</label>
                <div class="col-sm-7">
                  <?php
                  if(count($rlist) == 0)
                  {
                  ?>
                  <input type="text" class="form-control" value="<?php echo "Not assigned"?>" readonly>
                  <?php
                }
                else
                {
                  ?>
                  <input type="text" class="form-control" value="<?php echo $rlist->name;?>" readonly>
                <?php
              }
              ?>
            </div>
              </div>

              <div class="form-group">
                <label class="col-md-3 control-label">Institutes:</label>
                <div class="col-sm-7">
                  <?php
                  if(count($dlist) == 0)
                  {
                  ?>
                  <input type="text" class="form-control" value="<?php echo "Not assigned"?>" readonly>
                  <?php
                }
                else
                {
                  ?>
                  <textarea type="text" class="form-control" readonly><?php foreach($dlist as $row)
                    {
                      echo $row->name."\n"; 
                    }

                    ?></textarea>
                <?php
              }
              ?>
            </div>
              </div>
              <br><br>
              <div class="box-footer">
                
              </div>
            </form>
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