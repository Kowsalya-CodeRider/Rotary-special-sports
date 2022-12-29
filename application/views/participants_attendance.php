<!DOCTYPE html>
<html>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Partipants list
        <small>View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-child"></i>Charlotte North Rotary Club:</a></li>
        <li class="active">Charlotte - North Carolina</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" align="right">
              <h3 class="box-title">Participants Attenadance</h3>   
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Participants Name</th>
                  <th>Attendance</th>  
                </tr>
                </thead>
                <tbody>
            <?php
            $i=0;
            foreach ($participants_list as $row) {
            ?>
            
                <tr>
                  <td><?php echo $i+1; ?></td>
                  <td><?php echo $row->name?></td>
                  <td>
                      <?php
                        if($row->attendence=='1')
                        {
                          ?>
                          <label style="background-color: blue"><input type="checkbox" name="attendance" id="attendance" class="attendance" value="<?php echo $row->id?>" onclick="attendance(a=0)"></label> Present
                          <?php
                        }
                        else
                        {
                      ?>
                    <label style="background-color: red"><input type="checkbox" name="attendance" id="attendance" class="attendance" value="<?php echo $row->id?>" onclick="attendance(a=1)"></label> Absent
                    <?php
                  }

                  ?>
                  </td>
               </tr>
               <?php
               $i++;
             }
             ?>
                </tbody>
                              </table>
               
            </div>
          </div>    
        </div>
      </div>
    </section>
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
<script>
       function attendance(a){

        var b = [];

        $.each($("input[class='attendance']:checked"), function(){
      
          b.push($(this).val());

          datastring = 'attendance='+b+'&id='+a;
      
//alert(datastring);
    $.ajax({ 
      url: "<?php echo SITE_URL; ?>Rotary/attendance", 
      type: "POST",
       data: datastring,
       dataType: "html", 
       success: function(data) 
       { 
 
         },
          error: function(error) 
          { 
         // alert(error);
          } 
        })
    
          });       
 }
</script>
</body>
</html>