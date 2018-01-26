<?php
    $page_title = "View Students";

    $server = "localhost";
    $database = "snfssinformationsystem";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password, $database );

    # display students record
    $sql_students = "SELECT s.StudentID, st.StatusName, l.LevelName, c.ClearanceStatus, s.FirstName, s.LastName, s.Picture, s.Birthday, s.Email, s.ContactNo, s.Address, s.MotherFirstName, s.MotherLastName, s.MotherOccupation, s.FatherFirstName, s.FatherLastName, s.FatherOccupation, s.DateAdded, s.DateModified FROM students s INNER JOIN studentstatus st ON s.StudentStatusID = st.StudentStatusID INNER JOIN level l ON s.LevelID = l.LevelID INNER JOIN clearance c ON s.ClearanceID = c.ClearanceID WHERE s.StudentStatusName !='Archived'";
    $result_students = $con->query($sql_students)
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
            <li><a href="check.html"><i class="fa fa-circle-o"></i> Check enrollee requirements </a></li>
            <li><a href="create.html"><i class="fa fa-circle-o"></i> Create student record</a></li>
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
        <small>check enrollee requirement</small>
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
              <h3 class="box-title">View student record</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" class="form-horizontal">
  <div class="col-lg-12">
    <table id="tblUsers" class="table table-hover">
      <thead>
        <th>#</th>
        <th>Status</th>
        <th>Clearance</th>
        <th>Level</th>
        <th>Picture</th>
        <th>Name</th>
        <th>Email</th>
        <th>Birthday</th>
        <th>Contact#</th>
        <th>Address</th>
        <th>Mother's Name</th>
        <th>Mother's Occupation</th>
        <th>Father's Name</th>
        <th>Father's Occupation</th>
        <th>Added On</th>
        <th>Last Modified</th>
        <th></th>
      </thead>
      <tbody>
        <?php
          while ($row = mysqli_fetch_array($result_students))
          {
            $sid = $row['StudentID'];
            $status = $row['StudentStatusID'];
            $cid = $row['ClearanceID'];
            $level = $row['LevelID'];
            $pic = $row['Picture'];
            $fn = $row['FirstName'];
            $ln = $row['LastName'];
            $email = $row['Email'];
            $bday = $row['Birthday'];
            $no = $row['ContactNo'];
            $address = $row['Address'];
            $mfn = $row['MotherFirstName'];
            $mln = $row['MotherLastName'];
            $moccu = $row['MotherOccupation'];
            $ffn = $row['FatherFirstName'];
            $fln = $row['FatherLastName'];
            $foccu = $row['FatherOccupation'];
            $added = $row['DateAdded'];
            $modified = $row['DateModified'];

            echo "
              <tr>
                <td>$sid</td>
                <td>$status</td>
                <td>$cid</td>
                <td>$level</td>
                <td>$pc</td>
                <td>$ln, $fn</td>
                <td>$email</td>
                <td>$bday</td>
                <td>$no</td>
                <td>$address</td>
                <td>$mln, $mfn</td>
                <td>$moccu</td>
                <td>$ffn, fln</td>
                <td>$foccu</td>
                <td>$added</td>
                <td>$modified</td>
                <td>
                  <a href='details.php?id=$id' class='btn btn-xs btn-info'>
                    <i class='fa fa-edit'></i>
                  </a>
                  <a href='delete.php?id=$id' class='btn btn-xs btn-danger' 
                    onclick='return confirm(\"Archived record?\");''>
                    <i class='fa fa-trash'></i>
                  </a>
                </td>
              </tr>
            ";
          }

        ?>
      </tbody>
    </table>
    <script>
      $(document).ready(function(){
          $('#tblUsers').DataTable();
      });
    </script>
  </div>
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
