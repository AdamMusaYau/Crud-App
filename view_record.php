<?php
 require_once('config/db.php');
 $dbb = new operations();
 $dbb->delete();
$dbb->get_userID();
 $result = $dbb->fetch_record();

?>
<!DOCTYPE html>
<html>
<head>
 <?php include('inc/header.php'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include("inc/nav.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php /*include("sidebar.php");*/ ?>
  
    <!-- Main content -->
    <section class="content" style="height: 700px;">
      <!-- Info boxes -->
     <div class="col-md-8 col-sm-offset-2 mt-5">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border  bg-info">
              <h3 class="box-title"> <span class="fa fa-edit"></span> Manage Users</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
              <?php $dbb->display_message(); ?>
              <table id="example1" class="table table-bordered table-responsive-lg table-striped" style="font-size: 12px; width: 100%; ">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>FullName</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Phone No.</th>
                  <th>Password</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
            <?php
                    $count = 1;
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    
            ?>
                <tr>
                <td><?php echo $count++; ?></td>
                <td><?php echo $row["fullname"]; ?></td>
                <td><?php echo $row["username"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php echo $row["pass"]; ?></td>

                <form method="POST">
                <td align="center"><button type="submit" name="btn_getID" value="<?php echo $row['user_id']; ?>"  class="btn  btn-xs btn-info fa  fa-check-circle fa-sm" ><strong style="font-size: 12px;"> Edit</strong></button></td>
                <td align="center"><button type="submit" name="btn_delete" value="<?php echo $row['user_id']; ?>"  onClick= "return confirm('Are you sure you want to delete this record?')" class="btn  btn-sm btn-danger fa  fa-trash fa-xs" ><strong style="font-size: 12px;"> Delete</strong></button></td>
                </form>

                </tr>
                <?php
                }
                ?>
               
                </tbody>
                
              </table>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                
              </div>
          </div>
          <!-- /.box -->

       
    </section>
     
</div>
<!-- ./wrapper -->

<?php include('inc/main_js.php'); ?>
</body>
</html>
