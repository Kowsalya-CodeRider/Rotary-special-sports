<!DOCTYPE html>
<html>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        List of Institute
        <small>View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-md"></i>Publication :</a></li>        
        <li class="active">The Institute</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" align="right">
              <h3 class="box-title">Institute </h3>
            </div>

             <form class="form-horizontal" method="POST" action="<?php echo SITE_URL;?>Rotary/assign_institute">
              <?php 
              $pid = $this->uri->segment(3);
              $did = $this->uri->segment(4);        
              ?>
              <input type="hidden" name="id" id="id" value="<?php echo $pid;?>">
              <input type="hidden" name="did" id="did" value="<?php echo $did;?>">
              

            <div class="box-body">
             <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Assign Institute</th>         
                </tr>
                </thead>
                <tbody>
            <?php
            $i=0;
            
            foreach ($list_assign as $row) {
            
            ?>
            
                <tr>
                  <td><?php echo $i+1; ?></td>
                  <td>
                    <?php
                    if($row['rotractor_id'] =='')
                    {
                      ?>
                    <input type="checkbox" name="rid[]" value="<?php echo $row['sno']?>"> <?php echo $row['i_name']?>  
                    <?php
                    }
                    else
                    {
                    ?>
                    <input type="checkbox" name="rid[]" value="<?php echo $row['sno']?>" checked="checked" > <?php echo $row['i_name']?>  
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
            <div class="box-footer">
              <?php echo @$error; ?>
              <center><button class="btn btn-danger">Assign</button></center>
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
</body>
</html>
<?php include "script.php";?>