<?php
ob_start();
session_start();
 include_once 'connect.php';
if (isset($_SESSION['user'])) {
if($_SESSION['group'] == '2' || $_SESSION['group'] == '1') {
if (isset($_GET['id'])) {
	$getappid = $_GET['id'];
	$sql = "SELECT * FROM customer LEFT JOIN package ON customer.cuspackage = package.packageid WHERE cusid=$getappid ";
	$result = $conn->query($sql);
	if ($result->num_rows == 1) {
		while($row = $result->fetch_assoc()) {
		?>
			<html>
			<head>
				<style>
				body {
					font-size: 25px;
				}
				</style>
			</head>
				<body>
						<img src="print/user form.jpg" style="width: 831px;height: 1285px;float: left;margin: 0 auto;text-align: center;z-index: 1;position: absolute;padding: 0;">
						<div class="printpage1" style="width: 831px;height: 1285px;margin: 0 auto;background-repeat: no-repeat;background-size: 100%;z-index: 5;position: absolute;">
						<div class="date" style="padding-top: 180px;padding-left: 150px;"><?php echo date("Y/m/d"); ?></div>
						<div class="name" style="padding-left: 160px;padding-top: 8px;    float: left;" ><?php echo $row['cusname']; //name ?></div>
						<div class="fathername" style="padding-left: 295px;    padding-top: 8px;    float: left;" ><?php echo $row['cusfathername']; //name ?></div>
						<div class="clear" style="clear:both;"></div>
						<div class="Cnic" style="    padding-left: 139px;    padding-top: 4px;    letter-spacing: 8px;    float: left;"><?php echo $row['cuscnic']; //Cnic ?></div>
						<div class="expiry" style="    padding-left: 139px;    padding-top: 4px;    float: left;"><?php echo $row['cusexpiry']; //Cnic ?></div>
						<div class="clear" style="clear:both;"></div>
						<div class="Mobile" style="padding-left: 115px; padding-top: 38px;"><?php echo $row['cuscontact']; //Mobile ?></div>
						<div class="Address" style="padding-left: 140px;font-size: 16px;padding-top: 45px;"><?php echo $row['cusaddress']; //Address ?></div>
						<div class="Package" style="padding-top: 6px;padding-left: 163px;"><?php echo $row['packagename']; //Package ?></div>

						<?php 
							if ($row['custype'] == '1') {
								echo '<div class="cus1" style="    padding-left: 209px;    padding-top: 16px;    font-size: 20px;    float: left;" >Y</div>';
							} else {
								echo '<div class="cus2" style="    padding-left: 415px;    padding-top: 16px;    float: left;    font-size: 20px;" >Y</div>';
							}
						?>

                        <div class="UserID" style="position: absolute; width: 238px; height: 100px; font-size: 22px; z-index: 1; left: 120px; top: 1002px" id="layer1"> 	<?php echo $row['cususerid']; //userid ?> </div>
	
						<div class="clear" style="clear:both;"></div>
					</div>
				</body>
			</html>

<?php
		}
	}
	else {
		$html = '<h2 style="text-aling: center;">Your link is incorrect</h2> ';
	}
}
else {
	$html = '<h2 style="text-aling: center;">Your link is incorrect</h2> ';
}
}
}
 else {
 header('Location: '.$website.'');
 } 

ob_end_flush();?>