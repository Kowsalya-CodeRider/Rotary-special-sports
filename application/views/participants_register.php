<!DOCTYPE html>
<html>      
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
         Participation
        <small>Form</small>
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
            <form class="form-horizontal" name="participants_register" action="<?php echo SITE_URL;?>Rotary/participants_register" method="post">
              <br>
                <div class="form-group">
                <div class="col-md-5"></div>
                <div class="col-sm-3">
                  <img src=" " id="show" width="150px;">
                  <input type="file" name="picture" id="picture">
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Select Institution:</label>
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
                <label class="col-md-3 control-label">Name:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="p_name" name="name" placeholder="Enter participant name">
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Date of Birth:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="p_DOB" name="DOB" placeholder="Enter participant name">
            </div>
              </div>

              <div class="form-group" id="ages">
                <label class="col-md-3 control-label">Age:</label>
                <div class="col-md-8">
                 <div class="radio">
                 <?php
                 foreach($age_list as $row){
                  ?>
                  <label><input type="radio" name="age_category" id="age_category" class="age_category" value="<?php echo $row['id'];?>"><?php echo $row['age_category'];?></label>
                 <?php
                 }
                 ?>
                </div>
              </div>
                </div>
              <div class="form-group" id="gender">
                <label class="col-md-3 control-label">Gender:</label>
                <div class="col-sm-1">
                  <div class="radio">
                      <label><input type="radio" name="gender" id="p_male" value="Male"> Male </label>
                  </div>
                </div>
                <div class="col-sm-1">
                  <div class="radio">
                      <label><input type="radio" name="gender" id="p_female" value="Female"> Female </label>
                  </div>
            </div>
              </div>
              <div class="form-group" id="disability">
                <label class="col-md-3 control-label">Disability:</label>
                <div class="col-sm-6">
                  <div class="checkbox">
                    <div class="check">
                   <?php   
                   foreach($disability_list as $row){
                   ?>
                     <label><input type='checkbox' name="disability[]" id="disability" class="disability" onclick="disability_selection()" value="<?php echo $row['id']?>"><?php echo $row['disability']?></label><br>
                      <?php
                     }
                     ?>
                  </div>
                </div>
            </div>
              </div>
              <div class="form-group" id="events_field">
                <label class="col-md-3 control-label">Event list:</label>
                <div class="col-sm-6">
                	<div class="checkbox" id="checkbox">
                	<div id="events">
                   <label>
                 	<?php   
                   foreach($events_list as $row){
                   ?>
                     <input type='checkbox' name="events[]" value='<?php echo $row['id']?>'><?php echo $row['event_name']?><br>
                      <?php
                     }
                     ?>
                   </label>
                 </div>
				
                     </div>                  
            </div>
              </div><br>
              <div class="form-group">
                <label class="col-md-3 control-label">Address:</label>
                <div class="col-sm-6">
                  <textarea class="form-control" rows="3" placeholder="Enter the address of the participants" id="address" name="address"></textarea>
            </div>
              </div> 
              <div class="form-group">
                <label class="col-md-3 control-label">Special needs:</label>
                <div class="col-sm-6">
                  <textarea class="form-control" rows="3" placeholder="Enter the additional needs of the participants" id="special_needs" name="special_needs"></textarea>
            </div>
              </div> 
              <div class="box-footer">
                <center><button type="submit" name="submit" class="btn btn-warning">Submit</button></center>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
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
<script>

 function disability_selection(){

        var b = [];
        var a = [];

        $.each($("input[name='age_category']:checked"), function(){
      
      b.push($(this).val());
             
            $.each($("input[name='disability[]']:checked"), function(){            

                a.push($(this).val()); 

datastring = 'disability_id='+a+'&age_id='+b;

    $.ajax({ 
      url: "<?php echo SITE_URL; ?>Rotary/register", 
      type: "POST",
       data: datastring,
       dataType: "html", 
       success: function(data) 
       { 
  $("#events").empty();  
$("#events").html(data);
         },
          error: function(error) 
          { 
          alert(error);
          } 
        })
            });
            });  
 }
</script>
</body>
</html>