<?php
ob_start();
session_start();
include 'connect.php'; 
if (isset($_POST['submit_login'])) {
	$email = trim($_POST['email']);
	$email = strip_tags($email);
	$email = htmlspecialchars($email);

	$password = trim($_POST['password']);
	$password = strip_tags($password);
	$password = htmlspecialchars($password);
	$passwordword = hash('sha256', $password); // password hashing using SHA256
	$sql = "SELECT * FROM user WHERE username='".$email."' AND userpass ='".$passwordword."'";
	$result = $conn->query($sql);
	if ($result->num_rows == 1) {
		while($row = $result->fetch_assoc()) {
			$_SESSION['user'] = $row['userid'];
			$_SESSION['group'] = $row['usergroup'];
			//$_SESSION['option'.$row['optionname']] = $row['optionvalue'];
		}

	}
	else {
	echo '<h2 style="text-align:center;">Incorrect Credentials Try again</h2>';
	}
}
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>arshad Brothers </title>
		  <link href="assets/frontend/css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
		  <link rel="stylesheet" href="assets/frontend/css/icon-font.min.css">
		 <link href="assets/frontend/css/style.css" media="all" rel="stylesheet" type="text/css" />
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	  </head>

	<body class="login2" style="background-image: url('assets/frontend/images/bg.png')">
		<!-- Login Screen -->
		<div class="login-wrapper">
				<h2>arshad Brothers </h2>
						<form method="post" action="">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="lnr lnr-envelope"></i></span><input class="form-control" placeholder="Username or Email" type="text" name="email">
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="lnr lnr-lock"></i></span><input class="form-control" placeholder="Password" type="password" name="password">
					</div>
				</div>
				<div class="text-left ">
					<a class="pull-right" href="index3c65.html?users=forgot_password">Forgot password?</a>
				<div class="text-left">
			  <label class="checkbox">
			  <input type="checkbox" name="cookie_set" value="true"><span>Keep me logged in</span></label>
			</div>
				</div>
				<input class="btn btn-lg btn-primary btn-block" type="submit" value="Log in" name="submit_login">
			</form>
		</div>
	 <script src="assets/frontend/js/jquery-1.10.2.min.js" type="text/javascript">  </script>
		<script src="assets/frontend/js/bootstrap.min.js" type="text/javascript"></script>
<div class="copywright" style="text-align:center;"><a href="http://sidtechno.com.pk">Design and Develop by Sid Techno</a></div>
	</body>

	</html>
<?php  
if (isset($_SESSION['user'])) {
		header("Location: formlist.php");
} 
ob_end_flush();?>