<!DOCTYPE html>
<html>
<head> 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
         Institution
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
            <div class="box-header">
              <center><h3 class="box-title">Institution details</h3></center>
            </div>           
            <div class="box-body">
            <form class="form-horizontal">
              <div class="form-group">
                <label class="col-md-3 control-label">Name:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $plist->i_name;?>" readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Address:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="<?php echo $plist->address;?>" readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Zip code:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" value="<?php echo $plist->zipcode;?>" readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Area:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="<?php echo $plist->area;?>" readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">State:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $plist->state;?>" readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">City:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $plist->city;?>" readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Contact No:</label>
                <div class="col-sm-6">
                   <table>
                  <tr>   
                <td><div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div><input type="text" class="form-control name_list" value="<?php echo $plist->phoneno;?>" readonly></div></td>
           
            <td><div class="input-group"><div class="input-group-addon">
                    <i class="fa fa-tty"></i>
                  </div><input type="text" class="form-control name_list" value="<?php echo $plist->landline;?>" readonly></div> </td>
          </tr>
        </table>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Register id:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="<?php echo $plist->registrationid;?>" readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Email:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="<?php echo $plist->email;?>" readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Website:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" value="<?php echo $plist->website;?>" readonly>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Trustee:</label>
                <div class="col-sm-6">
               <?php
                  if(count($slist) == 0)
                  {
                  ?>
                  <input type="text" class="form-control" value="<?php echo "Not assigned";?>" readonly>
                  <?php
                  }
                  else
                  {
                  ?>
                  <textarea type="text" class="form-control" readonly><?php foreach($slist as $row)
                    {
                      echo $row->name."\n"; 
                    }

                    ?></textarea>
                  <?php
                }
                ?>
                 </div>
            </div>
            <div class="form-group">
            <label class="col-md-3 control-label">Guardian:</label>
            <div class="col-sm-6">
             <?php
                  if(count($tlist) == 0)
                  {
                  ?>
                  <input type="text" class="form-control" value="<?php echo "Not assigned";?>" readonly>
                  <?php
                  }
                  else
                  {
                  ?>
                  <textarea type="text" class="form-control" readonly><?php foreach($tlist as $row)
                    {
                      echo $row->name."\n"; 
                    }

                    ?></textarea>
                  <?php
                }
                ?>
            </div>
          </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Rotractor:</label>
                <div class="col-sm-6">
                  <?php
                  if(count($rlist) == 0)
                  {
                  ?>
                  <input type="text" class="form-control" value="<?php echo "Not assigned";?>" readonly>
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
                <label class="col-md-3 control-label">Rotarian:</label>
                <div class="col-sm-6">
                  <?php
                  if(count($dlist) == 0)
                  {
                  ?>
                  <input type="text" class="form-control" value="<?php echo "Not assigned";?>" readonly>
                  <?php
                  }
                  else
                  {
                  ?>
                  <input type="text" class="form-control" value="<?php echo $dlist->name;?>" readonly>
                  <?php
                }
                ?>
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