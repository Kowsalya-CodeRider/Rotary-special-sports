<!DOCTYPE html>
<html>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        List of Rotractors
        <small>View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-md"></i>Publication :</a></li>        
        <li class="active">The Rotractor</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" align="right">
              <h3 class="box-title">Rotarians </h3>
            </div>
            <form class="form-horizontal" method="POST" action="<?php echo SITE_URL;?>Rotary/assign">
              <?php 
              $pid = $this->uri->segment(3);
          
              ?>
              <input type="hidden" name="id" id="id" value="<?php echo $pid;?>">
              
              

  
            <div class="box-body">
             <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Assign Rotractor</th>
                  <th>Assign Institute</th>         
                </tr>
                </thead>
                <tbody><td>
            <?php
            $i=0;
            
            foreach ($list_assign as $row) {
            
            ?>
            
                <tr>
                  <td><?php echo $i+1; ?></td>
                  <td>

                    <?php

                    if($row['rotarian_id'] == '')

                    {
                    ?>
                    <input type="checkbox" name="rid[]" id="checkbox"  value="<?php echo $row['id']; ?>"> <?php echo $row['name']?>
                    <?php
                  }
                  else
                  {
                  ?>
                  <input type="checkbox" name="rid[]" id="checkbox"  value="<?php echo $row['id']; ?>" checked="checked"> <?php echo $row['name']?>
                  <?php
                }
                ?>
                  </td> 
                  <td><a href="<?php echo SITE_URL;?>Rotary/assign_institute/<?php echo $row["id"]."/$pid";?>" class="btn btn-warning">Institute</a></td>       
               </tr>
               <?php
               $i++;
             }
           
             ?>
                </tbody>               
              </table>
            </div>
            <div class="box-footer">
              <?php echo @$error; ?>
              <center><button type="submit" class="btn bg-purple">Assign</button></center>
            </div>
          </form>
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
</body>
</html>