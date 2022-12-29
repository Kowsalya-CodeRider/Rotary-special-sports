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
            <form class="form-horizontal" action="<?php echo SITE_URL;?>Rotary/participants_edit" method="post">
               <div class="form-group">
                <div class="col-md-5"></div>
                <div class="col-sm-3">
                  <img src="<?php echo UPLOAD_URL.$plist->picture;?>" id="show" width="150px;">
                  <input type="file" name="picture" id="picture">
                  <input type="hidden" name="photo" value="<?php echo $plist->picture;?>">
                  <input type="hidden" name="still" value="<?php echo UPLOAD_URL;?>a.png">
            </div>
              </div>
             <div class="form-group">
                <label class="col-md-3 control-label">Institution:</label>
                <div class="col-sm-6">
            <select class="form-control select2" style="width: 100%;" name="institute_list" required>
             <?php
             $a = $plist->institute;
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
                <div class="col-sm-7">
                <input type="hidden" class="form-control" name="id" value="<?php echo $plist->id;?>" >
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Name:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="name" value="<?php echo $plist->name;?>">
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Age:</label>
                <div class="col-sm-8">
                  <div class="radio">
                 <?php
                 $b = $plist->age;
                 foreach ($alist as $row)
                 {
                 ?>
                 <label><input type="radio" name="age_category" <?php if($row['id'] == "$b"){ echo 'checked="checked"';}?> value="<?php echo $row['id']?>">  <?php echo $row['age_category'];?></label>
                 <?php
               }
               ?>
             </div>
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
                <label class="col-md-3 control-label">Disability:</label>
                <div class="col-sm-6">
                  <div class="checkbox">
                  <?php
                  if(count($dlist) == 0)
                  {
                  ?>
                  <div class="check">
                   <?php   
                   foreach($disability_list as $row){
                   ?>
                     <label><input type='checkbox' name="disability[]" id="disability" class="disability" onclick="disability_selection()" value="<?php echo $row['id']?>"><?php echo $row['disability']?></label><br>
                      <?php
                     }
                     ?>
                  </div>
                  <?php
                }
                else
                {
                  ?>
                  <div class="check">
                   <?php  
                   foreach($dlist as $row)
                   {
                   	$c = $row->id;
                   }
                   	?>
                   	<?php
                   foreach($disability_list as $row){
                   ?>
                     <label><input type='checkbox' <?php if($row['id'] == "$c"){echo 'checked="checked"';}?> name="disability[]" id="disability" class="disability" onclick="disability_selection()" value="<?php echo $row['id']?>"><?php echo $row['disability']?></label><br>
                      <?php
                     }
                 
                     ?>
                  </div>

                  <?php

              }
              ?>
            </div>
            </div>
              </div>
               <div class="form-group">
                <label class="col-md-3 control-label">Events:</label>
                <div class="col-sm-6">
                  <div class="checkbox">
                  <?php
                  if(count($elist) == 0)
                  {
                  ?>
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
                  <?php
                }
                else
                {
                ?>
                <div id="events">
                	
                	<?php 
             
                  $a = $elist;
                  $d = json_decode(json_encode($a), True);
                  for($i = 0; $i < count($d); $i++)
                  {
                    $r = $d;
  					$s = array_map('current', $r);
                  }
                    


                  foreach ($games as $row){   
                  	?>

                  <label><input type="checkbox" 
                  	<?php
                  	
                  if(in_array($row->id, $s))
                  	{
                  	 echo 'checked = "checked"';
                  	}

                  	?> name="events[]" value="<?php echo $row->id;?>" >
                  <?php echo $row->event_name?>
                </label>
                <br>
                <?php
              }

          
          ?>
          </div>
          <?php
            }
              ?>
            </div>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Address:</label>
                <div class="col-sm-6">
                  <textarea class="form-control" rows="3" id="address" name="address"><?php echo $plist->address?></textarea>
            </div>
              </div> 
              <div class="form-group">
                <label class="col-md-3 control-label">Special needs:</label>
                <div class="col-sm-6">
                  <textarea class="form-control" name="special_needs" id="special_needs"><?php echo $plist->special_needs;?></textarea>
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