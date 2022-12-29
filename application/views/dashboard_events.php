<!DOCTYPE html>
<html>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Events list
        <small>View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa  fa-gg"></i>Headquarters :</a></li>        
        <li class="active">Evanston, Illinois, United States</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" align="right">
              <h3 class="box-title">Events</h3>
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Events</th>
                </tr>
                </thead>
                <tbody>
            <?php
            $i=0;
            foreach ($results as $row) {
            ?>
            
                <tr>
                  <td><?php echo $i+1; ?></td>
                  <td><?php echo $row->event_name?></td>
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
</body>
</html>
<?php include "script.php";?>
<script>


$(document).ready(function() {
    
  
    $('#example1').DataTable()
    $('#example2').DataTable({

      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : false,
      'info'        : true,
      'autoWidth'   : false

    })
  

} );
  
</script>