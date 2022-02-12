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
			<style type="text/css">span { font-size : 15px; }hr {    border-top:4px solid #000; }</style>
			<div style="position:absolute;left:50%;margin-left: -364px;top:0px;width: 725px;height: 1020px;border-style:none;">
			<div style="position:absolute;left:0px;top:0px">
			<img src="assets/print1/background3.jpg" width=725></div>
			<div style="position:absolute;left:31px;top:105.55px" class="cls_002">
				<div class="text1" style="float: left; width: 415px; font-weight: bold;"><span class="cls_002">arshad & Brothers Sales Tax Reg. No. : 12-00-9805-413-91</span></div>
				<div class="text2" style="float: left; font-weight: bold;"><span class="cls_002">arshad & Brothers NTN No : 1140713-1</span></div>
				<div class="clear" style="clear:both;"></div>
				<div class="text2" style="margin-top:5px;float: left; width: 415px; font-weight: bold;"><span class="cls_002">GD # : <?php echo $row['cligdno'];?></span></div>
				<div class="text2" style="margin-top:5px;float: left;"><span class="cls_002">GD Date <b><?php echo $row['cligddate'];?></b></span></div>
				<div class="clear" style="clear:both;"></div>
				<div class="text2" style="margin-top:5px; width: 415px; float: left; font-weight: bold;"><span class="cls_002">Bill # : <?php echo $row['clibillno1'];?></span></div>
				<div class="text2" style="margin-top:5px; float: left;"><span class="cls_002">Date <b><?php echo $row['clidatedtext'];?></b></span></div>
				<div class="clear" style="clear:both;"></div>
				<div class="text2" style="margin-top:5px;"><span class="cls_002">Messrs. <?php echo $row['clinametext'];?></span></div>
				<div class="text2" style="margin-top:5px;"><span class="cls_002"><?php echo $row['comaddress'];?></span></div>
				<div class="text2" style="margin-top:5px;"><span class="cls_002">No. of packages <?php echo $row['clinoofpackage'];?></span></div>
				<div class="clear" style="clear:both;"></div>
				<div class="text2" style="margin-top:5px;float: left;width: 275px;"><span class="cls_002">S.S <?php echo $row['clivessel'];?></span></div>
				<div class="text2" style="margin-top:5px;float: left;width: 275px;"><span class="cls_002">EGM NO. <?php echo $row['cliegmnumber'];?></span></div>
				<div class="text2" style="margin-top:5px;float: left;"><span class="cls_002">Date</span></div>
				<div class="clear" style="clear:both;"></div>
				<div class="text2" style="margin-top:5px;float: left;width: 275px;"><span class="cls_002">Index No:</span></div>
				<div class="text2" style="margin-top:5px;float: left;width: 275px;"><span class="cls_002">L/C No. :</span></div>
				<div class="clear" style="clear:both;"></div>
				<div class="text2" style="margin-top:5px;"><span class="cls_002">B/E Cash No.</span></div>
				<div class="clear" style="clear:both;"></div>
				<div class="text2" style="margin-top:5px;float: left;width: 275px;"><span class="cls_002">B/L No.</span></div>
				<div class="text2" style="margin-top:5px;float: left;width: 275px;"><span class="cls_002">Date</span></div>
				<div class="clear" style="clear:both;"></div>
				<div class="text2" style="margin-top:5px;float: left;width: 275px;"><span class="cls_002">Invoice No. <?php echo $row['clipartyinvno'];?></span></div>
				<div class="text2" style="margin-top:5px;float: left;width: 275px;"><span class="cls_002">SAPT DLVD :</span></div>
				<div class="clear" style="clear:both;"></div>
				<div class="text2" style="margin-top:5px;"><span class="cls_002">Desc. <?php echo $row['clidescription'];?></span></div>
				<div class="clear" style="clear:both;"></div>
				<div class="text2" style="margin-top:5px;float: left;width: 275px;"><span class="cls_002">Container</span></div>
				<div class="text2" style="margin-top:5px;float: left;width: 275px;"><span class="cls_002">Remarks <?php echo $row['cliremarks'];?></span></div>
				<div class="clear" style="clear:both;"></div>
				<hr>
				<div class="text2" style="margin-top:5px;float: left; width: 235px;  font-weight: bold;"><span class="cls_002">Description Of Expenses</span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 115px;  font-weight: bold;"><span class="cls_002">Receipt No.</span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 115px;  font-weight: bold;"><span class="cls_002">Date</span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 115px;  text-align: right;  font-weight: bold;"><span class="cls_002">By A&B</span></div>
				<div class="clear" style="clear:both;"></div>
				<?php 
				$sql2 = "SELECT * FROM headexist WHERE existparent = $getid AND headsbytype = 'existingheadstop'";

				$result2 = $conn->query($sql2);
				while($row2 = $result2->fetch_assoc()) { ?>
				<div class="text2" style="margin-top:5px;float: left; width: 235px;"><span class="cls_002"><?php echo $row2['existdes'];?></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 115px;"><span class="cls_002"><?php echo $row2['existpo'];?></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 115px;"><span class="cls_002"><?php echo $row2['existdate'];?></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 115px; text-align: right;"><span class="cls_002"><?php echo $row2['existab'];?></span></div>
				<div class="clear" style="clear:both;"></div>
				<?php } ?>
				<div class="text2" style="margin-top:5px;float: left; width: 235px;"><span class="cls_002"></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 115px;"><span class="cls_002"></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 115px;"><span class="cls_002"></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 115px;"><span class="cls_002"></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 105px; text-align: right;  font-weight: bold;"><span class="cls_002"><?php 
				$sql2 = "SELECT SUM(existab) as sumoftophead FROM headexist WHERE existparent = $getid AND headsbytype = 'existingheadstop'";

				$result2 = $conn->query($sql2);
				while($row2 = $result2->fetch_assoc()) { 
					echo $row2['sumoftophead'];
				}?></span></div>
				<div class="clear" style="clear:both;"></div>
				<?php 
				$sql2 = "SELECT * FROM headexist WHERE existparent = $getid AND headsbytype = 'existingheadsbottom'";

				$result2 = $conn->query($sql2);
				while($row2 = $result2->fetch_assoc()) { ?>
				<div class="text2" style="margin-top:5px;float: left; width: 235px;"><span class="cls_002"><?php echo $row2['existdes'];?></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 115px;"><span class="cls_002"><?php echo $row2['existpo'];?></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 115px;"><span class="cls_002"><?php echo $row2['existdate'];?></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 115px; text-align: right;"><span class="cls_002"><?php echo $row2['existab'];?></span></div>
				<div class="clear" style="clear:both;"></div>
				<?php } ?>
				<div class="text2" style="margin-top:5px;float: left; width: 235px;"><span class="cls_002"></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 115px;"><span class="cls_002"></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 115px;"><span class="cls_002"></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 115px;"><span class="cls_002"></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 105px; text-align: right;  font-weight: bold;"><span class="cls_002"><?php 
				$sql2 = "SELECT SUM(existab) as sumofbottomhead FROM headexist WHERE existparent = $getid AND headsbytype = 'existingheadsbottom'";

				$result2 = $conn->query($sql2);
				while($row2 = $result2->fetch_assoc()) { 
					echo $row2['sumofbottomhead'];
				}?></span></div>
				<div class="clear" style="clear:both;"></div>
				<hr>
				<div class="text2" style="margin-top:5px;float: left; width: 350px;"><span class="cls_002"></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 230px;"><span class="cls_002">Total Exp.</span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 100px; width: 105px;text-align:  right;"><span class="cls_002">
				<?php 
				$sql2 = "SELECT SUM(existab) as sumofab FROM headexist WHERE existparent = $getid";

				$result2 = $conn->query($sql2);
				while($row2 = $result2->fetch_assoc()) { 
					echo $row2['sumofab'];
					$totalamt = $row2['sumofab'];
				}?></span></div>
				<div class="clear" style="clear:both;"></div>
				<div class="text2" style="margin-top:5px;float: left; width: 350px;"><span class="cls_002">Other --> 1</span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 230px;"><span class="cls_002">Agency Commission @ <?php echo $row['salservicechargesrs'];?></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 100px; width: 105px;text-align:  right;"><span class="cls_002"><?php echo $row['salservicechargesrs'];?><?php
				$amountwithouttax = $row['salservicechargesrs']; ?></span></div>
				<div class="clear" style="clear:both;"></div>
				<div class="text2" style="margin-top:5px;float: left; width: 350px;"><span class="cls_002"></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 230px;"><span class="cls_002">Sales Tax @<?php 
					$sql4 = "SELECT * FROM weboption WHERE optionkey = 'percentage'";
					$result4 = $conn->query($sql4);
					while($row4 = $result4->fetch_assoc()) { 
						echo $row4['optionvalue'];
						$taxperc = $row4['optionvalue'];
					} ?>%</span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 100px; width: 105px;text-align:  right;"><span class="cls_002"><?php 
					$amtwithtax = $amountwithouttax * $taxperc /  100;
					echo $amtwithtax; ?></span></div>
				<div class="clear" style="clear:both;"></div>
				<div class="text2" style="margin-top:5px;float: left; width: 350px;"><span class="cls_002"></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 230px;"><span class="cls_002">Advance Payment</span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 100px;"><span class="cls_002"></span></div>
				<hr style="width: 330px; margin-left: 350px; margin-top: 40px;">
				<div class="clear" style="clear:both;"></div>
				<div class="text2" style="margin-top:5px;float: left; width: 350px;"><span class="cls_002"></span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 230px;"><span class="cls_002">Amount Due to us</span></div>
				<div class="text2" style="margin-top:5px;float: left; width: 105px; text-align: right;"><span class="cls_002"><?php 
				$totalforwords = $amtwithtax + $amountwithouttax + $totalamt;
				echo $totalforwords;
				?></span></div>
				<div class="clear" style="clear:both;"></div>

			    <script src="assets/frontend/js/jquery-1.10.2.min.js" type="text/javascript">  </script>
			    <script src="assets/frontend/js/num2word.js" type="text/javascript">  </script>
				<script type="text/javascript">
				var numtoword = convertNumberToWords('<?php echo $totalforwords; ?>');
				$( document ).ready(function() {
					$( "div.numtoword" ).replaceWith( numtoword );
				});
				</script>
				<div class="text2" style="margin-top:5px;"><span class="cls_002"><b>Rupees</b> : (<div class="numtoword"></div>)</span></div>
				<div class="text2" style="margin-top:5px;"><span class="cls_002">For <b>arshad & Brothers</b></span></div>
				<br><br><br>
				<div class="text2"><span class="cls_002">The Above Expenses paid on A/C of Consignee<br>Subject to Karachi Jurisdiction<br>ENCLOSURES</span></div>
				<div class="clear" style="clear:both;"></div>

			</div>
			</div>
			<?php
			 // echo $row['clidatedtext'];
			?>			
		<?php } ?>

<?php } else {
	include 'header.php';
	if($_SESSION['group'] == '2' || $_SESSION['group'] == '1') {
	if (isset($_POST['formadd'])) {

		$cligdno = mysqli_real_escape_string($conn, $_POST['gdno']);
		$clibillno1 = mysqli_real_escape_string($conn, $_POST['billno1']);
		$cligddate = mysqli_real_escape_string($conn, $_POST['gddate']);
		$cliourrefno = mysqli_real_escape_string($conn, $_POST['ourrefno']);
		$cliyourrefno = mysqli_real_escape_string($conn, $_POST['yourrefno']);
		$clidatedtext = mysqli_real_escape_string($conn, $_POST['datedtext']);
		$climscode = mysqli_real_escape_string($conn, $_POST['mscode']);
		$clinametext = mysqli_real_escape_string($conn, $_POST['companyname']);
		$clinewref = mysqli_real_escape_string($conn, $_POST['newref']);
		$clinoofpackage = mysqli_real_escape_string($conn, $_POST['noofpackage']);
		$cliindexno = mysqli_real_escape_string($conn, $_POST['indexno']);
		$clidescription = mysqli_real_escape_string($conn, $_POST['description']);
		$clivessel = mysqli_real_escape_string($conn, $_POST['vessel']);
		$cliegmnumber = mysqli_real_escape_string($conn, $_POST['egmnumber']);
		$clidatedsec = mysqli_real_escape_string($conn, $_POST['datedsec']);
		$clipartyinvno = mysqli_real_escape_string($conn, $_POST['partyinvno']);
		$cliedtreno = mysqli_real_escape_string($conn, $_POST['edtreno']);
		$cliedtredate = mysqli_real_escape_string($conn, $_POST['edtredate']);
		$clivoucherno = mysqli_real_escape_string($conn, $_POST['voucherno']);
		$salservicechargesrs = mysqli_real_escape_string($conn, $_POST['servicecharges']);
		$clisalestaxamt = mysqli_real_escape_string($conn, $_POST['salestaxamt']);
		$cliremarks = mysqli_real_escape_string($conn, $_POST['remarks']);
		$companysalestax = mysqli_real_escape_string($conn, $_POST['companysalestax']);
		$companyaddress = mysqli_real_escape_string($conn, $_POST['companyaddress']);
		$companyntnno = mysqli_real_escape_string($conn, $_POST['companyntnno']);
		$clisalenum = mysqli_real_escape_string($conn, $_POST['clisalenum']);
		$searchmonth = date("m", strtotime($cligddate));
		$searchyear = date("Y", strtotime($cligddate));


		$headsdescription = $_POST['headsdescription'];
		$headspo = $_POST['headspo'];
		$headsdate = $_POST['headsdate'];
		$headsbyparty = $_POST['headsbyparty'];
		$headsbyab = $_POST['headsbyab'];
		$headsbytype = $_POST['headsbytype'];
		
		$sql = "SELECT * FROM weboption WHERE optionkey = 'startyear'";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) { 
			$startyear = $row['optionvalue'];
		}
		$sql = "SELECT * FROM weboption WHERE optionkey = 'endyear'";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) { 
			$endyear = $row['optionvalue'];
		}


		$now = new \DateTime($clidatedtext);
		$searchmonth = $now->format('m');
		$searchyear = $now->format('Y');
		$sql = "SELECT * FROM arshaddata WHERE clibillno1='".$clibillno1."'";
		$result = $conn->query($sql);
		if ($result->num_rows >= 1) {
			echo "<h2>Bill Number already there </h2>";
		} else {
			$sql6 = "INSERT INTO `arshaddata` (`clisalenum`, `cligdno`, `clibillno1`,  `cligddate`, `cliourrefno`, `cliyourrefno`, `clidatedtext`, `climscode`, `clinametext`, `clinewref`, `clinoofpackage`, `cliindexno`, `clidescription`, `clivessel`, `cliegmnumber`, `clidatedsec`, `clipartyinvno`, `cliedtreno`, `cliedtredate`, `clivoucherno`, `salservicechargesrs`, `clisalestaxamt`, `cliremarks`, `searchmonth`, `searchyear`, `companysaletax`, `comaddress`, `companyntn`, `salestartyear`, `saleendyear`) 
			VALUES 
			('$clisalenum', '$cligdno', '$clibillno1', '$cligddate', '$cliourrefno', '$cliyourrefno', '$clidatedtext', '$climscode', '$clinametext', '$clinewref', '$clinoofpackage', '$cliindexno', '$clidescription', '$clivessel', '$cliegmnumber', '$clidatedsec', '$clipartyinvno', '$cliedtreno', '$cliedtredate', '$clivoucherno', '$salservicechargesrs', '$clisalestaxamt', '$cliremarks', '$searchmonth', '$searchyear', '$companysalestax', '$companyaddress', '$companyntnno', '$startyear', '$endyear')";
			$result6 = $conn->query($sql6);
			$last_id = mysqli_insert_id($conn);
			foreach ($headsdescription as $key => $value) {
				$sql6 = "INSERT INTO `headexist` (`existdes`, `existpo`, `existdate`, `existparty`, `existab`, `existparent`, `headsbytype`) 
				VALUES 
				('".mysqli_real_escape_string($conn, $headsdescription[$key])."', '".mysqli_real_escape_string($conn, $headspo[$key])."', '".mysqli_real_escape_string($conn, $headsdate[$key])."', '".mysqli_real_escape_string($conn, $headsbyparty[$key])."', '".mysqli_real_escape_string($conn, $headsbyab[$key])."', '$last_id', '".mysqli_real_escape_string($conn, $headsbytype[$key])."')";
				$result6 = $conn->query($sql6);
			}

			header('Location: '.$website.'form.php?id='.$last_id);
		}

	}
	if (isset($_POST['updateform'])) {

		$cligetid = $_POST['getid'];
		$cligdno = mysqli_real_escape_string($conn, $_POST['gdno']);
		$clibillno1 = mysqli_real_escape_string($conn, $_POST['billno1']);
		$cligddate = mysqli_real_escape_string($conn, $_POST['gddate']);
		$cliourrefno = mysqli_real_escape_string($conn, $_POST['ourrefno']);
		$cliyourrefno = mysqli_real_escape_string($conn, $_POST['yourrefno']);
		$clidatedtext = mysqli_real_escape_string($conn, $_POST['datedtext']);
		$climscode = mysqli_real_escape_string($conn, $_POST['mscode']);
		$clinametext = mysqli_real_escape_string($conn, $_POST['companyname']);
		$clinewref = mysqli_real_escape_string($conn, $_POST['newref']);
		$clinoofpackage = mysqli_real_escape_string($conn, $_POST['noofpackage']);
		$cliindexno = mysqli_real_escape_string($conn, $_POST['indexno']);
		$clidescription = mysqli_real_escape_string($conn, $_POST['description']);
		$clivessel = mysqli_real_escape_string($conn, $_POST['vessel']);
		$cliegmnumber = mysqli_real_escape_string($conn, $_POST['egmnumber']);
		$clidatedsec = mysqli_real_escape_string($conn, $_POST['datedsec']);
		$clipartyinvno = mysqli_real_escape_string($conn, $_POST['partyinvno']);
		$cliedtreno = mysqli_real_escape_string($conn, $_POST['edtreno']);
		$cliedtredate = mysqli_real_escape_string($conn, $_POST['edtredate']);
		$clivoucherno = mysqli_real_escape_string($conn, $_POST['voucherno']);
		$salservicechargesrs = mysqli_real_escape_string($conn, $_POST['servicecharges']);
		$clisalestaxamt = mysqli_real_escape_string($conn, $_POST['salestaxamt']);
		$cliremarks = mysqli_real_escape_string($conn, $_POST['remarks']);
		$companysalestax = mysqli_real_escape_string($conn, $_POST['companysalestax']);
		$companyaddress = mysqli_real_escape_string($conn, $_POST['companyaddress']);
		$companyntnno = mysqli_real_escape_string($conn, $_POST['companyntnno']);
		$clisalenum = mysqli_real_escape_string($conn, $_POST['clisalenum']);

		$now = new \DateTime($clidatedtext);
		$searchmonth = $now->format('m');
		$searchyear = $now->format('Y');

		$sql = "DELETE FROM headexist WHERE existparent = $cligetid" ;
		$result = $conn->query($sql);

		$headsdescription = $_POST['headsdescription'];
		$headspo = $_POST['headspo'];
		$headsdate = $_POST['headsdate'];
		$headsbyparty = $_POST['headsbyparty'];
		$headsbyab = $_POST['headsbyab'];
		$headsbytype = $_POST['headsbytype'];
		
		foreach ($headsdescription as $key => $value) {
			$sql6 = "INSERT INTO `headexist` (`existdes`, `existpo`, `existdate`, `existparty`, `existab`, `existparent`, `headsbytype`) 
			VALUES 
			('".mysqli_real_escape_string($conn, $headsdescription[$key])."', '".mysqli_real_escape_string($conn, $headspo[$key])."', '".mysqli_real_escape_string($conn, $headsdate[$key])."', '".mysqli_real_escape_string($conn, $headsbyparty[$key])."', '".mysqli_real_escape_string($conn, $headsbyab[$key])."', '$cligetid', '".mysqli_real_escape_string($conn, $headsbytype[$key])."')";
			$result6 = $conn->query($sql6);
		}
		$sql6 = "UPDATE `arshaddata` SET  `clisalenum` =  '$clisalenum', `cligdno` =  '$cligdno', `clibillno1` =  '$clibillno1',  `cligddate` =  '$cligddate',  `cliourrefno` =  '$cliourrefno',  `cliyourrefno` =  '$cliyourrefno',  `clidatedtext` =  '$clidatedtext',  `climscode` =  '$climscode',  `clinametext` =  '$clinametext',  `clinewref` =  '$clinewref',  `clinoofpackage` =  '$clinoofpackage',  `cliindexno` =  '$cliindexno',  `clidescription` =  '$clidescription',  `clivessel` =  '$clivessel',  `cliegmnumber` =  '$cliegmnumber',  `clidatedsec` =  '$clidatedsec',  `clipartyinvno` =  '$clipartyinvno',  `cliedtreno` =  '$cliedtreno',  `cliedtredate` =  '$cliedtredate',  `clivoucherno` =  '$clivoucherno',  `salservicechargesrs` =  '$salservicechargesrs',  `clisalestaxamt` =  '$clisalestaxamt',  `cliremarks` =  '$cliremarks',  `companysaletax` =  '$companysalestax',  `comaddress` =  '$companyaddress',  `companyntn` =  '$companyntnno',  `searchmonth` =  '$searchmonth',  `searchyear` =  '$searchyear' WHERE id = $cligetid";
		$result6 = $conn->query($sql6);
		if ($result6) {

		}	

		header('Location: '.$website.'form.php?id='.$cligetid);
	}
	?>
	<style type="text/css">[class*="col-sm"], [class*="col-md"], [class*="col-lg"], [class*="col-xs"] {
	    margin-bottom: 0 !important;}</style>
	<div class="noprint">
	<div class="row">
	   <div class="col-lg-12">
		  <div class=" padded" >
				<h3>Client Invoice, Sales Tax Invoice Ind. Of GD</h3>
				<?php 
					if( isset($_GET['id'])!="") { ?>
				<div class="pull-right"><a href="saleform.php?id=<?php echo $_GET['id'];?>">Sales Tax Invoice(IND GD)</a></div><?php 
				} ?>
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
										<!-- Row 1 -->
										<div class="col-lg-3 col-xs-3">
											<label>Sale Num#</label><input type="text" name="clisalenum" value="<?php echo $row['clisalenum'];?>">
										</div>
										<div class="col-lg-3 col-xs-3">
											<input type="hidden" name="getid" value="<?php echo $_GET['id'];?>">
											<label>GD NO#</label><input type="text" name="gdno" value="<?php echo $row['cligdno'];?>">
										</div>
										<div class="col-lg-3 col-xs-3">
											<div class="col-lg-12 col-xs-12">
											<label>Bill NO#</label><input type="text" name="billno1" value="<?php echo $row['clibillno1'];?>">
											</div>
										</div>
										<div class="col-lg-3 col-xs-3">
											<label>GD Date#</label><input type="text" name="gddate" id="datepicker" value="<?php echo $row['cligddate'];?>">
										</div>
									</div>
									<div class="row">
										<!-- Row 2 -->
										<div class="col-lg-4 col-xs-4">
											<label>Our Ref No#</label><input type="text" name="ourrefno" value="<?php echo $row['cliourrefno'];?>">
										</div>
										<div class="col-lg-4 col-xs-4">
											<div class="col-lg-7">
											<label>Your Ref NO#</label><input type="text" name="yourrefno" value="<?php echo $row['cliyourrefno'];?>">
											</div>
										</div>
										<div class="col-lg-4 col-xs-4">
											<label>Dated</label><input type="text" name="datedtext" id="datepicker2" value="<?php echo $row['clidatedtext'];?>">
										</div>
									</div>
									<div class="row">
										<!-- Row 3 -->
										<div class="col-lg-4 col-xs-4">
											<label>Ms Code</label>
											<select name="mscode" id="company">
											<option>M/S : Code</option>
											<?php 
											$sql4 = "SELECT * FROM companydata";
											$result4 = $conn->query($sql4);
											while($row4 = $result4->fetch_assoc()) { ?>
												<option value="<?php echo $row4['compautoid'];?>" <?php if ($row['climscode'] == $row4['compautoid']) { echo "selected='selected'"; } ?> data-name="<?php echo $row4['compname'];?>" data-salestax="<?php echo $row4['compstax'];?>" data-address="<?php echo $row4['compaddress'];?>"  data-ntnno="<?php echo $row4['compntn'];?>" ><?php echo $row4['compid'];?></option>
											<?php 
											} ?></select>
											<input type="hidden" name="companysalestax" value="<?php echo $row['companysaletax'];?>">
											<input type="hidden" name="companyaddress" value="<?php echo $row['comaddress'];?>">
											<input type="hidden" name="companyntnno" value="<?php echo $row['companyntn'];?>">
										</div>
										<div class="col-lg-8 col-xs-8">
											<label>Name</label><input type="text" name="companyname" value="<?php echo $row['clinametext'];?>">
										</div>
									</div>
									<div class="row">
										<!-- Row 4 -->
										<div class="col-lg-4 col-xs-4">
											<label>New Ref#</label><input type="text" name="newref" value="<?php echo $row['clinewref'];?>">
										</div>
										<div class="col-lg-4 col-xs-4">
											<label>NO of pkgs#</label><input type="text" name="noofpackage" value="<?php echo $row['clinoofpackage'];?>">
										</div>
										<div class="col-lg-4 col-xs-4">
											<label>Index NO#</label><input type="text" name="indexno" value="<?php echo $row['cliindexno'];?>">
										</div>
									</div>
									<div class="row">
										<!-- Row 5 -->
										<div class="col-lg-12 col-xs-12">
											<label>Description</label><input type="text" name="description" value="<?php echo $row['clidescription'];?>">
										</div>
									</div>
									<div class="row">
										<!-- Row 6 -->
										<div class="col-lg-4 col-xs-4">
											<label>Vessel</label><input type="text" name="vessel" value="<?php echo $row['clivessel'];?>">
										</div>
										<div class="col-lg-4 col-xs-4">
											<label>EGM Number</label><input type="text" name="egmnumber" value="<?php echo $row['cliegmnumber'];?>">
										</div>
										<div class="col-lg-4 col-xs-4">
											<label>Dated</label><input type="text" name="datedsec" id="datepicker3" value="<?php echo $row['clidatedsec'];?>">
										</div>
									</div>
									<div class="row">
										<!-- Row 7 -->
										<div class="col-lg-4 col-xs-4">
											<label>Party Inv No#</label><input type="text" name="partyinvno" value="<?php echo $row['clipartyinvno'];?>">
										</div>
										<div class="col-lg-4 col-xs-4">
											<label>EDTRE NO#</label><input type="text" name="edtreno" value="<?php echo $row['cliedtreno'];?>">
										</div>
										<div class="col-lg-4 col-xs-4">
											<label>EDTRE Date</label><input type="text" name="edtredate" id="datepicker4" value="<?php echo $row['cliedtredate'];?>">
										</div>
									</div>
									<div class="row">
										<!-- Row 6 -->
										<div class="col-lg-4 col-xs-4">
											<div class="col-lg-12 col-xs-12">
											<label>Voucher No</label><input type="text" name="voucherno" value="<?php echo $row['clivoucherno'];?>">
											</div>
											<div class="col-lg-12 col-xs-12">
											<label>Service Charges</label><input type="text" name="servicecharges" value="<?php echo $row['salservicechargesrs'];?>" class="serchrwotax">
											</div>
											<div class="col-lg-12 col-xs-12">
											<label>Sales Tax Amt</label><input type="text" name="salestaxamt" value="<?php echo $row['clisalestaxamt'];?>" class="serchrtax">
											</div>
										</div>
										<div class="col-lg-8 col-xs-8">
											<label>Remarks</label><input type="text" name="remarks" value="<?php echo $row['cliremarks'];?>">
										</div>
									</div>
									<div class="row">
										<!-- Row 6 -->
										<div class="col-lg-3 col-xs-3">
											<label>Existing Heads</label>
											<select id="jsexistinghead" class="jsexistinghead">

												<?php 
												$sql4 = "SELECT * FROM weboption WHERE optionkey = 'existingheadstop' || optionkey = 'existingheadsbottom'";
												$result4 = $conn->query($sql4);
												while($row4 = $result4->fetch_assoc()) { 
												$ArrayofValue = explode(',', $row4['optionvalue']);
													foreach ($ArrayofValue as $value) {
														$inputvalue = str_replace(' ', '_', $value);?>
														<option value="<?php echo $value;?>" data-type="<?php echo $row4['optionkey'];?>"><?php echo $value;?></option>
													<?php }
												} ?>
											</select>
											<input type="hidden" name="headsoption" value="" id="headstype">
										</div>
										<div class="col-lg-3 col-xs-3">
											<label>Rec. #</label><input type="text" name="jsrecnum" id="jsrecnum">
										</div>
										<div class="col-lg-3 col-xs-3">
											<label>Date</label><input type="text" name="jsdate" id="datepicker5" class="jsdate">
										</div>
										<div class="col-lg-3 col-xs-3">
											<label>By Party</label><input type="text" name="jsbyparty" id="jsbyparty">
										</div>
										<div class="col-lg-3 col-xs-3">
											<label>By Ab</label><input type="text" name="jsbyab" id="jsbyab">
										</div>
										<div class="col-lg-3 col-xs-3">
											<br>
											<a class="btn btn-primary pull-right addmorefield">Add</a>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3 col-xs-3">
											<b>Description</b>
										</div>
										<div class="col-lg-3 col-xs-3">
											<b>P.O</b>
										</div>
										<div class="col-lg-2 col-xs-2">
											<b>Date</b>
										</div>
										<div class="col-lg-2 col-xs-2">
											<b>By Party</b>
										</div>
										<div class="col-lg-2 col-xs-2">
											<b>By A&amp;B</b>
										</div>
										
											<?php 

											$sql3 = "SELECT * FROM headexist WHERE existparent = $getid";

											$result3 = $conn->query($sql3);
											while($row3 = $result3->fetch_assoc()) { ?>
										<div class="savedatatem">
												<div class="col-lg-3 col-xs-3">
													<input type="text" name="headsdescription[]" class="headdescivalue" readonly="" value="<?php echo $row3['existdes'];?>">
												</div>
												<div class="col-lg-3 col-xs-3">
													<input type="text" name="headspo[]" readonly="" value="<?php echo $row3['existpo'];?>">
												</div>
												<div class="col-lg-2 col-xs-2">
													<input type="text" name="headsdate[]" readonly="" value="<?php echo $row3['existdate'];?>">
												</div>
												<div class="col-lg-2 col-xs-2">
													<input type="text" name="headsbyparty[]" readonly="" value="<?php echo $row3['existparty'];?>">
												</div>
												<div class="col-lg-1 col-xs-1">
													<input type="text" name="headsbyab[]" readonly="" value="<?php echo $row3['existab'];?>">
													<input type="hidden" name="headsbytype[]" value="<?php echo $row3['headsbytype'];?>">
												</div>
												<div class="col-lg-1 col-xs-1">
													<a class="removethis">Delete</a>
												</div>
										</div>
											<?php } ?>
										<div class="savedatatems">
											
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<button class="btn btn-primary pull-right" type="submit" name="updateform">Save</button>
											<a href="form.php?print=<?php echo $_GET['id'];?>" class="btn btn-primary pull-right" target="_blank">Print</a>

										</div>
									</div>
								<?php
									}
								} else {
								?>
						<form action="" name="formadd" class="form-horizontal" method="post">
							<style type="text/css">input { width: 100%; }</style>
							<div class="row">
								<!-- Row 1 -->
								<div class="col-lg-3 col-xs-3">
									<label>Sale Num#</label><input type="text" name="clisalenum">
								</div>
								<div class="col-lg-3 col-xs-3">
									<label>GD NO#</label><input type="text" name="gdno">
								</div>
								<div class="col-lg-3 col-xs-3">
									<div class="col-lg-12 col-xs-12">
									<label>Bill NO#</label><input type="text" name="billno1"   onBlur="checkAvailability()" id="billno1">
										<p><img src="assets/frontend/images/LoaderIcon.gif" id="loaderIcon" style="display:none;"/></p>
									
								<span id="user-availability-status"></span>
									</div>
								</div>
								<div class="col-lg-3 col-xs-3">
									<label>GD Date#</label><input type="text" name="gddate" id="datepicker" data-date-format='yyyy-mm-dd'   value="<?php echo date('d-m-Y', time()); ?>" >
								</div>
							</div>
							<div class="row">
								<!-- Row 2 -->
								<div class="col-lg-4 col-xs-4">
									<label>Our Ref No#</label><input type="text" name="ourrefno">
								</div>
								<div class="col-lg-4 col-xs-4">
									<div class="col-lg-7">
									<label>Your Ref NO#</label><input type="text" name="yourrefno">
									</div>
								</div>
								<div class="col-lg-4 col-xs-4">
									<label>Dated</label><input type="text" name="datedtext" id="datepicker2" value="<?php echo date('d-m-Y', time()); ?>" >
								</div>
							</div>
							<div class="row">
								<!-- Row 3 -->
								<div class="col-lg-4 col-xs-4">
									<label>M/S : Code</label>
									<select name="mscode" id="company">
									<option>M/S : Code</option>
									<?php 
									$sql4 = "SELECT * FROM companydata";
									$result4 = $conn->query($sql4);
									while($row4 = $result4->fetch_assoc()) { ?>
										<option value="<?php echo $row4['compautoid'];?>" data-name="<?php echo $row4['compname'];?>" data-salestax="<?php echo $row4['compstax'];?>" data-address="<?php echo $row4['compaddress'];?>"  data-ntnno="<?php echo $row4['compntn'];?>"><?php echo $row4['compid'];?></option>
									<?php 
									} ?></select>
									<input type="hidden" name="companysalestax" value="">
									<input type="hidden" name="companyaddress" value="">
									<input type="hidden" name="companyntnno" value="">
								</div>
								<div class="col-lg-8 col-xs-8">
									<label>Name</label><input type="text" name="companyname">
								</div>
							</div>
							<div class="row">
								<!-- Row 4 -->
								<div class="col-lg-4 col-xs-4">
									<label>New Ref#</label><input type="text" name="newref">
								</div>
								<div class="col-lg-4 col-xs-4">
									<label>NO of pkgs#</label><input type="text" name="noofpackage">
								</div>
								<div class="col-lg-4 col-xs-4">
									<label>Index NO#</label><input type="text" name="indexno">
								</div>
							</div>
							<div class="row">
								<!-- Row 5 -->
								<div class="col-lg-12 col-xs-12">
									<label>Description</label><input type="text" name="description">
								</div>
							</div>
							<div class="row">
								<!-- Row 6 -->
								<div class="col-lg-4 col-xs-4">
									<label>Vessel</label><input type="text" name="vessel">
								</div>
								<div class="col-lg-4 col-xs-4">
									<label>EGM Number</label><input type="text" name="egmnumber">
								</div>
								<div class="col-lg-4 col-xs-4">
									<label>Dated</label><input type="text" name="datedsec" id="datepicker3" >
								</div>
							</div>
							<div class="row">
								<!-- Row 7 -->
								<div class="col-lg-4 col-xs-4">
									<label>Party Inv No#</label><input type="text" name="partyinvno">
								</div>
								<div class="col-lg-4 col-xs-4">
									<label>EDTRE NO#</label><input type="text" name="edtreno">
								</div>
								<div class="col-lg-4 col-xs-4">
									<label>EDTRE Date</label><input type="text" name="edtredate" id="datepicker4"  >
								</div>
							</div>
							<div class="row">
								<!-- Row 6 -->
								<div class="col-lg-4 col-xs-4">
									<div class="col-lg-12 col-xs-12">
									<label>Voucher No</label><input type="text" name="voucherno">
									</div>
									<div class="col-lg-12 col-xs-12">
									<label>Service Charges</label><input type="text" name="servicecharges" class="serchrwotax">
									</div>
									<div class="col-lg-12 col-xs-12">
									<label>Sales Tax Amt</label><input type="text" name="salestaxamt" class="serchrtax">
									</div>
								</div>
								<div class="col-lg-8 col-xs-8">
									<label>Remarks</label><input type="text" name="remarks">
								</div>
							</div>
							<div class="row">
								<!-- Row 6 -->
								<div class="col-lg-3 col-xs-3">
									<label>Existing Heads</label>
									<select id="jsexistinghead" class="jsexistinghead">
										<option selected>Select Existing Heads</option>
										<?php 
										$sql4 = "SELECT * FROM weboption WHERE optionkey = 'existingheadstop' || optionkey = 'existingheadsbottom'";
										$result4 = $conn->query($sql4);
										while($row4 = $result4->fetch_assoc()) { 
										$ArrayofValue = explode(',', $row4['optionvalue']);
											foreach ($ArrayofValue as $value) {
												$inputvalue = str_replace(' ', '_', $value);?>
												<option value="<?php echo $value;?>" data-type="<?php echo $row4['optionkey'];?>"><?php echo $value;?></option>
											<?php }
										} ?>
									</select>
									<input type="hidden" name="headsoption" value="" id="headstype">
								</div>
								<div class="col-lg-3 col-xs-3">
									<label>Rec. #</label><input type="text" name="jsrecnum" id="jsrecnum">
								</div>
								<div class="col-lg-3 col-xs-3">
									<label>Date</label><input type="text" name="jsdate" id="datepicker5" class="jsdate">
								</div>
								<div class="col-lg-3 col-xs-3">
									<label>By Party</label><input type="text" name="jsbyparty" id="jsbyparty">
								</div>
								<div class="col-lg-3 col-xs-3">
									<label>By Ab</label><input type="text" name="jsbyab" id="jsbyab">
								</div>
								<div class="col-lg-3 col-xs-3">
									<br>
									<a class="btn btn-primary pull-right addmorefield">Add</a>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-3 col-xs-3">
									<b>Description</b>
								</div>
								<div class="col-lg-3 col-xs-3">
									<b>P.O</b>
								</div>
								<div class="col-lg-2 col-xs-2">
									<b>Date</b>
								</div>
								<div class="col-lg-2 col-xs-2">
									<b>By Party</b>
								</div>
								<div class="col-lg-2 col-xs-2">
									<b>By A&B</b>
								</div>
								<div class="savedatatems">
									
								</div>
							</div>
								<div class="col-lg-12">
									<button class="btn btn-primary pull-right" type="submit" name="formadd">Save</button>
								</div>
							</div>
						</form>
					<?php } ?>
				 </div>
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