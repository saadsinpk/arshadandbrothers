<?php
ob_start();
session_start();
include 'header.php';
include 'connect.php';
if (isset($_SESSION['user'])) {
if($_SESSION['group'] == '2' || $_SESSION['group'] == '1') {
if (isset($_POST['updateform'])) {

	$cusid = $_POST['cusid'];
	$passid = $_POST['passid'];
	$wirepass = $_POST['wirepass'];

	$sql6 = "UPDATE `customer` SET  `cusidpass` =  '$passid',  `cuswirepass` =  '$wirepass' WHERE cusid = $cusid";
	$result6 = $conn->query($sql6);
	if ($result6->num_rows == '1') {

	}	

	header('Location: '.$website.'passformlist.php');
}
?>

<div class="row">
   <div class="col-lg-12">
	  <div class=" padded" >
			<h3>Customer form</h3>
		</div>
		<div class="widget-container fluid-height">
			<div class="widget-content padded">
			<?php
				if( isset($_GET['id'])!="") { 
					$getid = $_GET['id'];

					$sql = "SELECT * FROM customer WHERE cusid = $getid";

					$result = $conn->query($sql);
					if ($result->num_rows != '1') {
						header('Location: '.$website.'passformlist.php');
					}
					while($row = $result->fetch_assoc()) { ?>
							<form action="" name="updateform" class="form-horizontal" method="post">
								<div class="row">
									<div class="col-lg-12">
										<h4>Customer</h4>
										<input class="form-control" type="hidden" name="cusid"  value="<?php echo $row['cusid']; ?>"   id="it_prc1">
										<input class="form-control" type="text" name="passid"  value="<?php echo $row['cusidpass']; ?>"  passholder="User id pass" id="it_prc1">
										<input class="form-control" type="text" name="wirepass"  value="<?php echo $row['cuswirepass']; ?>"  passholder="Wireless pass"  id="it_prc1">
									</div>
									<div class="col-lg-12">
										<button class="btn btn-primary pull-right" type="submit" name="updateform">Save</button>
									</div>
							<?php
								}
							}
							else {
							?>
				<?php } ?>
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