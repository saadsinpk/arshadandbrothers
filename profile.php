<?php
ob_start();
session_start();
include 'header.php';
include 'connect.php';
if (isset($_SESSION['user'])) {
if($_SESSION['group'] == '2' || $_SESSION['group'] == '1') {
?>
		  <div class="row">
		<div class="col-lg-12">
		<div class=" padded" >
						<h3>Customer List</h3>
											</div>

			<div class="widget-container fluid-height">
				<div class="widget-content padded">
				 <div class="row">
		<div class="col-lg-12">
		   <a href="paymentform.php" class="btn btn-default pull-right"> Add Payment</a>
		   <a href="import2.php" class="btn btn-default pull-right"> Import Password</a>


		</div>
		</div>
						  <div class="heading tabs">
							<i class="icon-sitemap"></i>	
							<ul class="nav nav-tabs pull-left" data-tabs="tabs">
							  <li class="active">
								<a  href="#"><i class="icon-comments"></i><span>All</span></a>
							  </li>
							  <li class="cookie_set">
								<a  href="payment-pre.php"><i class="icon-comments"></i><span>Previous Month</span></a>
							  </li>
							  <li class="cookie_set">
								<a  href="payment-cur.php"><i class="icon-comments"></i><span>Current Month</span></a>
							  </li>
							  <li class="cookie_set">
								<a  href="payment-next.php"><i class="icon-comments"></i><span>Next Month</span></a>
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
											<th>Pay Sno</th>
											<th>Pay User</th>
											<th>Package Name</th>
											<th>Pay month</th>
											<th>Pay For</th>
											<th>Pay Year</th>
											<th>Action</th>
											</tr></thead>
										  <tbody>
											<?php
												$sql = "SELECT * FROM payment LEFT JOIN customer ON payment.payuser = customer.cusid LEFT JOIN package ON payment.paypackage = package.packageid";
												$result = $conn->query($sql);
												$serialnum = '1';
												while($row = $result->fetch_assoc()) {
												$payid = $row['payid'];
											?>
													<tr>
													  <td>
														<?php echo $serialnum; ?>
													  </td>
													  <td>
														<?php echo $row['paysno']; ?>
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
 header('Location: '.$website.'index.php');
 } 
ob_end_flush(); 
include 'footer.php'; ?>