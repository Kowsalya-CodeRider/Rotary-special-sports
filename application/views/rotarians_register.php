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
            <form class="form-horizontal" action="<?php echo SITE_URL;?>Rotary/form_validation" method="post">
              <div class="form-group">
                <div class="col-md-5"></div>
                <div class="col-sm-3">
                  <img src=" " id="show" width="150px;">
                  <input type="file" name="picture" id="picture">
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Name:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter the Rotatian name" required>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Contact No:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="phno" name="phno" placeholder="Enter the Rotarian contact number" maxlength="10" required>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Gender:</label>
                  <div class="col-md-1">
                   
                      <input type="radio" name="gender" id="Male" value="Male" required>
                      Male
                    
                </div>
                  
                      <input type="radio" name="gender" id="Female" value="Female" required>
                      Female
                   
                                  
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Email id:</label>
                <div class="col-sm-6">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter the Rotatian mail id" required>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Password:</label>
                <div class="col-sm-6">
                <input type="password" class="form-control" id="name" name="password" placeholder="Enter the Rotatian password" required>
            </div>
              </div>       
              <div class="form-group">
                <label class="col-md-3 control-label">Address:</label>
                <div class="col-sm-6">
                  <input class="form-control" rows="3" id="address" name="address" placeholder="Enter the rotarian address" required>
            </div>
              </div>
              <br><br>
              <div class="box-footer">
                <center><button type="submit" class="btn bg-red">Submit</button></center>
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
<?php include "script.php";?>
</body>
</html>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript">
 $("#phno").keypress(function (e) {
          if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                $("#errmsg").html(alert("Digits Only"));
               return false;
          }
  });


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