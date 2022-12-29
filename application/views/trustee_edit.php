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
              <center><h3 class="box-title">Trustee details</h3></center>
            </div>
            <br><br>
            <div class="box-body">
            <form class="form-horizontal" method="POST" action="<?php echo SITE_URL;?>Rotary/trustee_edit">
              
              <div class="form-group">
            
                <div class="col-sm-7">
                <input type="hidden" class="form-control" id="sno" name="sno" value="<?php echo $plist->sno;?>" >
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Institute:</label>
                <div class="col-sm-7">
                <select class="form-control select2" style="width: 100%;" name="institute_list" required>
                  <?php
             $a = $plist->instituteid;
             foreach($ilist as $row)
             {
             ?>
             <option <?php if($row['sno'] == "$a"){ echo 'selected="selected"'; } ?> value="<?php echo $row['sno']?>"><?php echo $row['i_name'];?></option>
             <?php
           }
           ?>
                </select>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Name:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $plist->name;?>" >
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Contact No:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" id="contactno" name="contactno" value="<?php echo $plist->contactno;?>">
            </div>
              </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Email id:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" id="email" name="email"  value="<?php echo $plist->email;?>">
            </div>
              </div>
              <br><br>
              <div class="box-footer">
                <center><button type="submit" class="btn btn-danger">Update</button></center>
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