<!DOCTYPE html>
<html>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Rotarians list
        <small>View</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-md"></i>Publication :</a></li>        
        <li class="active">The Rotarian</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" align="right">
              <h3 class="box-title">Rotarians </h3>   <a href="<?php echo SITE_URL;?>Rotary/rotarians_register" class="btn btn-info">Add</a>
            </div>
            <div class="box-body">
             <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Rotarians Name</th>
                  <th>View</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  <th>Assign Rotractors</th>
                </tr>
                </thead>
                <tbody>
            <?php
            $i=0;
            foreach ($rotarian_list as $row) {
            ?>
            
                <tr>
                  <td><?php echo $i+1; ?></td>
                  <td><?php echo $row->name?></td>
                  <td><a href="<?php echo SITE_URL;?>Rotary/rotarian_view/<?php echo $row->id;?>"><button type="button" class="btn btn-warning">View</td>
                  <td><a href="<?php echo SITE_URL;?>Rotary/rotarian_edit/<?php echo $row->id;?>"><button type="button" class="btn btn-success">Edit</td>
                  <td><a href="<?php echo SITE_URL;?>Rotary/rotarian_delete/<?php echo $row->id; ?>"><button type="button" class="btn btn-danger" onclick="return confirmDelete();" />Delete</button></a></td>
                  <td><a href="<?php echo SITE_URL;?>Rotary/assign/<?php echo $row->id;?>"><button type="button" class="btn bg-purple">Assign</button></a></td>
                  
               </tr>
               <?php
               $i++;
             }
             ?>
                </tbody>
                <script type="text/javascript">
                          function confirmDelete() {
                         return confirm('Are you sure you want to delete');
                          }
                    </script>
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