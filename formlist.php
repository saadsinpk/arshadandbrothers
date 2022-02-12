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
						<h3>Form</h3>
											</div>

			<div class="widget-container fluid-height">
				<div class="widget-content padded">
				 <div class="row">
		<div class="col-lg-12">
		   <a href="form.php" class="btn btn-default pull-right"> Add Form</a>


		</div>
		</div>
								<div class="row">
								  <div class="col-lg-12">
									<div class="widget-container fluid-height clearfix">

									  <div class="widget-content padded clearfix">
										<!-- <table class="table table-bordered table-striped" id="dataTable1"> -->
										<table class="table table-bordered table-striped" id="frontform">
										  <thead>
										  <tr row="">
											<th class="check-header hidden-xs">
											  GD NO
											</th>
											<th>
											  Bill No
											</th>
											<th>
											  Client Name
											</th>
											<th>
											  GD Date
											</th>
											<th>
											  Action
											</th>
											<th>
												Client Print
											</th>
											<th>
												Sale Print
											</th>
											</tr></thead>
										  <tfoot>
										  <tr row="">
											<th class="check-header hidden-xs">
											  GD NO
											</th>
											<th>
											  Bill No
											</th>
											<th>
											  Client Name
											</th>
											<th>
											  GD Date
											</th>
											<th>
											  Action
											</th>
											<th>
												Client Print
											</th>
											<th>
												Sale Print
											</th>
											</tr></tfoot>
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