<?php
$page_title = "Register a User";

    $server = "localhost";
    $database = "snfssinformationsystem";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password, $database );

    
# list of gender
    $sql_gender = "SELECT genderName, genderID FROM gender";
     $result_gender =$con->query($sql_gender);

     $list_gender = "";
     while($row = mysqli_fetch_array($result_gender))
     {
        $genderID= $row['genderID'];
        $genderName= $row['genderName'];
        $list_gender .="<option value='$genderID'>$genderName</option>";
     }

     # list of status
    $sql_status = "SELECT StatusName, StatusStudentID FROM statusstudent";
     $result_status =$con->query($sql_status);

     $list_status = "";
     while($row = mysqli_fetch_array($result_status))
     {
        $statusStudentID= $row['StatusStudentID'];
        $statusName= $row['StatusName'];
        $list_status .="<option value='$statusStudentID'>$statusName</option>";
     }

     # list of level
    $sql_level = "SELECT LevelName, LevelID FROM level ORDER BY LevelID";
     $result_level =$con->query($sql_level);

     $list_level = "";
     while($row = mysqli_fetch_array($result_level))
     {
        $LevelID= $row['LevelID'];
        $LevelName= $row['LevelName'];
        $list_level .="<option value='$LevelID'>$LevelName</option>";
     }
     
    # add a student
  if (isset($_POST['add']))
  {
    
    $statusStudentid = mysqli_real_escape_string($con, $_POST['StatusStudentID']);
    $levelid = mysqli_real_escape_string($con, $_POST['LevelID']);
    $fn = mysqli_real_escape_string($con, $_POST['FirstName']);
    $mn = mysqli_real_escape_string($con, $_POST['MiddleName']);
    $ln = mysqli_real_escape_string($con, $_POST['LastName']);
    $pic = mysqli_real_escape_string($con, $_POST['Picture']);
    $genderid = mysqli_real_escape_string($con, $_POST['GenderID']);
    $bday = mysqli_real_escape_string($con, $_POST['Birthday']);
    $email = mysqli_real_escape_string($con, $_POST['Email']);
    $contactNo = mysqli_real_escape_string($con, $_POST['ContactNo']);
    $address = mysqli_real_escape_string($con, $_POST['Address']);
    $mFN = mysqli_real_escape_string($con, $_POST['MotherFirstName']);
    $mLN = mysqli_real_escape_string($con, $_POST['MotherLastName']);
    $mOccu = mysqli_real_escape_string($con, $_POST['MotherOccupation']);
    $fFN = mysqli_real_escape_string($con, $_POST['FatherFirstName']);
    $fLN = mysqli_real_escape_string($con, $_POST['FatherLastName']);
    $fOccu = mysqli_real_escape_string($con, $_POST['FatherOccupation']);

    $sql_add = "INSERT INTO students (`StudentID`, `StatusStudentID`, `LevelID`, `FirstName`, `MiddleName`, `LastName`, `Picture`, `GenderID`, `Birthday`, `Email`, `ContactNo`, `Address`, `MotherFirstName`, `MotherLastName`, `MotherOccupation`, `FatherFirstName`, `FatherLastName`, `FatherOccupation`, `DateAdded`, `DateModified`) VALUES ('', $statusStudentid, $levelid, '$fn', '$mn', '$ln', '$pic', $genderid, '$bday', '$email', '$contactNo', '$address', '$mFN', '$mLN', '$mOccu', '$fFN', '$fLN', '$fOccu', NOW(), NULL)";

    // $sql_add = "INSERT INTO students VALUES ('', $statusid, $levelid, '$fn', '$mn', '$ln', '$pic', $genderid, '$bday', '$email', '$contactNo', '$address', '$mFN', '$mLN', '$mOccu', '$fFN', '$fLN', '$fOccu', NOW(), NULL)";

    $con->query($sql_add) or die(mysqli_error($con));
    # edit location  
    header('location:../student/index.php');
  }

    
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Sto. Nino Formation and Science School| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../../dist/css/skins/skin-red.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>IS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SNFS-SIS</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
        
                
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">[Name]</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  [Name] - [User Type]
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>[Name of User]</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Account Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="account/update.html"><i class="fa fa-circle-o"></i> Update account details</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Enrollment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="view.php"><i class="fa fa-circle-o"></i> Check enrollee requirements </a></li>
            <li><a href="create.php"><i class="fa fa-circle-o"></i> Create student record</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Student Record</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../student/index.html"><i class="fa fa-circle-o"></i>Manage student record</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Student Clearance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../clearance/index.html"><i class="fa fa-circle-o"></i> View student clearance</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Reports </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="account/update.html"><i class="fa fa-circle-o"></i> Generate reports</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Website</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="account/update.html"><i class="fa fa-circle-o"></i> View inquiries</a></li>
          </ul>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Enrollment
        <small>process enrollment</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
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
              <h3 class="box-title">Create student record</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" class="form-horizontal">
              <div class="box-body">

                <div class="form-group">
                  <label for="firstName" class="col-sm-2 control-label">First name</label>

                  <div class="col-sm-10">
                    <input type="text" name="FirstName"  class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="middleName" class="col-sm-2 control-label">Middle name</label>

                  <div class="col-sm-10">
                    <input type="text" name="MiddleName"  class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="lastName" class="col-sm-2 control-label">Last name</label>

                  <div class="col-sm-10">
                    <input type="text" name="LastName"  class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Gender</label>
                  <div class="col-sm-10">
                    <select name="GenderID"  class="form-control" required>
                      <option>
                        </option>
                        <?php echo $list_gender; ?>
                        </select>     
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Birthday</label>

                  <div class="col-sm-10">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="date" name="Birthday"  class="form-control" required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" name="Email"  class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="contactNp" class="col-sm-2 control-label">Contact number</label>

                  <div class="col-sm-10">
                    <input type="number" name="ContactNo"  class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="address" class="col-sm-2 control-label">Address</label>

                  <div class="col-sm-10">
                    <input type="text" name="Address"  class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="momFirstName" class="col-sm-2 control-label">Mother's first name</label>

                  <div class="col-sm-10">
                    <input type="text" name="MotherFirstName"  class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="momLastName" class="col-sm-2 control-label">Mother's last name</label>

                  <div class="col-sm-10">
                    <input type="text" name="MotherLastName"  class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="momOccupation" class="col-sm-2 control-label">Mother's occupation</label>

                  <div class="col-sm-10">
                    <input type="text" name="MotherOccupation"  class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="dadaFirstName" class="col-sm-2 control-label">Father's first name</label>

                  <div class="col-sm-10">
                    <input type="text" name="FatherFirstName"  class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="dadLastName" class="col-sm-2 control-label">Father's last name</label>

                  <div class="col-sm-10">
                    <input type="text" name="FatherLastName"  class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="dadOccupation" class="col-sm-2 control-label">Father's occupation</label>

                  <div class="col-sm-10">
                    <input type="text" name="FatherOccupation"  class="form-control" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Level</label>
                  <div class="col-sm-10">
                    <select name="LevelID"  class="form-control" required>
                      <option placeholder="">
                        </option>
                        <?php echo $list_level; ?>
                        </select>     
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                    <select name="StatusStudentID"  class="form-control" required>
                      <option>
                        </option>
                        <?php echo $list_status; ?>
                        </select>     
                  </div>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Picture </label>
                  <div class="col-sm-10">
                    <input type="file" name="Picture"  id="exampleInputFile" >
                  </div>
                </div>


                <!-- /.input group -->
              </div>
              <!-- /.box-body -->
              <div class="form-group">
      <div class="col-lg-offset-4 col-lg-8">
        <button name="add" type="submit" class="btn btn-success">
          Add
        </button>
      </div>
    </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2017-2018 <a href="https://adminlte.io">Sto. Nino Formation and Science School</a>.</strong> All rights
    reserved.
  </footer>



<!-- jQuery 3 -->
<script src="../../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="../../../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- InputMask -->
<script src="../../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- DataTables -->
<script src="../../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- jvectormap  -->
<script src="../../../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="../../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="../../../bower_components/Chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
  })
</script>
</body>
</html>
