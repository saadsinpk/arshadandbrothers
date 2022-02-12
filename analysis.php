<?php
ob_start();
session_start();
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); 
include 'header.php';
include 'connect.php';
if(!isset($_GET['Submitsearch'])) {
 header('Location: '.$website.'analysis.php?selectmonth='.date('m').'&selectyear='.date('Y').'&Submitsearch=Submit');
}
if (isset($_SESSION['user'])) {
if($_SESSION['group'] == '2' || $_SESSION['group'] == '1') {

if(!isset($_GET['selectyear'])) {
	$_GET['selectyear'] = '';
}
if(!isset($_GET['selectmonth'])) {
	$_GET['selectmonth'] = '';
}
?>
		  <div class="row">
		<div class="col-lg-12">
		<div class=" padded" >
						<h3>analysis</h3>
											</div>

			<div class="widget-container fluid-height">
				<div class="widget-content padded">
				 <div class="row">
				 	<form action="" method="get">
					 	<div class="col-lg-4 col-xs-4">
					 		<label>Select Month</label>
					 		<select name="selectmonth">
							    <option selected value=''>--Select Month--</option>
							    <option value='1' <?php if($_GET['selectmonth'] == '1') { echo 'selected';}?>>Janaury</option>
							    <option value='2' <?php if($_GET['selectmonth'] == '2') { echo 'selected';}?>>February</option>
							    <option value='3' <?php if($_GET['selectmonth'] == '3') { echo 'selected';}?>>March</option>
							    <option value='4' <?php if($_GET['selectmonth'] == '4') { echo 'selected';}?>>April</option>
							    <option value='5' <?php if($_GET['selectmonth'] == '5') { echo 'selected';}?>>May</option>
							    <option value='6' <?php if($_GET['selectmonth'] == '6') { echo 'selected';}?>>June</option>
							    <option value='7' <?php if($_GET['selectmonth'] == '7') { echo 'selected';}?>>July</option>
							    <option value='8' <?php if($_GET['selectmonth'] == '8') { echo 'selected';}?>>August</option>
							    <option value='9' <?php if($_GET['selectmonth'] == '9') { echo 'selected';}?>>September</option>
							    <option value='10' <?php if($_GET['selectmonth'] == '10') { echo 'selected';}?>>October</option>
							    <option value='11' <?php if($_GET['selectmonth'] == '11') { echo 'selected';}?>>November</option>
							    <option value='12' <?php if($_GET['selectmonth'] == '12') { echo 'selected';}?>>December</option>
					 		</select>
					 	</div>
					 	<div class="col-lg-4 col-xs-4">
					 		<label>Select Year</label>
					 		<select name="selectyear">
							    <option selected value=''>--Select Year--</option>
							    <option value='2026' <?php if($_GET['selectyear'] == '2026') { echo 'selected';}?>>2026</option>
							    <option value='2025' <?php if($_GET['selectyear'] == '2025') { echo 'selected';}?>>2025</option>
							    <option value='2024' <?php if($_GET['selectyear'] == '2024') { echo 'selected';}?>>2024</option>
							    <option value='2023' <?php if($_GET['selectyear'] == '2023') { echo 'selected';}?>>2023</option>
							    <option value='2022' <?php if($_GET['selectyear'] == '2022') { echo 'selected';}?>>2022</option>
							    <option value='2021' <?php if($_GET['selectyear'] == '2021') { echo 'selected';}?>>2021</option>
							    <option value='2020' <?php if($_GET['selectyear'] == '2020') { echo 'selected';}?>>2020</option>
							    <option value='2019' <?php if($_GET['selectyear'] == '2019') { echo 'selected';}?>>2019</option>
							    <option value='2018' <?php if($_GET['selectyear'] == '2018') { echo 'selected';}?>>2018</option>
							    <option value='2017' <?php if($_GET['selectyear'] == '2017') { echo 'selected';}?>>2017</option>
							    <option value='2016' <?php if($_GET['selectyear'] == '2016') { echo 'selected';}?>>2016</option>
							    <option value='2015' <?php if($_GET['selectyear'] == '2015') { echo 'selected';}?>>2015</option>
							    <option value='2014' <?php if($_GET['selectyear'] == '2014') { echo 'selected';}?>>2014</option>
							    <option value='2013' <?php if($_GET['selectyear'] == '2013') { echo 'selected';}?>>2013</option>
							    <option value='2012' <?php if($_GET['selectyear'] == '2012') { echo 'selected';}?>>2012</option>
							    <option value='2011' <?php if($_GET['selectyear'] == '2011') { echo 'selected';}?>>2011</option>
							    <option value='2010' <?php if($_GET['selectyear'] == '2010') { echo 'selected';}?>>2010</option>
					 		</select>
					 	</div>
					 	<div class="col-lg-4 col-xs-4"><br>
					 		<input type="submit" name="Submitsearch" value="Submit">
					 	</div>
					 </form>
		</div>
								<div class="row">
								  <div class="col-lg-12">
									<div class="widget-container fluid-height clearfix">

									  <div class="widget-content padded clearfix">
										<table class="table table-bordered table-striped" id="dataTable1">
										  <thead>
										  <tr row="">
											<th>
											  Ntn
											</th>
											<th class="check-header hidden-xs">
											  Sales Tax
											</th>
											<th>
											  Client Name
											</th>
											<th>
											 	Number
											</th>
											<th>
											  BILL DATE
											</th>
											</tr></thead>
										  <tbody>
											<?php
												if(isset($_GET['Submitsearch'])) {
													$selectmonths = $_GET['selectmonth'];
													$selectyear = $_GET['selectyear'];	
												}
												$sql = "SELECT *,COUNT(*) as totalnumber, SUM(salsalestaxrs) as sumofsalestax FROM arshaddata WHERE searchmonth = '$selectmonths' AND searchyear = '$selectyear' GROUP BY clinametext, clidatedtext";
												// $sql = "SELECT salsalestaxrs FROM arshaddata WHERE searchmonth = '$selectmonths' AND searchyear = '$selectyear'";
												$result = $conn->query($sql);
												while($row = $result->fetch_assoc()) {
											?>
													<tr>
													  <td>
														<?php echo $row['companyntn']; ?>
													  </td>
													  <td>
														<?php echo $row['sumofsalestax']; ?>
													  </td>
													  <td>
														<?php echo $row['clinametext']; ?>
													  </td>
													  <td>
														<?php echo $row['totalnumber']; ?>
													  </td>
													  <td>
														<?php echo $row['clidatedtext']; ?>
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
 else {
 header('Location: '.$website.'index.php');
 } 
ob_end_flush(); 
include 'footer.php'; ?>