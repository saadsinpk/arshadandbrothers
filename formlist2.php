<?php
ob_start();
session_start();
include 'header.php';
include 'connect.php';
if (isset($_SESSION['user'])) {
if($_SESSION['group'] == '2' || $_SESSION['group'] == '1') {

if (isset($_POST['payform'])) {

	$adminuser = $_SESSION['user'];
	$amount = $_POST['amount'];
	$pkname = $_POST['pkname'];
	$pkcom = $_POST['pkcom'];
	$pkmonth = $_POST['pkmonth'];
	$payfor = $_POST['payfor'];
	$pkyear = date("Y");
	$curstatus = $_POST['curstatus'];
	$customerid = $_POST['customerid'];
	$skyuserid = $_POST['skyuserid'];
	$skynic = $_POST['skynic'];
	$today = date("d");

		$sql2 = "SELECT * FROM customer LEFT JOIN package ON customer.cuspackage = package.packageid WHERE cusid <= '$pkname'";
	$result2 = $conn->query($sql2);
	while($row2 = $result2->fetch_assoc()) { 
		$userprevbalance = $row2['cusprevbals'];
		$userbalance = $row2['cusbalance'];
		$newuserbalance = $amount + $userbalance;
		
		$sqlupdate7 = "UPDATE `customer` SET `cusbalance` =  '$newuserbalance' WHERE cusid = $pkname";
		$resultupdate7 = $conn->query($sqlupdate7);
	
	}

	$todaymonth = date("F");
	
	$currentdatetime = date('Y-m-d H:i:s');
	
	$sql6 = "INSERT INTO `payment` (`payuser`, `paypackage`, `paymonth`, `payamount`, `payyear`, `payfor`, `payadmin`, `paydate`, `paycurmon`, `paytime`) 
	VALUES 
	('$pkname', '$pkcom', '$pkmonth', '$amount', '$pkyear', '$payfor', '$adminuser', '$today', '$todaymonth', '$currentdatetime')";
	$result6 = $conn->query($sql6);
    $last_pay = $conn->insert_id;
	echo '<div class="col-lg-12">
	<a href="print2.php?id='.$last_pay.'" class="btn btn-primary">Print</a>
	</div>';
	if (isset($_POST['status'])) {
		if ($_POST['status'] == '1') {
			if ($curstatus == '1' ) {?>			
			<script>
			$(document).ready(function() {	
				var urlList = "<?php echo $website;?>statusfariya.php?userid=<?php echo $skyuserid; ?>, <?php echo $website;?>/print2.php?id=<?php echo $last_pay;?>"
				$.each( urlList.split( "," ), function( index, item ) {
					window.open( item, "_blank" )
				});
			});
			</script>
				<?php
			}
			else {?>
			<script>
			$(document).ready(function() {	
				var urlList = "<?php echo $website;?>statusfariya.php?userid=<?php echo $skyuserid; ?>, <?php echo $website;?>/print2.php?id=<?php echo $last_pay;?>"
				$.each( urlList.split( "," ), function( index, item ) {
					window.open( item, "_blank" )
				});
			});
			</script>
			<?php
			}
		}
	} else {?>
		<script>
			$(document).ready(function() {	
				var urlList = "<?php echo $website;?>print2.php?id=<?php echo $last_pay;?>"
				$.each( urlList.split( "," ), function( index, item ) {
					window.open( item, "_blank" )
				    window.history.back();

				});
			});
		</script>
	<?php }
}
?>

		  <div class="row">
		<div class="col-lg-12">
		<div class=" padded" >
						<h3>Status List</h3>
											</div>

			<div class="widget-container fluid-height">
				<div class="widget-content padded">
				 <div class="row">
		</div>
		<div class="row">
		<div class="col-lg-12">
		   <a href="form.php" class="btn btn-default pull-right"> Add Form</a>
		   <h2 style="text-align:center;"><a href="statusoff.php">You have 
		   <?php $resullt = $conn->query("SELECT count(*) as total from customer WHERE  `cusstatus` =  '2'");
	while($row2 = $resullt->fetch_assoc()) { 
echo $row2['total']; 
}?> Account suspend</a></h2>


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
										<table id="customertab" class="display" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th>S.no</th>
													<th>Name</th>
													<th>Address</th>
													<th>Contact</th>
													<th>IP</th>
													<th>User I.D</th>
													<th>Package</th>
													<th><?php echo date("F", strtotime("first day of previous month")); ?></th>
													<th><?php echo date("F"); ?></th>
													<th><?php echo date("F", strtotime("+1 months")); ?></th>
													<th>Expiry</th>
													<th>Wifi Pass</th>
													<th>ID Pass</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>S.no</th>
													<th>Name</th>
													<th>Address</th>
													<th>Contact</th>
													<th>IP</th>
													<th>User I.D</th>
													<th>Package</th>
													<th><?php echo date("F", strtotime("first day of previous month")); ?></th>
													<th><?php echo date("F"); ?></th>
													<th><?php echo date("F", strtotime("+1 months")); ?></th>
													<th>Expiry</th>
													<th>Wifi Pass</th>
													<th>ID Pass</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</tfoot>
										</table>
									  </div>
									</div>
								  </div>
								<div class="col-lg-12">
										<a id="stutusid" class="btn btn-primary pull-right" href="#">Status</a>
								</div>
								</div>
											</div>
			</div>
		</div>
	</div>
<?php
}
}
 else {
 header('Location: '.$website.'index.php');
 } 
ob_end_flush(); 
include 'footer.php'; ?>