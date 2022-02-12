<?php
ob_start();
session_start();
include 'header.php';
include 'connect.php';
if (isset($_SESSION['user'])) {
if($_SESSION['group'] == '2' || $_SESSION['group'] == '1') {
if (isset($_POST['adduser'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$usergroup = $_POST['usergroup'];

	$passwordword = hash('sha256', $password); // password hashing using SHA256

	$sql2 = "INSERT INTO `user` (`username`, `userpass`, `usergroup`) 
	VALUES ('$username', '$passwordword	', '$usergroup')";
	$result2 = $conn->query($sql2);
	header('Location: '.$website.'/user.php');
}
?>

<div class="row">
   <div class="col-lg-12">
	  <div class=" padded" >
			<h3>Applicant form</h3>
		</div>
		<div class="widget-container fluid-height">
			<div class="widget-content padded">
				<form action="<?php echo $website;?>adduser.php" name="adduser" class="form-horizontal" method="post">
						<div class="row">
							<div class="col-lg-12">
							<h4>Add User</h4>
							<input class="form-control" type="text" name="username" placeholder="Username" id="it_prc1">
							<input class="form-control" type="password" name="password" placeholder="Password"  id="it_prc1">
							<select name="usergroup">
								<option value="1">User</option>
								<option value="2">Admin</option>
							</select>
							<div class="col-lg-12">
								<button class="btn btn-primary pull-right" type="submit" name="adduser">Save</button>
							</div>
					</form>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
 }
 }
 else {
 header('Location: '.$website.'');
 } 
ob_end_flush(); 
include 'footer.php'; ?>