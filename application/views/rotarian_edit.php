<!DOCTYPE html>
<html>
<head> 
  </head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
         Rotarians
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
              <center><h3 class="box-title">Rotarians details</h3></center>
            </div>
            <br><br>
            <div class="box-body">
            <form class="form-horizontal" method="POST" action="<?php echo SITE_URL;?>Rotary/rotarian_edit">
              <div class="form-group">
                <div class="col-md-5"></div>
                <div class="col-sm-3">
                  <img src="<?php echo UPLOAD_URL.$plist->picture;?>" id="show" width="150px;">
                  <input type="file" name="picture" id="picture">
                  <input type="hidden" name="photo" value="<?php echo $plist->picture;?>">
            </div>
              </div>
              <div class="form-group">
            
                <div class="col-sm-7">
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $plist->id;?>" >
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
                  <input type="text" class="form-control" id="phno" name="phno" value="<?php echo $plist->phno;?>">
            </div>
              </div>
              
              <div class="form-group">
                <label class="col-md-3 control-label">Gender:</label>
                <div class="col-sm-6">
                  <div class="radio">
                  <label>
                  <input type="radio" <?php if($plist->gender == "Male"){ echo 'checked = "checked"';}?> name="gender" value="Male">Male
                </label>
                <label>
                  <input type="radio" <?php if($plist->gender == "Female"){ echo 'checked = "checked"';}?>name="gender" value="Female">Female
                </label>
                </div>
            </div>
              </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Email id:</label>
                <div class="col-sm-7">
                <input type="email" class="form-control" id="email" name="email"  value="<?php echo $plist->email;?>">
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Password:</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" id="name" name="password" value="<?php echo $plist->password;?>">
            </div>
              </div>       
              <div class="form-group">
                <label class="col-md-3 control-label">Address:</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" rows="3" id="address" name="address" value="<?php echo $plist->address;?>" >
            </div>
              </div>
              <br><br>
              <div class="box-footer">
                <center><button type="submit" class="btn btn-danger">Submit</button></center>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><script type="text/javascript">
    $(document).ready(function(){
      $("#picture").change(function(){
            readImageData(this);
        });
    });

    function readImageData(imgData){
      if (imgData.files && imgData.files[0]) {
              var readerObj = new FileReader();
              
              readerObj.onload = function (element) {
                  $('#show').attr('src', element.target.result);
              }
              
              readerObj.readAsDataURL(imgData.files[0]);
          }
    }
    </script>