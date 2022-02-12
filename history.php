<?php
ob_start();
session_start();
include 'header.php';
include 'connect.php';
if (isset($_SESSION['user'])) {
if($_SESSION['group'] == '2' || $_SESSION['group'] == '1') {
	if (isset($_GET['id'])) {
?>
		  <div class="row">
		<div class="col-lg-12">
		<div class=" padded" >
						<h3></h3>
											</div>

			<div class="widget-container fluid-height">
				<div class="widget-content padded">
				 <div class="row">
		</div>
						  <div class="heading tabs">
							<i class="icon-sitemap"></i>	
							<ul class="nav nav-tabs pull-left" data-tabs="tabs">
							  <li class="active">
								<a  href="#"><i class="icon-comments"></i><span>User History</span></a>
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
											<th>
											  S.no
											</th>
											<th>Pay User</th>
											<th>Package Name</th>
											<th>Pay month</th>
											<th>Pay For</th>
											<th>Pay Year</th>
											<th>Action</th>
											</tr></thead>
										  <tbody>
											<?php
												$getuserid = $_GET['id'];
												$sql = "SELECT * FROM payment LEFT JOIN customer ON payment.payuser = customer.cusid LEFT JOIN package ON payment.paypackage = package.packageid WHERE payuser = $getuserid";
												$result = $conn->query($sql);
												$serialnum = '1';
												while($row = $result->fetch_assoc()) {
												$payid = $row['payid'];
											?>
													<tr>
													  <td>
														<?php echo $row['payid'];?>
													  </td>
														<td>
														<?php echo $row['cusname']; ?>
													  </td>
													  <td>
														<?php echo $row['packagename']; ?>
													  </td>
													  <td>
														<?php echo $row['paymonth'];  ?>
													  </td>
													  <td>
														<?php if ($row['payfor'] == '1') { echo 'Monthly'; } else { echo 'Installtalation'; }  ?>
													  </td>
													  <td>
														<?php echo $row['payyear'];  ?>
													  </td>
													<td>
													  <div class="btn-group">
													<ul style="list-style:none;">
														  <li style=" float:left; padding-left:10px;">
														   <a href="paymentform.php?id=<?php echo $row['payid'];?>"><i class="fa fa-edit"></i>Edit</a>
														 </li>
														  <li style=" float:left; padding-left:10px;">
														   <a href="print2.php?id=<?php echo $row['payid'];?>"><i class="fa fa-edit"></i>Print</a>
														 </li>
														  <li style=" float:left; padding-left:10px;">
														<a href="paymentform.php?delete=<?php echo $row['payid'];?>"><i class="fa fa-edit"></i>Delete</a>
														  </li>
														</ul>
														
														</div>
													  </td>
													</tr>
												<?php
														$serialnum++;
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
	echo '<h2>Sorry you are on wrong page</h2>';
 } 
}
 else {
 header('Location: '.$website.'index.php');
 } 
ob_end_flush(); 
include 'footer.php'; ?>