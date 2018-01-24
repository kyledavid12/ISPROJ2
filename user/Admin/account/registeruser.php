<?php
  $page_title = "Home Page";
  include_once('includes/header.php');
  //validateAccess();
  //validateAdmin();

    $uname = $fn = $ln = $email = $mobile = $address = $typeid = "";
    
    if (isset($_POST['add']))
    {
        $uname = validate_data($_POST['uname']); //username
        $fn = validate_data($_POST['fn']); //firstname
        $ln = validate_data($_POST['ln']); //lastname
        $email = validate_data($_POST['email']); //email
        $pw = hash('sha256', validate_data($_POST['pw'])); //password
        $rpw = hash('sha256', validate_data($_POST['rpw'])); //password
        $mobile = validate_data($_POST['mobile']); //contact number
        $address = validate_data($_POST['address']); //address
        $typeid = validate_data($_POST['typeid']); //employee type

        $sql_search = "SELECT * FROM users WHERE userName = '$uname'";
        $result_search = $con->query($sql_search) or die(mysqli_error($con));

        if(mysqli_num_rows($result_search) == 0)
        {            
                if($pw === $rpw)
                {
                    $sql_add = "INSERT INTO users VALUES ('', '$typeid', '$uname', '$fn', '$ln','$email', '$pw', '$mobile', '$address', 'Active', Now(), Now())";
                    $con->query($sql_add) or die(mysqli_error($con)); 
                    
                    header('location: /sv/admin/account/viewuser.php'); 
                }
                else{
                    echo "<script type='text/javascript'>alert('Password Does Not Match, Please Re-type!')</script>";
                }
                          
        }
        else
        {
            echo "<script type='text/javascript'>alert('User Name Exist, Please Change!')</script>";
        }  
    }

  ?>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        [Dashboard]
        <small>Welcome [Name / User Type]</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">User Registration</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post">
              <div class="box-body">
                <div class="col-md-4">
                  <label class="control-label">Username</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="col-md-4">
                  <label class="control-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="col-md-4">
                  <label class="control-label">Re-Type Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
              </div>
              <div class="row col-offset-4">
                <div class="col-md-3">
                  <div class="form-group label-floating">
                    <label class="control-label">Last Name</label>
                    <input type="text" name="ln" value="<?php echo $ln; ?>" class="form-control" maxlength="100" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group label-floating">
                    <label class="control-label">First Name</label>
                    <input type="text" name="fn" value="<?php echo $fn; ?>" class="form-control" maxlength="100" required>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group label-floating">
                    <select name="typeid" value="<?php echo $typeid; ?>" class="form-control" required>
                      <option value="1"<?php if(isset($_POST['typeid']) && $_POST['typeid']=="1"){echo "selected='selected'";}?>>Admin</option>
                      <option value="2"<?php if(isset($_POST['typeid']) && $_POST['typeid']=="2"){echo "selected='selected'";}?>>Staff</option>
                      <option value="3"<?php if(isset($_POST['typeid']) && $_POST['typeid']=="3"){echo "selected='selected'";}?>>Manager</option>
                    </select>

                  </div>
                </div>
              </div>
              <div class="row col-offset-4">
                <div class="col-md-4">
                  <div class="form-group label-floating">
                    <label class="control-label">Contact Number</label>
                    <input type="text" name="mobile" value="<?php echo $mobile; ?>" class="form-control" maxlength="20" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group label-floating">
                    <label class="control-label">Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" maxlength="100" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group label-floating">
                    <label class="control-label">Address</label>
                    <input type="text" name="address" value="<?php echo $address; ?>" class="form-control" maxlength="200" required>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<?php
    include_once('includes/footer.php');
?>
