<!DOCTYPE html>
<html>
<head> 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
         Participants
        <small>View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-female"></i>Female membership:</a></li>
        <li class="active"> Jean Harris</li>
      </ol>
    </section>    
      <div class="row">
        <div class="col-md-12">
          <div class="box box-warning">
            <div class="box-header">
              <center><h3 class="box-title">Participants details</h3></center>
            </div>           
            <div class="box-body">
            <form class="form-horizontal">
               <div class="form-group">
                <div class="col-md-5"></div>
                <div class="col-sm-3">
                  <img id="picture" name="picture" src="<?php echo UPLOAD_URL.$plist->picture;?>" width="150px;">                
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Institution:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $ilist->i_name;?>"readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Name:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control"  value="<?php echo $plist->name;?>" readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Age:</label>
                <div class="col-sm-6">
                  <?php
                  if(count($alist) == 0)
                  {
                  ?>
                  <input type="text" class="form-control" value="<?php echo "Not assigned"?>" readonly>
                  <?php
                }
                else
                {
                  ?>
                  <input type="text" class="form-control" value="<?php echo $alist->age_category;?>" readonly>
                <?php
              }
              ?>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Gender:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="<?php echo $plist->gender;?>" readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Disability:</label>
                <div class="col-sm-6">
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
                      echo $row->disability."\n"; 
                    }

                    ?></textarea>
                <?php
              }
              ?>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Events:</label>
                <div class="col-sm-6">
                  <?php
                  if(count($elist) == 0)
                  {
                  ?>
                  <input type="text" class="form-control" value="<?php echo "Not assigned"?>" readonly>
                  <?php
                }
                else
                {
                  ?>
                  <textarea type="text" class="form-control" readonly><?php foreach($elist as $row)
                    {
                      echo $row->event_name."\n"; 
                    }

                    ?></textarea>
                <?php
              }
              ?>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Address:</label>
                <div class="col-sm-6">
                  <textarea class="form-control" readonly><?php echo $plist->address;?></textarea>
            </div>
              </div> 
              <div class="form-group">
                <label class="col-md-3 control-label">Special needs:</label>
                <div class="col-sm-6">
                  <textarea class="form-control" readonly><?php echo $plist->special_needs;?></textarea>
            </div>
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