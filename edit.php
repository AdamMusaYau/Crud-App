<?php
 require_once('config/db.php');
 $dbb = new operations();
 $dbb->update();
 $query = $dbb->get_record($_SESSION['userID']);
 $result = mysqli_fetch_array($query);
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
    <section class="content" style="height: 600px;">
      <!-- Info boxes -->
     <div class="col-md-6 col-sm-offset-3 mt-5">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border  bg-info">
              <h3 class="box-title"> <span class="fa fa-edit"></span> Update Record</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form"  method="post" enctype="multipart/form-data">
              <div class="box-body">
              <?php $dbb->display_message();?>
                <div class="form-group col-md-12">
                  <label > FullName </label>
                  <input type="hidden" hidden  class="form-control" name="user_id" placeholder="  User_id" value="<?php echo $result['user_id']; ?>">
                  <input type="text" required class="form-control" name="fname" placeholder="  FullName" value="<?php echo $result['fullname']; ?>">
                </div>
                <div class="form-group col-md-12">
                  <label > Username</label>
                  <input type="text" required class="form-control" name="username" placeholder=" Username"  value="<?php echo $result['username']; ?>">
                </div>
                <div class="form-group col-md-12">
                  <label > Email</label>
                  <input type="email" required class="form-control" name="email" placeholder=" Email"  value="<?php echo $result['email']; ?>" readonly>
                </div>
                <div class="form-group col-md-12">
                  <label > Phone No.</label>
                  <input type="number" required class="form-control" name="phone" placeholder="  Phone No."  value="<?php echo $result['phone']; ?>">
                </div>
                <div class="form-group col-md-12">
                  <label > Password</label>
                  <input type="password" required class="form-control" name="password" placeholder=" Password."  value="<?php echo $result['pass']; ?>">
                </div>
                
               

                <div class="form-group col-md-4 col-sm-offset-4">
                      <button type="submit" name="btn_update" class="btn btn-primary form-control">UPDATE</button>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                
              </div>
            </form>
          </div>
          <!-- /.box -->

       
    </section>
     
</div>
<!-- ./wrapper -->

<?php include('inc/main_js.php'); ?>
</body>
</html>
