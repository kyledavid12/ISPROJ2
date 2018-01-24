<?php 
	$page_title = "View Enrollee Record";
    include_once('../../includes/header.php');
    validateAccess();
    validateAdmin();
?>
		    <div class="sidebar" data-color="red">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo" style="background-color: #ffffff;">
				<a href="<?php echo app_path ?>staff/index.php"><img src="<?php echo app_path ?>/dist/img/logo.png" oncontextmenu="return false" width="230" height="60" onmousedown="return false;"></a>
			</div>

	    	
		<div class="main-panel">
	    <?php 
	    	include_once('../../includes/header1.php');
	    	?>

            <div class="content">
	            <div class="container-fluid">
	                <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Student List</h4>
                                </div>
                                <div class="card-content table-responsive">
                       			
			                    	<form method="POST" class="form-horizontal">
										<div class="col-lg-12">
											<?php
												$sql_users = "SELECT u.StudentID, u.UserID, u.LevelID, u.GradeID, u.ClearanceID, t.StudentID, t.FirstName, u.LastName,u.Picture, u.Gender, 
											u.Birthday, u.Email, u.ContactNo, u.Address, u.MotherFirstName, u.MotherLastName, u.MotherOccupation, u.FatherFirstName, u.FatherLastName, u.FatherOccupation, u.StudentStatus, u.DateAdded, u.DateModified
												from users u 
												INNER JOIN types t ON u.StudentID = t.StudentID
												WHERE t.userType = 'Student'";

												$result_users = $con->query($sql_users);
											?>
											<table id="users" class="table table-hover">
												<thead>
													<th>Student ID</th>
													<th>User ID</th>
													<th>Level ID</th>
													<th>Grade ID</th>
													<th>Clearance ID</th>
													<th>First Name</th>
													<th>Middle Name</th>
													<th>Last Name</th>
													<th>Picture</th>
													<th>Gender</th>
													<th>Birthday</th>
													<th>Email</th>
													<th>ContactNo</th>
													<th>Address</th>
													<th>Mother First Name</th>
													<th>Mother Last Name</th>
													<th>Mother Occupation</th>
													<th>Father First Name</th>
													<th>Father Last Name</th>
													<th>Father Occupation</th>
													<th>Student Status</th>
													<th>Date Added</th>
													<th>Date Modified</th>
												</thead>
												<tbody>
													<?php
														while ($row = mysqli_fetch_array($result_users))
														{
															
															echo
															"<tr>
																
															</tr>";
														}
													?>
												</tbody>
											</table>								
										</div>
									</form>
									</div></div>
							<style type="text/css">
										.dt-buttons {
											margin-left: 50px;
										}
									</style>
							<script>
								$(document).ready(function() {
									$('#users').DataTable( {
										dom: 'l<".margin" B>frtip',
										buttons: [
										'copy', 'csv', 'excel', 'pdf', 'print'
										]
									} );
								} );
							</script>

						</div>
					</div>
	    		</div>
	    	</div>
	    </div>
<?php
	include_once('../../includes/footer.php');
?>