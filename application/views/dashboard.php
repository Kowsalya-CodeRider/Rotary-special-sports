<!DOCTYPE html>
<html>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<div class="content-wrapper" style="background-color: LightGrey;">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-2">
          <br><br><br>
          <div class="box box-warning">
            <div class="box-header">
              <center><h3 class="box-title">Institution</h3></center>
            </div>
            <div class="box-body">              
             <center><i class="fa fa-mortar-board (alias)" style="font-size:75px;"></i></center> 
              <div class="box-footer">
                <center><a href="<?php echo SITE_URL;?>Rotary/dashboard_institute" class="btn btn-warning">List</a></center>
              </div>      
            </div>           
          </div>

        </div>  
<div class="col-md-2"></div>
 <div class="col-md-2">
          <br><br><br>
          <div class="box box-success">
            <div class="box-header">
              <center><h3 class="box-title">Participants</h3></center>
            </div>      
            <div class="box-body">              
             <center><i class="fa fa-odnoklassniki-square" style="font-size: 75px;"></i></center>             
              <div class="box-footer">
                <center><a href="<?php echo SITE_URL;?>Rotary/dashboard_participant" class="btn bg-green">List</a></center>
              </div>      
            </div>           
          </div>
        </div>  
      </div>
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2">
          <br><br><br>
           <div class="box box-danger">
            <div class="box-header">
              <center><h3 class="box-title">Events</h3></center>
            </div>      
            <div class="box-body">              
             <center><i class="fa fa-object-ungroup" style="font-size: 75px;"></i></center>             
              <div class="box-footer">
                <center><a href="<?php echo SITE_URL;?>Rotary/dashboard_events" class="btn btn-danger">List</a></center>
              </div>      
            </div>           
          </div>
        </div>
      </div>
    </div>
</div>
</body>
</html>
<?php include "script.php";?>