<?php
ob_start();
session_start();
include 'header.php';
include 'connect.php';
if (isset($_SESSION['user'])) {
if($_SESSION['group'] == '2' || $_SESSION['group'] == '1') {
	if (isset($_GET['delete'])) { 
		$delete = $_GET['delete'];
		$sql = "DELETE FROM user WHERE userid = $delete" ;
		$result = $conn->query($sql);
		if (isset($result)) {
			echo '<h1>Delete Successfully</h1>';
		}
	}
	if (isset($_GET['id'])) {
 		$getappid = $_GET['id']; 
		if (isset($_POST['edituser'])) {

			$username = $_POST['username'];
			$password = $_POST['password'];
			$usergroup = $_POST['usergroup'];

			$passwordword = hash('sha256', $password); // password hashing using SHA256
			
			$sql1 = "UPDATE `user` SET `username` =  '$username', `userpass` =  '$passwordword', `usergroup` =  '$usergroup' WHERE userid = $getappid";
			$result1 = $conn->query($sql1);
			if ($result1) {
				echo '<h1>Update Successfully</h1>';
			}
		}
		$sql = "SELECT * FROM user WHERE userid=$getappid";

		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) { ?>


<div class="row">
   <div class="col-lg-12">
	  <div class=" padded" >
			<h3>User form</h3>
		</div>
		<div class="widget-container fluid-height">
			<div class="widget-content padded">
			<form action="" name="edituser" class="form-horizontal" method="post">
					<div class="row">
						<div class="col-lg-12">
						<h4>Edit User</h4>
						<input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo $row['username']; ?>" id="it_prc1">
						<input class="form-control" type="password" name="password" placeholder="Password"  id="it_prc1">
						<select name="usergroup">
							<option value="1" <?php if ($row['usergroup'] == '1') { echo 'selected'; } ?>>User</option>
							<option value="2" <?php if ($row['usergroup'] == '2') { echo 'selected'; } ?>>Admin</option>
						</select>
						<div class="col-lg-12">
							<button class="btn btn-primary pull-right" type="submit" name="edituser">Save</button>
						</div>
				</form>
			 </div>
		  </div>
	   </div>
	</div>
</div>

		<?php }
	}
	else {
	?>
			  <div class="row">
			<div class="col-lg-12">
			<div class=" padded" >
							<h3>User List</h3>
												</div>

				<div class="widget-container fluid-height">
					<div class="widget-content padded">
					 <div class="row">
			<div class="col-lg-12">
			   <a href="adduser.php" class="btn btn-default pull-right"> Add User</a>


			</div>
			</div>
							  <div class="heading tabs">
								<i class="icon-sitemap"></i>	
								<ul class="nav nav-tabs pull-left" data-tabs="tabs">
								  <li class="active">
									<a  href="#"><i class="icon-comments"></i><span>All</span></a>
								  </li>

								 </ul>

							  </div>

									<div class="row">
									  <div class="col-lg-12">
										<div class="widget-container fluid-height clearfix">

										  <div class="widget-content padded clearfix">
											<table class="table table-bordered table-striped" id="dataTable1">
											  <thead>
											  <tr row="">
												<th class="check-header hidden-xs">
												  Username
												</th>
												<th>User Group</th>
												<th>Action</th>
												</tr></thead>
											  <tbody>
												<?php
													$sql = "SELECT * FROM user";
													$result = $conn->query($sql);
													while($row = $result->fetch_assoc()) {
												?>
														<tr>
														  <td class="check hidden-xs">
															<?php echo $row['username']; ?>
														  </td>
														  <td>
															<?php if ($row['usergroup'] == '1') { echo 'User'; } elseif ($row['usergroup'] == '2') { echo 'Admin'; } ?>
														  </td>
														<td>
														  <div class="btn-group">
														<ul style="list-style:none;">
																											  <li style=" float:left; padding-left:10px;">
																											   <a href="user.php?id=<?php echo $row['userid'];?>"><i class="fa fa-edit"></i>Edit</a>
																											 </li>
																										  <li style=" float:left; padding-left:10px;">
															<a href="user.php?delete=<?php echo $row['userid'];?>"><i class="fa fa-edit"></i>Delete</a>
															  </li>
															</ul>
															
															</div>
														  </td>
														</tr>
													<?php
														}
													?>

											  </tbody>
											</table>
										  </div>
										</div>
									  </div>
									</div>
												</div>
				</div>
			</div>
		</div>
	<?php
	}
}
 }
 else {
 header('Location: http://sidtechno.com.pk/office/index.php');
 } 
ob_end_flush(); 
include 'footer.php'; ?>