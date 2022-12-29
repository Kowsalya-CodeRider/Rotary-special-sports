<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Guardian
        <small>Form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-male"></i> Formation :</a></li>
        <li class="active">1905 = 113 years ago</li>
      </ol>
    </section>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header">
              <center><h3 class="box-title">Guardian details</h3>  </center>
            </div>
            <br><br>
            <div class="box-body">
            <form class="form-horizontal" action="<?php echo SITE_URL;?>Rotary/guardian_insert" method="post">
              <div class="form-group">
                <label class="col-md-4 control-label">Choose Institution:</label>
                <div class="col-sm-6">
            <select class="form-control select2" style="width: 100%;" name="institute_list" required>
               <?php
               foreach ($institute_list as $row) {
            ?>
              <option value="<?php echo $row['sno']?>"><?php echo $row['i_name']?></option>
              <?php }?>
            </select>
            </div>
              </div>
              <div class="form-group">
                <div class="col-md-2"></div>
                <div class="col-sm-9"><br>
                  <table id="dynamic_field">
                  <tr>
                  
                <td><center><strong> Name</strong></center><br><div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-user-secret"></i>
                  </div><input type="text" class="form-control name_list" name="name[]" placeholder="Enter Guardian Name" required></div></td>
           
            <td><center><strong>Contact Number</strong></center><br><div class="input-group"><div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div><input type="text" class="form-control name_list" id="phno" name="name1[]" placeholder="Enter Guardian contact No" maxlength="10" required></div> </td>
                  <td><center><strong>Mail id</strong></center><br><div class="input-group"><div class="input-group-addon">
                    <i class="fa  fa-envelope"></i>
                  </div><input type="email" class="form-control name_list" name="name2[]" placeholder="Enter Guardian Mail id" required></div> </td>
                  <td><br><br><button type="button" name="add" id="add" class="btn btn-primary">Add</button></td>
          </tr>
        </table>
            </div>
              </div>
              </div>
              <div class="form-group">    
              </div><br><br>
              <div class="box-footer">
                <center><button class="btn btn-warning" type="submit">Submit</button></center>
              </div>
            </form>
            </div>
           <br><br><br><br><br><br><br><br> 
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
<script>  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><br><div class="input-group"><div class="input-group-addon"><i class="fa fa-user-secret"></i></div><input type="text" name="name[]" placeholder="Enter Guardian Name" class="form-control" required/></div></td><td><br><div class="input-group"><div class="input-group-addon"><i class="fa fa-phone"></i></div><input type="text" name="name1[]" id="phno" maxlength="10" placeholder="Enter Guardian Contact no" class="form-control" required /></div></td><td><br><div class="input-group"><div class="input-group-addon"><i class="fa fa-envelope"></i></div><input type="email" name="name2[]" placeholder="Enter Guardian Mail id" class="form-control" required /></div></td><td><br><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      }); 

     $(document).on('keyup', '#dynamic_field #phno',function () {            
            if(!($.isNumeric($(this).val())))
                 { alert("Contact number accept DIGITS only");
                   $(this).val('');
                 }
        });
 
     
 });  
 </script>