<?php
ob_start();
session_start();
include 'connect.php';
if (isset($_SESSION['user'])) {
if (isset($_GET['print'])) {?>
		<?php 
			$getid = $_GET['print'];
			$sql = "SELECT * FROM arshaddata WHERE id = $getid";

			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) { ?>
			<style type="text/css">div { font-size : 15px; }hr {    border-top:1px dotted #000; }</style>

			<div style="position:absolute;left:50%;margin-left: -364px;top:0px;width: 725px;height: 1020px;overflow:hidden;">
			<div style="position:absolute;left:0px;top:0px">
			<img src="assets/print2/background3.jpg" width=725></div>
			<div style="position:absolute;top: 120.55px;" class="cls_002">
				<div class="text1"><span class="cls_002" style="    font-weight: bold;    font-size: 22px; margin-left: 269.4px; text-decoration: underline;">SALES TAX INVOICE</span><br>
					<span style="margin-left: 300.4px;     font-weight: bold;">Service: Custom Agent</span> <br>
					<span style="margin-left: 293.4px;     font-weight: bold;">Service Code - 9805.4000</span></div>
				<div class="text2" style="margin-left: 31px;margin-top: 10px;font-size: 16px;float:  left; width: 415px;    font-weight: bold;"><span class="cls_002" >arshad & Brothers Sales Tax Reg. No. : 12-00-9805-413-91</span></div>
				<div class="text3" style="float:  left;   margin-top:  10px;    font-weight: bold;">arshad & Brothers NTN No. : 1140713-1</div>
				<div class="clear" style="clear:both;"></div>
				<div class="text3" style="float:  left; margin-left:  31px; margin-top:5px;width: 415px;    font-weight: bold;">Sales Tax Invoice  No. ST-<?php echo $row['clisalenum'];?>/<?php echo $row['salestartyear'];?>-<?php echo $row['saleendyear'];?></div>
				<div class="text3" style="float:  left; margin-top:5px;   font-weight: bold;">S.TAX Date : <span class="" style="font-weight: normal;"><?php echo $row['clidatedtext'];?></span></div>
				<div class="clear" style="clear:both;"></div>

				<div class="text3" style="margin-left: 31px; margin-top:5px;float: left; width: 415px;    font-weight: bold;">Party Invoice # <?php echo $row['clipartyinvno'];?></div>
				<div class="text3" style=" margin-top:5px;float: left;    font-weight: bold;">Our Ref <div style="    float:  right;    margin-left:  15px;    border-bottom:  1px solid;    width: 190px;"><?php echo $row['cliourrefno'];?></div></div>
				<div class="clear" style="clear:both;"></div>
				<div class="text3" style="margin-left: 31px; margin-top:5px;float: left; width: 415px; font-weight: bold;">GD # <?php echo $row['cligdno'];?></div>
				<div class="text3" style="margin-top:5px;float: left; font-weight: bold;">GD DATE <?php echo $row['cligddate'];?></div>
				<div class="clear" style="clear:both;"></div>
				<div class="text3" style="font-weight: bold; margin-left: 31px; margin-top: 10px;">Name & Address of the Recepient M/s. <div style="    float: right;    text-align:  left;    width:  415px;    border-bottom:  1px solid;"><?php echo $row['clinametext'];?></div></div>
				<div class="text3" style="margin-left: 31px; margin-top:5px;border-bottom: 1px solid; font-weight: bold;"><?php echo $row['comaddress'];?></div>
				<div class="text3" style="margin-left: 31px; margin-top:5px;float: left; width: 415px; font-weight: bold;">Sales Tax Registration <div style="float:  right;text-align:  left;width: 250px;border-bottom:  1px solid;margin-right: 15px;"><?php echo $row['companysaletax'];?></div></div>
				<div class="text3" style="margin-top:5px;float: left; font-weight: bold;">NTN No. <div style="float:  right;text-align:  left;width: 200px;border-bottom:  1px solid;margin-right: 0;"><?php echo $row['companyntn'];?></div></div>
				<div class="clear" style="clear: both;"></div>
				<div class="text3" style="margin-left: 31px; margin-top: 10px;">Tax Invoice for the Clearance of <div style="    float:  right;    text-align:  left;    width:  400px;">Pkgs <div style="float:  right;    text-align:  left;    width: 345px;    font-weight: bold;    text-decoration: underline;"><?php echo $row['clinoofpackage'];?></div></div></div>
				<div class="text3" style="margin-left: 31px; margin-top: 10px;">Descriptions : <div style="    float:  right;    text-align:  left;    width: 585px;    font-weight:  bold;    border-bottom: 1px solid;"><?php echo $row['clidescription'];?></div></div>
				<div class="text3" style="margin-left: 31px; margin-top:5px;float: left; width: 275px;">Per S S. <div style="    float: right;    text-align:  left;    width:  200px;    font-weight:  bold;    border-bottom:  1px solid; margin-right: 20px"><?php echo $row['clivessel'];?></div></div>
				<div class="text3" style=" margin-top:5px;float: left; width: 175px;">E.G.M No. <div style="    float:  right;    text-align:  left;    width: 90px;    border-bottom:  1px solid;    margin-right:  10px; font-weight: bold;"><?php echo $row['cliegmnumber'];?></div></div>
				<div class="text3" style="margin-top:5px;float: left;">Date:</div>
				<div class="clear" style="clear: both;"></div>
				<div class="text3" style="margin-left: 31px; margin-top:5px;float: left; width: 225px">Index No</div>
				<div class="text3" style="margin-top:5px;float: left; width: 225px">Customs B/E No.</div>
				<div class="text3" style="margin-top:5px;float: left; width: 225px">Date : <div style="    width: 155px;    float:  right;    text-align:  left;    font-weight:  bold;    border-bottom: 1px solid;"><?php echo $row['saldate'];?></div></div>
				<div class="clear" style="clear: both;"></div>
				<div class="text3" style="margin-left: 31px; margin-top:5px;float: left; width: 225px">EDTRE # :</div>
				<div class="text3" style="margin-top:5px;float: left; width: 225px">EDTRE Date :</div>
				<div class="text3" style="margin-top:5px;float: left; width: 225px">Imp Value <div style="    width: 155px;    float:  right;    text-align:  left;    font-weight:  bold;    border-bottom: 1px solid;">0.00</div></div>
				<div class="clear" style="clear: both;"></div>
				<hr style="margin-left:30px;">
				<div class="text3" style="margin-left: 31px; margin-top:5px;float: left; width: 450px;">Service Charges</div>
				<div class="text3" style="margin-top:5px;float: left; width: 225px;">Rs. <div style="float: right;"><?php echo $row['salservicechargesrs'];?></div></div>
				<div class="clear" style="clear: both;"></div>
				<div class="text3" style="margin-left: 31px; margin-top:5px;float: left; width: 450px;">Other Unreceipted Expenses<br>Made On Behalf of the Recepient (If any)</div>
				<div class="text3" style="margin-top:5px;float: left;"><div style="    width:  225px;    border-bottom: 1px solid;    padding-bottom: 5px;">Rs. <div style="float: right;"><?php echo $row['salunreceiptedexprs'];?></div></div></div>
				<div class="clear" style="clear: both;"></div>
				<div class="text3" style="margin-left: 31px; margin-top:5px;float: left; width: 450px;">Total Value of Supply Exclusive of Tax</div>
				<div class="text3" style="margin-top:5px;float: left;    width:  225px;">Rs. <div style="float: right;"><?php echo $row['saltotalvalueexltaxrs'];?></div></div>
				<div class="clear" style="clear: both;"></div>
				<div class="text3" style="margin-left: 31px; margin-top:5px;float: left; width: 450px;">Rate of Sales Tax <?php 
					$sql4 = "SELECT * FROM weboption WHERE optionkey = 'percentage'";
					$result4 = $conn->query($sql4);
					while($row4 = $result4->fetch_assoc()) { 
						echo $row4['optionvalue'];
						$taxperc = $row4['optionvalue'];
					} ?>%<br>Amount of Sales Tax</div>
				<div class="text3" style="margin-top:5px;float: left;    width:  225px;">Rs. <div style="float: right;"><?php echo $row['salsalestaxrs'];?></div></div>
				<div class="clear" style="clear: both;"></div>
				<div class="text3" style="margin-left: 31px; margin-top:5px;float: left; width: 450px;">Less Income Tax</div>
				<div class="text3" style="margin-top:5px;float: left;"><div style="    width:  225px;    border-bottom: 1px solid;    margin-bottom: 5px;" >Rs <div style="float: right;"><?php echo $row['saladditionaltaxrs'];?></div></div></div>
				<div class="clear" style="clear: both;"></div>
				<div class="text3" style="margin-left: 31px; margin-top:5px;float: left; width: 450px;">Total Value of Supply Inclusive of Tax</div>
				<div class="text3" style="margin-top:5px;float: left;"><div style="    border-bottom:  1px solid;    padding-bottom: 5px;"><div style="    width:  225px;    border-bottom: 1px solid;    padding-bottom: 5px;" >Rs <div style="float: right;"><?php echo $row['salgrandtotalrs'];?></div></div></div></div>
				<div class="clear" style="clear: both;"></div>
				<div class="text3" style="margin-left: 31px; margin-top: 10px;"><b>Rupees : (<?php echo $row['saltotalamountword'];?>)</b></div>
				<hr style="margin-left:30px;">
				<div class="clear" style="clear: both;"></div>
				<div class="text3" style="margin-left: 31px; margin-top:5px;float: left;"><b>E. & O. E.</b></div>
				<div class="text3" style="margin-left: 31px; margin-top:5px;float: right;"><b>For & On Behalf Of: <br>arshad & BROTHERS</b></div>
				<div class="clear" style="clear: both;"></div>

			</div>
			</div>
			<?php
			 // echo $row['cligddate'];
			?>			
		<?php } ?>

<?php } else {
	include 'header.php';
if($_SESSION['group'] == '2' || $_SESSION['group'] == '1') {
if (isset($_POST['updateform'])) {

	$getid = $_POST['getid'];
	$clibillno1 = $_POST['billno'];
	$cliourrefno = $_POST['ourreferenceno'];
	$cligddate = $_POST['dated'];  // SIMILAR  cligddate
	$cligdno = $_POST['gdno']; // SIMILAR   cligdno
	$cliyourrefno = $_POST['yourreferenceno'];
	$climscode = $_POST['companyid'];
	$clinametext = $_POST['companyname'];
	$comaddress = $_POST['companyaddress'];
	$companysaletax = $_POST['companysalestax'];
	$companyntn = $_POST['companyntnno'];
	$saladdress = $_POST['address'];
	$salsalesreg = $_POST['salesreg'];
	$clidescription = $_POST['description'];
	$salindexno = $_POST['indexno'];
	$cliegmnumber = $_POST['igmno'];
	$salfrom = $_POST['from'];
	$salbecashno = $_POST['becashno'];
	$saldate = $_POST['datedcashno'];  // SIMILAR saldate
	$salperselect = $_POST['perselect'];
	$salpertext1 = $_POST['pertext1'];
	$salperrate2 = $_POST['perrate2'];
	$clinoofpackage = $_POST['noofpack1'];
	$salnoofpack2 = $_POST['noofpack2'];
	$clivessel = $_POST['noofpack3'];
	$salservicechargesrs = $_POST['servicechargesrs'];
	$salunreceiptedexprs = $_POST['unreceiptedexprs'];
	$saltotalvalueexltaxrs = $_POST['totalvalueexltaxrs'];
	$salsalestaxrs = $_POST['salestaxrs'];
	$saladditionaltaxrs = $_POST['additionaltaxrs'];
	$salgrandtotalrs = $_POST['grandtotalrs'];
	$saltotalamountword = $_POST['totalamountword'];
	$taxyesnot = $_POST['taxyesnot'];
	if ($taxyesnot == '1') {
		$taxyesnot = '1';
	} else {
		$taxyesnot = '2';
	}


	$sql6 = "UPDATE `arshaddata` SET  `comaddress` =  '$comaddress', `companysaletax` =  '$companysaletax', `companyntn` =  '$companyntn', `clibillno1` =  '$clibillno1', `cliourrefno` =  '$cliourrefno',  `cligddate` =  '$cligddate',  `cligdno` =  '$cligdno',  `cliyourrefno` =  '$cliyourrefno',  `climscode` =  '$climscode',  `clinametext` =  '$clinametext',  `saladdress` =  '$saladdress',  `salsalesreg` =  '$salsalesreg',  `clidescription` =  '$clidescription',  `salindexno` =  '$salindexno',  `cliegmnumber` =  '$cliegmnumber',  `salfrom` =  '$salfrom',  `salbecashno` =  '$salbecashno',  `saldate` =  '$saldate',  `salperselect` =  '$salperselect',  `salpertext1` =  '$salpertext1',  `salperrate2` =  '$salperrate2',  `clinoofpackage` =  '$clinoofpackage',  `salnoofpack2` =  '$salnoofpack2',  `clivessel` =  '$clivessel',  `salservicechargesrs` =  '$salservicechargesrs',  `salunreceiptedexprs` =  '$salunreceiptedexprs',  `saltotalvalueexltaxrs` =  '$saltotalvalueexltaxrs',  `salsalestaxrs` =  '$salsalestaxrs',  `saladditionaltaxrs` =  '$saladditionaltaxrs',  `salgrandtotalrs` =  '$salgrandtotalrs',  `saltotalamountword` =  '$saltotalamountword',  `addexptax` =  '$taxyesnot' WHERE id = $getid";
	$result6 = $conn->query($sql6);
	if ($result6) {

	}	

	header('Location: '.$website.'saleform.php?id='.$getid);
}
?>
<style type="text/css">[class*="col-sm"], [class*="col-md"], [class*="col-lg"], [class*="col-xs"] {
    margin-bottom: 0 !important;}</style>
<div class="row">
   <div class="col-lg-12">
	  <div class=" padded" >
			<h3>Sales Tax Invoice(IND GD)</h3>
			<?php 
				if( isset($_GET['id'])!="") { ?>
			<div class="pull-right"><a href="form.php?id=<?php echo $_GET['id'];?>">Client Invoice</a></div>
			<?php } ?>
		</div>
		<div class="widget-container fluid-height">
			<div class="widget-content padded">
			<?php
				if( isset($_GET['delete'])!="") { 
					$delete = $_GET['delete'];
					$sql = "DELETE FROM arshaddata WHERE id = $delete" ;
					$result = $conn->query($sql);
					if (isset($result)) {
						echo '<h1>Delete Successfully</h1>';
						header('Location: '.$website.'formlist.php');
					} else {
						echo 'Sorry could not delete because id is not correct';
					}

				}
				if( isset($_GET['id'])!="") { 
					$getid = $_GET['id'];

					$sql = "SELECT * FROM arshaddata WHERE id = $getid";

					$result = $conn->query($sql);
					if ($result->num_rows != '1') {
						header('Location: '.$website.'formlist.php');
					}
					while($row = $result->fetch_assoc()) { ?>
							<form action="" name="updateform" class="form-horizontal" method="post">
								<style type="text/css">input { width: 100%; }</style>
								<div class="row">
									<input type="hidden" name="getid" value="<?php echo $_GET['id'];?>">
									<label>SNO# <b>ST-<?php echo $row['clisalenum'];?>/<?php echo $row['salestartyear'];?>-<?php echo $row['saleendyear'];?></b></label>
								</div>
								<div class="row">
									<!-- Row 1 -->
									<div class="col-lg-4 col-xs-4">
										<label>Billno#</label><input type="text" name="billno" value="<?php echo $row['clibillno1'];?>">
									</div>
									<div class="col-lg-4 col-xs-4">
										<label>our reference no#</label><input type="text" name="ourreferenceno" value="<?php echo $row['cliourrefno'];?>">
									</div>
									<div class="col-lg-4 col-xs-4">
										<label>dated</label><input type="text" name="dated" id="datepicker" value="<?php echo $row['cligddate'];?>">
									</div>
								</div>
								<div class="row">
									<!-- Row 1 -->
									<div class="col-lg-4 col-xs-4">
										<label>GD NO#</label><input type="text" name="gdno" value="<?php echo $row['cligdno'];?>">
									</div>
									<div class="col-lg-4 col-xs-4">
										<label>Your Reference No#</label><input type="text" name="yourreferenceno" value="<?php echo $row['cliyourrefno'];?>">
									</div>
									<div class="col-lg-4 col-xs-4">
									</div>
								</div>
								<div class="row">
									<!-- Row 1 -->
									<div class="col-lg-3 col-xs-3">
										<label>Company ID</label>
										<select name="companyid" id="company">
										<option>Select Company</option>
										<?php 
										$sql4 = "SELECT * FROM companydata";
										$result4 = $conn->query($sql4);
										while($row4 = $result4->fetch_assoc()) { ?>
											<option value="<?php echo $row4['compautoid'];?>" <?php if ($row['climscode'] == $row4['compautoid']) { echo "selected='selected'"; } ?> data-name="<?php echo $row4['compname'];?>" data-salestax="<?php echo $row4['compstax'];?>" data-address="<?php echo $row4['compaddress'];?>"  data-ntnno="<?php echo $row4['compntn'];?>"><?php echo $row4['compid'];?></option>
										<?php 
										} ?></select>
										<input type="hidden" name="companysalestax" value="<?php echo $row['companysaletax'];?>">
										<input type="hidden" name="companyaddress" value="<?php echo $row['comaddress'];?>">
										<input type="hidden" name="companyntnno" value="<?php echo $row['companyntn'];?>">
									</div>
									<div class="col-lg-9 col-xs-9">
										<label>Name</label><input type="text" name="companyname" value="<?php echo $row['clinametext'];?>">
									</div>
								</div>
								<div class="row">
									<!-- Row 1 -->
									<div class="col-lg-12 col-xs-12">
										<!-- <input type="text" name="address" value="<?php echo $row['saladdress'];?>"> -->

										<label>Address</label><input type="text" name="othercompanyaddress" value="<?php echo $row['othercomaddress'];?>">
									</div>
								</div>
								<div class="row">
									<!-- Row 1 -->
									<div class="col-lg-12 col-xs-12">
										<label>Sales Tax Registration of the Reciepient</label><input type="text" name="companysalestax" value="<?php echo $row['companysaletax'];?>">
										<!-- <input type="text" name="salesreg" value="<?php echo $row['salsalesreg'];?>"> -->
									</div>
								</div>
								<div class="row">
									<!-- Row 1 -->
									<div class="col-lg-12 col-xs-12">
										<div class="col-lg-8 col-xs-8">
											<label>Description</label><input type="text" name="description" value="<?php echo $row['clidescription'];?>">
										</div>
										<div class="col-lg-4 col-xs-4">
												<label>No of Package</label>
												<input type="text" name="noofpack1" value="<?php echo $row['clinoofpackage'];?>">
										</div>
										<div class="col-lg-4 col-xs-4">
											<label>Index NO#</label><input type="text" name="indexno" value="<?php echo $row['salindexno'];?>">
										</div>
										<div class="col-lg-4 col-xs-4">
											<label>IGM/EGM No.</label><input type="text" name="igmno" value="<?php echo $row['cliegmnumber'];?>"> 
										</div>
										<div class="col-lg-4 col-xs-4">
											<label>Dated</label>
												<input type="text" name="noofpack2" value="<?php echo $row['salnoofpack2'];?>" id="datepicker2">
										</div>
										<div class="col-lg-8 col-xs-8">
											<label>From</label><input type="text" name="from" value="<?php echo $row['salfrom'];?>">
										</div>
										<div class="col-lg-4 col-xs-4">
											<label>Per Aircraft/Vessel</label>
											<input type="text" name="noofpack3" value="<?php echo $row['clivessel'];?>">
										</div>
										<div class="col-lg-4 col-xs-4">
											<label>B/E Cash NO#</label><input type="text" name="becashno" value="<?php echo $row['salbecashno'];?>">
										</div>
										<div class="col-lg-4 col-xs-4">
											<label>Dated</label><input type="text" name="datedcashno" id="datepicker2" value="<?php echo $row['saldate'];?>">
										</div>
										<div class="col-lg-4 col-xs-4">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-3 col-xs-3">
										<label style="float: left;">Per</label>
										<select name="perselect">
											<?php 
											$sql4 = "SELECT * FROM weboption WHERE optionkey = 'peroption'";
											$result4 = $conn->query($sql4);
											while($row4 = $result4->fetch_assoc()) { 
											$ArrayofValue = explode(',', $row4['optionvalue']);
												foreach ($ArrayofValue as $value) {
													$inputvalue = str_replace(' ', '_', $value);?>
													<option value="<?php echo $value;?>" <?php if ($row['salperselect'] == $value) { echo "selected='selected'"; } ?>><?php echo $value;?></option>
												<?php }
											} ?></select>
									</div>
									<div class="col-lg-3 col-xs-3">
										<input type="text" name="pertext1" value="<?php echo $row['salpertext1'];?>">
									</div>
									<div class="col-lg-3 col-xs-3">
										<input type="text" name="perrate2" value="<?php echo $row['salperrate2'];?>">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-xs-6">
										Service Charges
									</div>
									<div class="col-lg-6 col-xs-6">
										<input type="text" name="servicechargesrs" value="<?php echo $row['salservicechargesrs'];?>" class="sum1" >
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-xs-6">
										<input type="hidden" name="taxyesnot" value="1" style="width: 20px;">
										Un-Receipted Expenses <?php 
												$sql4 = "SELECT * FROM weboption WHERE optionkey = 'percentage'";
												$result4 = $conn->query($sql4);
												while($row4 = $result4->fetch_assoc()) { 
													echo $row4['optionvalue'];
												} ?>%
									</div>
									<div class="col-lg-6 col-xs-6">
										<input type="text" name="unreceiptedexprs" value="<?php echo $row['salunreceiptedexprs'];?>" class="sum2">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-xs-6">
										Total value of supply exclusive of Tax RS.
									</div>
									<div class="col-lg-6 col-xs-6">
										<input type="text" name="totalvalueexltaxrs" value="<?php echo $row['saltotalvalueexltaxrs'];?>" class="sum3" readonly>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-xs-6">
										Sales tax @<?php 
												$sql4 = "SELECT * FROM weboption WHERE optionkey = 'percentage'";
												$result4 = $conn->query($sql4);
												while($row4 = $result4->fetch_assoc()) { 
													echo $row4['optionvalue'];
												} ?>% RS.
									</div>
									<div class="col-lg-6 col-xs-6">
										<input type="text" name="salestaxrs" value="<?php echo $row['salsalestaxrs'];?>" class="sum4" readonly>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-xs-6">
										Amount of additional Sales tax(if any) RS.
									</div>
									<div class="col-lg-6 col-xs-6">
										<input type="text" name="additionaltaxrs" value="<?php echo $row['saladditionaltaxrs'];?>" class="sum5">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-xs-6">
										Grand Total RS.
									</div>
									<div class="col-lg-6 col-xs-6">
										<input type="text" name="grandtotalrs" onkeyup="$('#word').val(convertNumberToWords(this.value));" value="<?php echo $row['salgrandtotalrs'];?>"  class="sum6">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6 col-xs-6">
										Total Amnount in words RS.
									</div>
									<div class="col-lg-6 col-xs-6">
										<input type="text" name="totalamountword" id="word" value="<?php echo $row['saltotalamountword'];?>">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<button class="btn btn-primary pull-right" type="submit" name="updateform">Save</button>
										<a href="saleform.php?print=<?php echo $_GET['id'];?>" class="btn btn-primary pull-right" target="_blank">Print</a>
									</div>
								</div>
							<?php
								}
							}
							else {
							?>
							<h2>Please select Customer form</h2>
				<?php } ?>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
}
include 'footer.php';
}
 }
 else {
 header('Location: '.$website.'');
 } 
ob_end_flush();  ?>