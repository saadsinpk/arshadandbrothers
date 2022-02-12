<?php
ob_start();
session_start();
include 'header.php';
include 'connect.php';
if (isset($_SESSION['user'])) {
if($_SESSION['group'] == '2' || $_SESSION['group'] == '1') {
if (isset($_POST['formadd'])) {

    $compid = $_POST['compid'];
    $compname = $_POST['compname']; 
    $compbal = $_POST['compbal'];
    $compbaltype = $_POST['compbaltype'];
    $compdate = $_POST['compdate'];
    $compaddress = $_POST['compaddress'];
    $compcity = $_POST['compcity'];
    $compcountry = $_POST['compcountry'];
    $compimp = $_POST['compimp'];
    $compphone = $_POST['compphone'];
    $compntn = $_POST['compntn'];
    $compfax = $_POST['compfax'];
    $compstax = $_POST['compstax'];
    $compemail = $_POST['compemail'];
    $compcontact = $_POST['compcontact'];


	$sql6 = "INSERT INTO `companydata` (`compid`, `compname`, `compbal`, `compbaltype`, `compdate`, `compaddress`, `compcity`, `compcountry`, `compimp`, `compphone`, `compntn`, `compfax`, `compstax`, `compemail`, `compcontact`) 
	VALUES 
	('$compid', '$compname', '$compbal', '$compbaltype', '$compdate', '$compaddress', '$compcity', '$compcountry', '$compimp', '$compphone', '$compntn', '$compfax', '$compstax', '$compemail', '$compcontact')";
	$result6 = $conn->query($sql6);
	header('Location: '.$website.'company.php');
}
if (isset($_POST['updateform'])) {

	$compautoid = $_POST['compautoid'];
    $compid = $_POST['compid'];
    $compname = $_POST['compname']; 
    $compbal = $_POST['compbal'];
    $compbaltype = $_POST['compbaltype'];
    $compdate = $_POST['compdate'];
    $compaddress = $_POST['compaddress'];
    $compcity = $_POST['compcity'];
    $compcountry = $_POST['compcountry'];
    $compimp = $_POST['compimp'];
    $compphone = $_POST['compphone'];
    $compntn = $_POST['compntn'];
    $compfax = $_POST['compfax'];
    $compstax = $_POST['compstax'];
    $compemail = $_POST['compemail'];
    $compcontact = $_POST['compcontact'];


	$sql6 = "UPDATE `companydata` SET  `compid` =  '$compid', `compname` =  '$compname',  `compbal` =  '$compbal',  `compbaltype` =  '$compbaltype',  `compdate` =  '$compdate',  `compaddress` =  '$compaddress',  `compcity` =  '$compcity',  `compcountry` =  '$compcountry',  `compimp` =  '$compimp',  `compphone` =  '$compphone',  `compntn` =  '$compntn',  `compfax` =  '$compfax',  `compstax` =  '$compstax',  `compemail` =  '$compemail',  `compcontact` =  '$compcontact' WHERE compautoid = $compautoid";
	$result6 = $conn->query($sql6);
	if ($result6) {

	}	

	header('Location: '.$website.'company.php');
}
?>
<style type="text/css">[class*="col-sm"], [class*="col-md"], [class*="col-lg"], [class*="col-xs"] {
    margin-bottom: 0 !important;} input[type="radio"] {    width: 20px;}</style>




<div class="noprint">
<div class="row">
   <div class="col-lg-12">
	  <div class=" padded" >
	  	<?php if( isset($_GET['view'])!="") { 
	  		$viewid = $_GET['view'];
	  		if(!isset($_GET['month'])) {
	  			$month = date("n");
	  		} else {
	  			$month = $_GET['month'];
	  		}
	  		if(!isset($_GET['year'])) {
	  			$year = date("Y");
	  		} else {
	  			$year = $_GET['year'];
	  		}  		
			$sql = "SELECT * FROM companydata WHERE compautoid = '$viewid'";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc()) {
				echo "<h3>".$row['compname']."</h3>";
				if(!isset($_GET['datevari'])) {
					echo "Month : <b>".$_GET['month']."</b>";
					echo "<br>";
					echo "Year : <b>".$_GET['year']."</b>";
					echo "<br>";
				}
				echo "<div class='pull-right hidden-xs'><button onclick='myFunction()'>Print</button></div>";?>
				<style type="text/css">td { margin : 0 !important; padding : 0 !important; font-size : 12px !important; height: 12px !important; } .padded {    padding: 0 !important;} </style>
				<form method="get" class="hidden-xs">
					<input type="hidden" name="view" value="<?php echo $viewid;?>">
					<label>Date <b><?php if(isset($_GET['datevari'])) { echo $_GET['datevari']; }?></b></label><input type="text" name="datevari" id="datepickerfront3" value="<?php if(isset($_GET['datevari'])) { echo $_GET['datevari']; }?>">
					<input type="submit" name="submit" value="submit">
				</form>
			<?php }
	  	} else {
			echo "<h3>Company</h3>";
	  	} ?>
		</div>
		<div class="widget-container fluid-height">
			<div class="widget-content padded">
			<?php
				if( isset($_GET['delete'])!="") { 
					$delete = $_GET['delete'];
					$sql = "DELETE FROM companydata WHERE compautoid = $delete" ;
					$result = $conn->query($sql);
					if (isset($result)) {
						echo '<h1>Delete Successfully</h1>';
						header('Location: '.$website.'company.php');
					} else {
						echo 'Sorry could not delete because id is not correct';
					}

				}
				elseif( isset($_GET['view'])!="") { 
				$viewid = $_GET['view'];?>
				<table class="table table-bordered table-striped">
				  <thead>
				  <tr row="">
					<th>
					  Bill No
					</th>
					<th>
					  Bill DATE
					</th>
					<th>
					  INVOICE NO#
					</th>
					<th>
						TOTAL
					</th>
					</tr></thead>
				  <tbody>
					<?php
						$totalamount = '';
						if( isset($_GET['datevari'])!="") { 
							$datevariable = $_GET['datevari'];
							$sql = "SELECT * FROM arshaddata WHERE climscode = '$viewid' AND clidatedtext = '$datevariable'  ORDER BY clibillno1 ASC";
						} else {
							$sql = "SELECT * FROM arshaddata WHERE climscode = '$viewid' AND searchmonth = '$month' AND searchyear = '$year' ORDER BY clibillno1 ASC";
						}
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc()) {
						$clientidauto = $row['id'];
							$sql2 = "SELECT SUM(existab) as sumofab FROM headexist WHERE existparent = $clientidauto";
							$result2 = $conn->query($sql2);
							while($row2 = $result2->fetch_assoc()) { 
								$totalamt = $row2['sumofab'];
							}
							$amountwithouttax = $row['salservicechargesrs'];
							$sql4 = "SELECT * FROM weboption WHERE optionkey = 'percentage'";
							$result4 = $conn->query($sql4);
							while($row4 = $result4->fetch_assoc()) { 
								$taxperc = $row4['optionvalue'];
							}
						$amtwithtax = $amountwithouttax * $taxperc /  100;
						$totalforwords = $amtwithtax + $amountwithouttax + $totalamt;
						$totalamount += $totalforwords;
					?>
							<tr>
							  <td>
								<?php echo $row['clibillno1']; ?>
							  </td>
							  <td>
								<?php echo $row['clidatedtext']; ?>
							  </td>
							  <td>
								<?php echo $row['clipartyinvno']; ?>
							  </td>
							  <td>
								<?php echo $totalforwords; ?>
							  </td>
							</tr>
						<?php
							}
						?>
							<tr>
							  <td>
							  </td>
							  <td>
							  </td>
							  <td>
							  </td>
							  <td>
								<?php echo $totalamount; ?>
							  </td>
							</tr>

				  </tbody>
				</table>
				<?php }
				elseif( isset($_GET['id'])!="") { 
					$getid = $_GET['id'];

					$sql = "SELECT * FROM companydata WHERE compautoid = $getid";

					$result = $conn->query($sql);
					if ($result->num_rows != '1') {
						header('Location: '.$website.'company.php');
					}
					while($row = $result->fetch_assoc()) { ?>
							<form action="" name="updateform" class="form-horizontal" method="post">
								<style type="text/css">input { width: 100%; }</style>
								<input type="hidden" name="compautoid" value="<?php echo $row['compautoid'];?>">
								<div class="row">
									<!-- Row 1 -->
									<div class="col-lg-4 col-xs-4">
										<label>Company ID</label><input type="text" name="compid" value="<?php echo $row['compid'];?>">
									</div>
									<div class="col-lg-4 col-xs-4">
										<label>Company Name</label><input type="text" name="compname" value="<?php echo $row['compname'];?>">
									</div>
									<div class="col-lg-4 col-xs-4">
										<label>Opening Balance</label><input type="text" name="compbal" value="<?php echo $row['compbal'];?>">
										<input type="radio" name="compbaltype" value="Dr" <?php if($row['compbaltype'] == 'Dr') { echo "checked"; } ?>>Dr.
										<input type="radio" name="compbaltype" value="Cr" <?php if($row['compbaltype'] == 'Cr') { echo "checked"; } ?>>Cr.
									</div>
								</div>
								<div class="row">
									<!-- Row 2 -->
									<div class="col-lg-4 col-xs-4">
										<label>Date</label><input type="text" name="compdate" value="<?php echo $row['compdate'];?>" id="datepicker">
									</div>
									<div class="col-lg-4 col-xs-4">
										<div class="col-lg-7">
										<label>Company Addres</label><input type="text" name="compaddress" value="<?php echo $row['compaddress'];?>">
										</div>
									</div>
									<div class="col-lg-4 col-xs-4">
										<label>City</label><input type="text" name="compcity" value="<?php echo $row['compcity'];?>">
									</div>
								</div>
								<div class="row">
									<!-- Row 3 -->
									<div class="col-lg-4 col-xs-4">
										<label>Country</label><select name="compcountry"> 
											<option value="United States" <?php if($row['compcountry'] == 'United States') { echo "selected='selected'"; } ?>>United States</option> 
											<option value="United Kingdom"<?php if($row['compcountry'] == 'United Kingdom') { echo "selected='selected'"; } ?>>United Kingdom</option> 
											<option value="Afghanistan"<?php if($row['compcountry'] == 'Afghanistan') { echo "selected='selected'"; } ?>>Afghanistan</option> 
											<option value="Albania"<?php if($row['compcountry'] == 'Albania') { echo "selected='selected'"; } ?>>Albania</option> 
											<option value="Algeria"<?php if($row['compcountry'] == 'Algeria') { echo "selected='selected'"; } ?>>Algeria</option> 
											<option value="American Samoa"<?php if($row['compcountry'] == 'American Samoa') { echo "selected='selected'"; } ?>>American Samoa</option> 
											<option value="Andorra"<?php if($row['compcountry'] == 'Andorra') { echo "selected='selected'"; } ?>>Andorra</option> 
											<option value="Angola"<?php if($row['compcountry'] == 'Angola') { echo "selected='selected'"; } ?>>Angola</option> 
											<option value="Anguilla"<?php if($row['compcountry'] == 'Anguilla') { echo "selected='selected'"; } ?>>Anguilla</option> 
											<option value="Antarctica"<?php if($row['compcountry'] == 'Antarctica') { echo "selected='selected'"; } ?>>Antarctica</option> 
											<option value="Antigua and Barbuda"<?php if($row['compcountry'] == 'Antigua and Barbuda') { echo "selected='selected'"; } ?>>Antigua and Barbuda</option> 
											<option value="Argentina"<?php if($row['compcountry'] == 'Argentina') { echo "selected='selected'"; } ?>>Argentina</option> 
											<option value="Armenia"<?php if($row['compcountry'] == 'Armenia') { echo "selected='selected'"; } ?>>Armenia</option> 
											<option value="Aruba"<?php if($row['compcountry'] == 'Aruba') { echo "selected='selected'"; } ?>>Aruba</option> 
											<option value="Australia"<?php if($row['compcountry'] == 'Australia') { echo "selected='selected'"; } ?>>Australia</option> 
											<option value="Austria"<?php if($row['compcountry'] == 'Austria') { echo "selected='selected'"; } ?>>Austria</option> 
											<option value="Azerbaijan"<?php if($row['compcountry'] == 'Azerbaijan') { echo "selected='selected'"; } ?>>Azerbaijan</option> 
											<option value="Bahamas"<?php if($row['compcountry'] == 'Bahamas') { echo "selected='selected'"; } ?>>Bahamas</option> 
											<option value="Bahrain"<?php if($row['compcountry'] == 'Bahrain') { echo "selected='selected'"; } ?>>Bahrain</option> 
											<option value="Bangladesh"<?php if($row['compcountry'] == 'Bangladesh') { echo "selected='selected'"; } ?>>Bangladesh</option> 
											<option value="Barbados"<?php if($row['compcountry'] == 'Barbados') { echo "selected='selected'"; } ?>>Barbados</option> 
											<option value="Belarus"<?php if($row['compcountry'] == 'Belarus') { echo "selected='selected'"; } ?>>Belarus</option> 
											<option value="Belgium"<?php if($row['compcountry'] == 'Belgium') { echo "selected='selected'"; } ?>>Belgium</option> 
											<option value="Belize"<?php if($row['compcountry'] == 'Belize') { echo "selected='selected'"; } ?>>Belize</option> 
											<option value="Benin"<?php if($row['compcountry'] == 'Benin') { echo "selected='selected'"; } ?>>Benin</option> 
											<option value="Bermuda"<?php if($row['compcountry'] == 'Bermuda') { echo "selected='selected'"; } ?>>Bermuda</option> 
											<option value="Bhutan"<?php if($row['compcountry'] == 'Bhutan') { echo "selected='selected'"; } ?>>Bhutan</option> 
											<option value="Bolivia"<?php if($row['compcountry'] == 'Bolivia') { echo "selected='selected'"; } ?>>Bolivia</option> 
											<option value="Bosnia and Herzegovina"<?php if($row['compcountry'] == 'Bosnia and Herzegovina') { echo "selected='selected'"; } ?>>Bosnia and Herzegovina</option> 
											<option value="Botswana"<?php if($row['compcountry'] == 'Botswana') { echo "selected='selected'"; } ?>>Botswana</option> 
											<option value="Bouvet Island"<?php if($row['compcountry'] == 'Bouvet Island') { echo "selected='selected'"; } ?>>Bouvet Island</option> 
											<option value="Brazil"<?php if($row['compcountry'] == 'Brazil') { echo "selected='selected'"; } ?>>Brazil</option> 
											<option value="British Indian Ocean Territory"<?php if($row['compcountry'] == 'British Indian Ocean Territory') { echo "selected='selected'"; } ?>>British Indian Ocean Territory</option> 
											<option value="Brunei Darussalam"<?php if($row['compcountry'] == 'Brunei Darussalam') { echo "selected='selected'"; } ?>>Brunei Darussalam</option> 
											<option value="Bulgaria"<?php if($row['compcountry'] == 'Bulgaria') { echo "selected='selected'"; } ?>>Bulgaria</option> 
											<option value="Burkina Faso"<?php if($row['compcountry'] == 'Burkina Faso') { echo "selected='selected'"; } ?>>Burkina Faso</option> 
											<option value="Burundi"<?php if($row['compcountry'] == 'Burundi') { echo "selected='selected'"; } ?>>Burundi</option> 
											<option value="Cambodia"<?php if($row['compcountry'] == 'Cambodia') { echo "selected='selected'"; } ?>>Cambodia</option> 
											<option value="Cameroon"<?php if($row['compcountry'] == 'Cameroon') { echo "selected='selected'"; } ?>>Cameroon</option> 
											<option value="Canada"<?php if($row['compcountry'] == 'Canada') { echo "selected='selected'"; } ?>>Canada</option> 
											<option value="Cape Verde"<?php if($row['compcountry'] == 'Cape Verde') { echo "selected='selected'"; } ?>>Cape Verde</option> 
											<option value="Cayman Islands"<?php if($row['compcountry'] == 'Cayman Islands') { echo "selected='selected'"; } ?>>Cayman Islands</option> 
											<option value="Central African Republic"<?php if($row['compcountry'] == 'Central African Republic') { echo "selected='selected'"; } ?>>Central African Republic</option> 
											<option value="Chad"<?php if($row['compcountry'] == 'Chad') { echo "selected='selected'"; } ?>>Chad</option> 
											<option value="Chile"<?php if($row['compcountry'] == 'Chile') { echo "selected='selected'"; } ?>>Chile</option> 
											<option value="China"<?php if($row['compcountry'] == 'China') { echo "selected='selected'"; } ?>>China</option> 
											<option value="Christmas Island"<?php if($row['compcountry'] == 'Christmas Island') { echo "selected='selected'"; } ?>>Christmas Island</option> 
											<option value="Cocos (Keeling) Islands"<?php if($row['compcountry'] == 'Cocos (Keeling) Islands') { echo "selected='selected'"; } ?>>Cocos (Keeling) Islands</option> 
											<option value="Colombia"<?php if($row['compcountry'] == 'Colombia') { echo "selected='selected'"; } ?>>Colombia</option> 
											<option value="Comoros"<?php if($row['compcountry'] == 'Comoros') { echo "selected='selected'"; } ?>>Comoros</option> 
											<option value="Congo"<?php if($row['compcountry'] == 'Congo') { echo "selected='selected'"; } ?>>Congo</option> 
											<option value="Congo, The Democratic Republic of The"<?php if($row['compcountry'] == 'Congo, The Democratic Republic of The') { echo "selected='selected'"; } ?>>Congo, The Democratic Republic of The</option> 
											<option value="Cook Islands"<?php if($row['compcountry'] == 'Cook Islands') { echo "selected='selected'"; } ?>>Cook Islands</option> 
											<option value="Costa Rica"<?php if($row['compcountry'] == 'Costa Rica') { echo "selected='selected'"; } ?>>Costa Rica</option> 
											<option value="Cote D'ivoire"<?php if($row['compcountry'] == 'Cote Divoire') { echo "selected='selected'"; } ?>>Cote Divoire</option> 
											<option value="Croatia"<?php if($row['compcountry'] == 'Croatia') { echo "selected='selected'"; } ?>>Croatia</option> 
											<option value="Cuba"<?php if($row['compcountry'] == 'Cuba') { echo "selected='selected'"; } ?>>Cuba</option> 
											<option value="Cyprus"<?php if($row['compcountry'] == 'Cyprus') { echo "selected='selected'"; } ?>>Cyprus</option> 
											<option value="Czech Republic"<?php if($row['compcountry'] == 'Czech Republic') { echo "selected='selected'"; } ?>>Czech Republic</option> 
											<option value="Denmark"<?php if($row['compcountry'] == 'Denmark') { echo "selected='selected'"; } ?>>Denmark</option> 
											<option value="Djibouti"<?php if($row['compcountry'] == 'Djibouti') { echo "selected='selected'"; } ?>>Djibouti</option> 
											<option value="Dominica"<?php if($row['compcountry'] == 'Dominica') { echo "selected='selected'"; } ?>>Dominica</option> 
											<option value="Dominican Republic"<?php if($row['compcountry'] == 'Dominican Republic') { echo "selected='selected'"; } ?>>Dominican Republic</option> 
											<option value="Ecuador"<?php if($row['compcountry'] == 'Ecuador') { echo "selected='selected'"; } ?>>Ecuador</option> 
											<option value="Egypt"<?php if($row['compcountry'] == 'Egypt') { echo "selected='selected'"; } ?>>Egypt</option> 
											<option value="El Salvador"<?php if($row['compcountry'] == 'El Salvador') { echo "selected='selected'"; } ?>>El Salvador</option> 
											<option value="Equatorial Guinea"<?php if($row['compcountry'] == 'Equatorial Guinea') { echo "selected='selected'"; } ?>>Equatorial Guinea</option> 
											<option value="Eritrea"<?php if($row['compcountry'] == 'Eritrea') { echo "selected='selected'"; } ?>>Eritrea</option> 
											<option value="Estonia"<?php if($row['compcountry'] == 'Estonia') { echo "selected='selected'"; } ?>>Estonia</option> 
											<option value="Ethiopia"<?php if($row['compcountry'] == 'Ethiopia') { echo "selected='selected'"; } ?>>Ethiopia</option> 
											<option value="Falkland Islands (Malvinas)"<?php if($row['compcountry'] == 'Falkland Islands (Malvinas)') { echo "selected='selected'"; } ?>>Falkland Islands (Malvinas)</option> 
											<option value="Faroe Islands"<?php if($row['compcountry'] == 'Faroe Islands') { echo "selected='selected'"; } ?>>Faroe Islands</option> 
											<option value="Fiji"<?php if($row['compcountry'] == 'Fiji') { echo "selected='selected'"; } ?>>Fiji</option> 
											<option value="Finland"<?php if($row['compcountry'] == 'Finland') { echo "selected='selected'"; } ?>>Finland</option> 
											<option value="France"<?php if($row['compcountry'] == 'France') { echo "selected='selected'"; } ?>>France</option> 
											<option value="French Guiana"<?php if($row['compcountry'] == 'French Guiana') { echo "selected='selected'"; } ?>>French Guiana</option> 
											<option value="French Polynesia"<?php if($row['compcountry'] == 'French Polynesia') { echo "selected='selected'"; } ?>>French Polynesia</option> 
											<option value="French Southern Territories"<?php if($row['compcountry'] == 'French Southern Territories') { echo "selected='selected'"; } ?>>French Southern Territories</option> 
											<option value="Gabon"<?php if($row['compcountry'] == 'Gabon') { echo "selected='selected'"; } ?>>Gabon</option> 
											<option value="Gambia"<?php if($row['compcountry'] == 'Gambia') { echo "selected='selected'"; } ?>>Gambia</option> 
											<option value="Georgia"<?php if($row['compcountry'] == 'Georgia') { echo "selected='selected'"; } ?>>Georgia</option> 
											<option value="Germany"<?php if($row['compcountry'] == 'Germany') { echo "selected='selected'"; } ?>>Germany</option> 
											<option value="Ghana"<?php if($row['compcountry'] == 'Ghana') { echo "selected='selected'"; } ?>>Ghana</option> 
											<option value="Gibraltar"<?php if($row['compcountry'] == 'Gibraltar') { echo "selected='selected'"; } ?>>Gibraltar</option> 
											<option value="Greece"<?php if($row['compcountry'] == 'Greece') { echo "selected='selected'"; } ?>>Greece</option> 
											<option value="Greenland"<?php if($row['compcountry'] == 'Greenland') { echo "selected='selected'"; } ?>>Greenland</option> 
											<option value="Grenada"<?php if($row['compcountry'] == 'Grenada') { echo "selected='selected'"; } ?>>Grenada</option> 
											<option value="Guadeloupe"<?php if($row['compcountry'] == 'Guadeloupe') { echo "selected='selected'"; } ?>>Guadeloupe</option> 
											<option value="Guam"<?php if($row['compcountry'] == 'Guam') { echo "selected='selected'"; } ?>>Guam</option> 
											<option value="Guatemala"<?php if($row['compcountry'] == 'Guatemala') { echo "selected='selected'"; } ?>>Guatemala</option> 
											<option value="Guinea"<?php if($row['compcountry'] == 'Guinea') { echo "selected='selected'"; } ?>>Guinea</option> 
											<option value="Guinea-bissau"<?php if($row['compcountry'] == 'Guinea-bissau') { echo "selected='selected'"; } ?>>Guinea-bissau</option> 
											<option value="Guyana"<?php if($row['compcountry'] == 'Guyana') { echo "selected='selected'"; } ?>>Guyana</option> 
											<option value="Haiti"<?php if($row['compcountry'] == 'Haiti') { echo "selected='selected'"; } ?>>Haiti</option> 
											<option value="Heard Island and Mcdonald Islands"<?php if($row['compcountry'] == 'Heard Island and Mcdonald Islands') { echo "selected='selected'"; } ?>>Heard Island and Mcdonald Islands</option> 
											<option value="Holy See (Vatican City State)"<?php if($row['compcountry'] == 'Holy See (Vatican City State)') { echo "selected='selected'"; } ?>>Holy See (Vatican City State)</option> 
											<option value="Honduras"<?php if($row['compcountry'] == 'Honduras') { echo "selected='selected'"; } ?>>Honduras</option> 
											<option value="Hong Kong"<?php if($row['compcountry'] == 'Hong Kong') { echo "selected='selected'"; } ?>>Hong Kong</option> 
											<option value="Hungary"<?php if($row['compcountry'] == 'Hungary') { echo "selected='selected'"; } ?>>Hungary</option> 
											<option value="Iceland"<?php if($row['compcountry'] == 'Iceland') { echo "selected='selected'"; } ?>>Iceland</option> 
											<option value="India"<?php if($row['compcountry'] == 'India') { echo "selected='selected'"; } ?>>India</option> 
											<option value="Indonesia"<?php if($row['compcountry'] == 'Indonesia') { echo "selected='selected'"; } ?>>Indonesia</option> 
											<option value="Iran, Islamic Republic of"<?php if($row['compcountry'] == 'Iran, Islamic Republic of') { echo "selected='selected'"; } ?>>Iran, Islamic Republic of</option> 
											<option value="Iraq"<?php if($row['compcountry'] == 'Iraq') { echo "selected='selected'"; } ?>>Iraq</option> 
											<option value="Ireland"<?php if($row['compcountry'] == 'Ireland') { echo "selected='selected'"; } ?>>Ireland</option> 
											<option value="Israel"<?php if($row['compcountry'] == 'Israel') { echo "selected='selected'"; } ?>>Israel</option> 
											<option value="Italy"<?php if($row['compcountry'] == 'Italy') { echo "selected='selected'"; } ?>>Italy</option> 
											<option value="Jamaica"<?php if($row['compcountry'] == 'Jamaica') { echo "selected='selected'"; } ?>>Jamaica</option> 
											<option value="Japan"<?php if($row['compcountry'] == 'Japan') { echo "selected='selected'"; } ?>>Japan</option> 
											<option value="Jordan"<?php if($row['compcountry'] == 'Jordan') { echo "selected='selected'"; } ?>>Jordan</option> 
											<option value="Kazakhstan"<?php if($row['compcountry'] == 'Kazakhstan') { echo "selected='selected'"; } ?>>Kazakhstan</option> 
											<option value="Kenya"<?php if($row['compcountry'] == 'Kenya') { echo "selected='selected'"; } ?>>Kenya</option> 
											<option value="Kiribati"<?php if($row['compcountry'] == 'Kiribati') { echo "selected='selected'"; } ?>>Kiribati</option> 
											<option value="Korea, Democratic People's Republic of"<?php if($row['compcountry'] == 'Korea, Democratic Peoples Republic of') { echo "selected='selected'"; } ?>>Korea, Democratic Peoples Republic of</option> 
											<option value="Korea, Republic of"<?php if($row['compcountry'] == 'Korea, Republic of') { echo "selected='selected'"; } ?>>Korea, Republic of</option> 
											<option value="Kuwait"<?php if($row['compcountry'] == 'Kuwait') { echo "selected='selected'"; } ?>>Kuwait</option> 
											<option value="Kyrgyzstan"<?php if($row['compcountry'] == 'Kyrgyzstan') { echo "selected='selected'"; } ?>>Kyrgyzstan</option> 
											<option value="Lao People's Democratic Republic"<?php if($row['compcountry'] == 'Lao Peoples Democratic Republic') { echo "selected='selected'"; } ?>>Lao Peoples Democratic Republic</option> 
											<option value="Latvia"<?php if($row['compcountry'] == 'Latvia') { echo "selected='selected'"; } ?>>Latvia</option> 
											<option value="Lebanon"<?php if($row['compcountry'] == 'Lebanon') { echo "selected='selected'"; } ?>>Lebanon</option> 
											<option value="Lesotho"<?php if($row['compcountry'] == 'Lesotho') { echo "selected='selected'"; } ?>>Lesotho</option> 
											<option value="Liberia"<?php if($row['compcountry'] == 'Liberia') { echo "selected='selected'"; } ?>>Liberia</option> 
											<option value="Libyan Arab Jamahiriya"<?php if($row['compcountry'] == 'Libyan Arab Jamahiriya') { echo "selected='selected'"; } ?>>Libyan Arab Jamahiriya</option> 
											<option value="Liechtenstein"<?php if($row['compcountry'] == 'Liechtenstein') { echo "selected='selected'"; } ?>>Liechtenstein</option> 
											<option value="Lithuania"<?php if($row['compcountry'] == 'Lithuania') { echo "selected='selected'"; } ?>>Lithuania</option> 
											<option value="Luxembourg"<?php if($row['compcountry'] == 'Luxembourg') { echo "selected='selected'"; } ?>>Luxembourg</option> 
											<option value="Macao"<?php if($row['compcountry'] == 'Macao') { echo "selected='selected'"; } ?>>Macao</option> 
											<option value="Macedonia, The Former Yugoslav Republic of"<?php if($row['compcountry'] == 'Macedonia, The Former Yugoslav Republic of') { echo "selected='selected'"; } ?>>Macedonia, The Former Yugoslav Republic of</option> 
											<option value="Madagascar"<?php if($row['compcountry'] == 'Madagascar') { echo "selected='selected'"; } ?>>Madagascar</option> 
											<option value="Malawi"<?php if($row['compcountry'] == 'Malawi') { echo "selected='selected'"; } ?>>Malawi</option> 
											<option value="Malaysia"<?php if($row['compcountry'] == 'Malaysia') { echo "selected='selected'"; } ?>>Malaysia</option> 
											<option value="Maldives"<?php if($row['compcountry'] == 'Maldives') { echo "selected='selected'"; } ?>>Maldives</option> 
											<option value="Mali"<?php if($row['compcountry'] == 'Mali') { echo "selected='selected'"; } ?>>Mali</option> 
											<option value="Malta"<?php if($row['compcountry'] == 'Malta') { echo "selected='selected'"; } ?>>Malta</option> 
											<option value="Marshall Islands"<?php if($row['compcountry'] == 'Marshall Islands') { echo "selected='selected'"; } ?>>Marshall Islands</option> 
											<option value="Martinique"<?php if($row['compcountry'] == 'Martinique') { echo "selected='selected'"; } ?>>Martinique</option> 
											<option value="Mauritania"<?php if($row['compcountry'] == 'Mauritania') { echo "selected='selected'"; } ?>>Mauritania</option> 
											<option value="Mauritius"<?php if($row['compcountry'] == 'Mauritius') { echo "selected='selected'"; } ?>>Mauritius</option> 
											<option value="Mayotte"<?php if($row['compcountry'] == 'Mayotte') { echo "selected='selected'"; } ?>>Mayotte</option> 
											<option value="Mexico"<?php if($row['compcountry'] == 'Mexico') { echo "selected='selected'"; } ?>>Mexico</option> 
											<option value="Micronesia, Federated States of"<?php if($row['compcountry'] == 'Micronesia, Federated States of') { echo "selected='selected'"; } ?>>Micronesia, Federated States of</option> 
											<option value="Moldova, Republic of"<?php if($row['compcountry'] == 'Moldova, Republic of') { echo "selected='selected'"; } ?>>Moldova, Republic of</option> 
											<option value="Monaco"<?php if($row['compcountry'] == 'Monaco') { echo "selected='selected'"; } ?>>Monaco</option> 
											<option value="Mongolia"<?php if($row['compcountry'] == 'Mongolia') { echo "selected='selected'"; } ?>>Mongolia</option> 
											<option value="Montserrat"<?php if($row['compcountry'] == 'Montserrat') { echo "selected='selected'"; } ?>>Montserrat</option> 
											<option value="Morocco"<?php if($row['compcountry'] == 'Morocco') { echo "selected='selected'"; } ?>>Morocco</option> 
											<option value="Mozambique"<?php if($row['compcountry'] == 'Mozambique') { echo "selected='selected'"; } ?>>Mozambique</option> 
											<option value="Myanmar"<?php if($row['compcountry'] == 'Myanmar') { echo "selected='selected'"; } ?>>Myanmar</option> 
											<option value="Namibia"<?php if($row['compcountry'] == 'Namibia') { echo "selected='selected'"; } ?>>Namibia</option> 
											<option value="Nauru"<?php if($row['compcountry'] == 'Nauru') { echo "selected='selected'"; } ?>>Nauru</option> 
											<option value="Nepal"<?php if($row['compcountry'] == 'Nepal') { echo "selected='selected'"; } ?>>Nepal</option> 
											<option value="Netherlands"<?php if($row['compcountry'] == 'Netherlands') { echo "selected='selected'"; } ?>>Netherlands</option> 
											<option value="Netherlands Antilles"<?php if($row['compcountry'] == 'Netherlands Antilles') { echo "selected='selected'"; } ?>>Netherlands Antilles</option> 
											<option value="New Caledonia"<?php if($row['compcountry'] == 'New Caledonia') { echo "selected='selected'"; } ?>>New Caledonia</option> 
											<option value="New Zealand"<?php if($row['compcountry'] == 'New Zealand') { echo "selected='selected'"; } ?>>New Zealand</option> 
											<option value="Nicaragua"<?php if($row['compcountry'] == 'Nicaragua') { echo "selected='selected'"; } ?>>Nicaragua</option> 
											<option value="Niger"<?php if($row['compcountry'] == 'Niger') { echo "selected='selected'"; } ?>>Niger</option> 
											<option value="Nigeria"<?php if($row['compcountry'] == 'Nigeria') { echo "selected='selected'"; } ?>>Nigeria</option> 
											<option value="Niue"<?php if($row['compcountry'] == 'Niue') { echo "selected='selected'"; } ?>>Niue</option> 
											<option value="Norfolk Island"<?php if($row['compcountry'] == 'Norfolk Island') { echo "selected='selected'"; } ?>>Norfolk Island</option> 
											<option value="Northern Mariana Islands"<?php if($row['compcountry'] == 'Northern Mariana Islands') { echo "selected='selected'"; } ?>>Northern Mariana Islands</option> 
											<option value="Norway"<?php if($row['compcountry'] == 'Norway') { echo "selected='selected'"; } ?>>Norway</option> 
											<option value="Oman"<?php if($row['compcountry'] == 'Oman') { echo "selected='selected'"; } ?>>Oman</option> 
											<option value="Pakistan" <?php if($row['compcountry'] == 'Pakistan') { echo "selected='selected'"; } ?>>Pakistan</option> 
											<option value="Palau"<?php if($row['compcountry'] == 'Palau') { echo "selected='selected'"; } ?>>Palau</option> 
											<option value="Palestinian Territory, Occupied"<?php if($row['compcountry'] == 'Palestinian Territory, Occupied') { echo "selected='selected'"; } ?>>Palestinian Territory, Occupied</option> 
											<option value="Panama"<?php if($row['compcountry'] == 'Panama') { echo "selected='selected'"; } ?>>Panama</option> 
											<option value="Papua New Guinea"<?php if($row['compcountry'] == 'Papua New Guinea') { echo "selected='selected'"; } ?>>Papua New Guinea</option> 
											<option value="Paraguay"<?php if($row['compcountry'] == 'Paraguay') { echo "selected='selected'"; } ?>>Paraguay</option> 
											<option value="Peru"<?php if($row['compcountry'] == 'Peru') { echo "selected='selected'"; } ?>>Peru</option> 
											<option value="Philippines"<?php if($row['compcountry'] == 'Philippines') { echo "selected='selected'"; } ?>>Philippines</option> 
											<option value="Pitcairn"<?php if($row['compcountry'] == 'Pitcairn') { echo "selected='selected'"; } ?>>Pitcairn</option> 
											<option value="Poland"<?php if($row['compcountry'] == 'Poland') { echo "selected='selected'"; } ?>>Poland</option> 
											<option value="Portugal"<?php if($row['compcountry'] == 'Portugal') { echo "selected='selected'"; } ?>>Portugal</option> 
											<option value="Puerto Rico"<?php if($row['compcountry'] == 'Puerto Rico') { echo "selected='selected'"; } ?>>Puerto Rico</option> 
											<option value="Qatar"<?php if($row['compcountry'] == 'Qatar') { echo "selected='selected'"; } ?>>Qatar</option> 
											<option value="Reunion"<?php if($row['compcountry'] == 'Reunion') { echo "selected='selected'"; } ?>>Reunion</option> 
											<option value="Romania"<?php if($row['compcountry'] == 'Romania') { echo "selected='selected'"; } ?>>Romania</option> 
											<option value="Russian Federation"<?php if($row['compcountry'] == 'Russian Federation') { echo "selected='selected'"; } ?>>Russian Federation</option> 
											<option value="Rwanda"<?php if($row['compcountry'] == 'Rwanda') { echo "selected='selected'"; } ?>>Rwanda</option> 
											<option value="Saint Helena"<?php if($row['compcountry'] == 'Saint Helena') { echo "selected='selected'"; } ?>>Saint Helena</option> 
											<option value="Saint Kitts and Nevis"<?php if($row['compcountry'] == 'Saint Kitts and Nevis') { echo "selected='selected'"; } ?>>Saint Kitts and Nevis</option> 
											<option value="Saint Lucia"<?php if($row['compcountry'] == 'Saint Lucia') { echo "selected='selected'"; } ?>>Saint Lucia</option> 
											<option value="Saint Pierre and Miquelon"<?php if($row['compcountry'] == 'Saint Pierre and Miquelon') { echo "selected='selected'"; } ?>>Saint Pierre and Miquelon</option> 
											<option value="Saint Vincent and The Grenadines"<?php if($row['compcountry'] == 'Saint Vincent and The Grenadines') { echo "selected='selected'"; } ?>>Saint Vincent and The Grenadines</option> 
											<option value="Samoa"<?php if($row['compcountry'] == 'Samoa') { echo "selected='selected'"; } ?>>Samoa</option> 
											<option value="San Marino"<?php if($row['compcountry'] == 'San Marino') { echo "selected='selected'"; } ?>>San Marino</option> 
											<option value="Sao Tome and Principe"<?php if($row['compcountry'] == 'Sao Tome and Principe') { echo "selected='selected'"; } ?>>Sao Tome and Principe</option> 
											<option value="Saudi Arabia"<?php if($row['compcountry'] == 'Saudi Arabia') { echo "selected='selected'"; } ?>>Saudi Arabia</option> 
											<option value="Senegal"<?php if($row['compcountry'] == 'Senegal') { echo "selected='selected'"; } ?>>Senegal</option> 
											<option value="Serbia and Montenegro"<?php if($row['compcountry'] == 'Serbia and Montenegro') { echo "selected='selected'"; } ?>>Serbia and Montenegro</option> 
											<option value="Seychelles"<?php if($row['compcountry'] == 'Seychelles') { echo "selected='selected'"; } ?>>Seychelles</option> 
											<option value="Sierra Leone"<?php if($row['compcountry'] == 'Sierra Leone') { echo "selected='selected'"; } ?>>Sierra Leone</option> 
											<option value="Singapore"<?php if($row['compcountry'] == 'Singapore') { echo "selected='selected'"; } ?>>Singapore</option> 
											<option value="Slovakia"<?php if($row['compcountry'] == 'Slovakia') { echo "selected='selected'"; } ?>>Slovakia</option> 
											<option value="Slovenia"<?php if($row['compcountry'] == 'Slovenia') { echo "selected='selected'"; } ?>>Slovenia</option> 
											<option value="Solomon Islands"<?php if($row['compcountry'] == 'Solomon Islands') { echo "selected='selected'"; } ?>>Solomon Islands</option> 
											<option value="Somalia"<?php if($row['compcountry'] == 'Somalia') { echo "selected='selected'"; } ?>>Somalia</option> 
											<option value="South Africa"<?php if($row['compcountry'] == 'South Africa') { echo "selected='selected'"; } ?>>South Africa</option> 
											<option value="South Georgia and The South Sandwich Islands"<?php if($row['compcountry'] == 'South Georgia and The South Sandwich Islands') { echo "selected='selected'"; } ?>>South Georgia and The South Sandwich Islands</option> 
											<option value="Spain"<?php if($row['compcountry'] == 'Spain') { echo "selected='selected'"; } ?>>Spain</option> 
											<option value="Sri Lanka"<?php if($row['compcountry'] == 'Sri Lanka') { echo "selected='selected'"; } ?>>Sri Lanka</option> 
											<option value="Sudan"<?php if($row['compcountry'] == 'Sudan') { echo "selected='selected'"; } ?>>Sudan</option> 
											<option value="Suriname"<?php if($row['compcountry'] == 'Suriname') { echo "selected='selected'"; } ?>>Suriname</option> 
											<option value="Svalbard and Jan Mayen"<?php if($row['compcountry'] == 'Svalbard and Jan Mayen') { echo "selected='selected'"; } ?>>Svalbard and Jan Mayen</option> 
											<option value="Swaziland"<?php if($row['compcountry'] == 'Swaziland') { echo "selected='selected'"; } ?>>Swaziland</option> 
											<option value="Sweden"<?php if($row['compcountry'] == 'Sweden') { echo "selected='selected'"; } ?>>Sweden</option> 
											<option value="Switzerland"<?php if($row['compcountry'] == 'Switzerland') { echo "selected='selected'"; } ?>>Switzerland</option> 
											<option value="Syrian Arab Republic"<?php if($row['compcountry'] == 'Syrian Arab Republic') { echo "selected='selected'"; } ?>>Syrian Arab Republic</option> 
											<option value="Taiwan, Province of China"<?php if($row['compcountry'] == 'Taiwan, Province of China') { echo "selected='selected'"; } ?>>Taiwan, Province of China</option> 
											<option value="Tajikistan"<?php if($row['compcountry'] == 'Tajikistan') { echo "selected='selected'"; } ?>>Tajikistan</option> 
											<option value="Tanzania, United Republic of"<?php if($row['compcountry'] == 'Tanzania, United Republic of') { echo "selected='selected'"; } ?>>Tanzania, United Republic of</option> 
											<option value="Thailand"<?php if($row['compcountry'] == 'Thailand') { echo "selected='selected'"; } ?>>Thailand</option> 
											<option value="Timor-leste"<?php if($row['compcountry'] == 'Timor-leste') { echo "selected='selected'"; } ?>>Timor-leste</option> 
											<option value="Togo"<?php if($row['compcountry'] == 'Togo') { echo "selected='selected'"; } ?>>Togo</option> 
											<option value="Tokelau"<?php if($row['compcountry'] == 'Tokelau') { echo "selected='selected'"; } ?>>Tokelau</option> 
											<option value="Tonga"<?php if($row['compcountry'] == 'Tonga') { echo "selected='selected'"; } ?>>Tonga</option> 
											<option value="Trinidad and Tobago"<?php if($row['compcountry'] == 'Trinidad and Tobago') { echo "selected='selected'"; } ?>>Trinidad and Tobago</option> 
											<option value="Tunisia"<?php if($row['compcountry'] == 'Tunisia') { echo "selected='selected'"; } ?>>Tunisia</option> 
											<option value="Turkey"<?php if($row['compcountry'] == 'Turkey') { echo "selected='selected'"; } ?>>Turkey</option> 
											<option value="Turkmenistan"<?php if($row['compcountry'] == 'Turkmenistan') { echo "selected='selected'"; } ?>>Turkmenistan</option> 
											<option value="Turks and Caicos Islands"<?php if($row['compcountry'] == 'Turks and Caicos Islands') { echo "selected='selected'"; } ?>>Turks and Caicos Islands</option> 
											<option value="Tuvalu"<?php if($row['compcountry'] == 'Tuvalu') { echo "selected='selected'"; } ?>>Tuvalu</option> 
											<option value="Uganda"<?php if($row['compcountry'] == 'Uganda') { echo "selected='selected'"; } ?>>Uganda</option> 
											<option value="Ukraine"<?php if($row['compcountry'] == 'Ukraine') { echo "selected='selected'"; } ?>>Ukraine</option> 
											<option value="United Arab Emirates"<?php if($row['compcountry'] == 'United Arab Emirates') { echo "selected='selected'"; } ?>>United Arab Emirates</option> 
											<option value="United Kingdom"<?php if($row['compcountry'] == 'United Kingdom') { echo "selected='selected'"; } ?>>United Kingdom</option> 
											<option value="United States"<?php if($row['compcountry'] == 'United States') { echo "selected='selected'"; } ?>>United States</option> 
											<option value="United States Minor Outlying Islands"<?php if($row['compcountry'] == 'United States Minor Outlying Islands') { echo "selected='selected'"; } ?>>United States Minor Outlying Islands</option> 
											<option value="Uruguay"<?php if($row['compcountry'] == 'Uruguay') { echo "selected='selected'"; } ?>>Uruguay</option> 
											<option value="Uzbekistan"<?php if($row['compcountry'] == 'Uzbekistan') { echo "selected='selected'"; } ?>>Uzbekistan</option> 
											<option value="Vanuatu"<?php if($row['compcountry'] == 'Vanuatu') { echo "selected='selected'"; } ?>>Vanuatu</option> 
											<option value="Venezuela"<?php if($row['compcountry'] == 'Venezuela') { echo "selected='selected'"; } ?>>Venezuela</option> 
											<option value="Viet Nam"<?php if($row['compcountry'] == 'Viet Nam') { echo "selected='selected'"; } ?>>Viet Nam</option> 
											<option value="Virgin Islands, British"<?php if($row['compcountry'] == 'Virgin Islands, British') { echo "selected='selected'"; } ?>>Virgin Islands, British</option> 
											<option value="Virgin Islands, U.S."<?php if($row['compcountry'] == 'Virgin Islands, U.S.') { echo "selected='selected'"; } ?>>Virgin Islands, U.S.</option> 
											<option value="Wallis and Futuna"<?php if($row['compcountry'] == 'Wallis and Futuna') { echo "selected='selected'"; } ?>>Wallis and Futuna</option> 
											<option value="Western Sahara"<?php if($row['compcountry'] == 'Western Sahara') { echo "selected='selected'"; } ?>>Western Sahara</option> 
											<option value="Yemen"<?php if($row['compcountry'] == 'Yemen') { echo "selected='selected'"; } ?>>Yemen</option> 
											<option value="Zambia"<?php if($row['compcountry'] == 'Zambia') { echo "selected='selected'"; } ?>>Zambia</option> 
											<option value="Zimbabwe"<?php if($row['compcountry'] == 'Zimbabwe') { echo "selected='selected'"; } ?>>Zimbabwe</option>
											</select>
									</div>
									<div class="col-lg-8 col-xs-8">
										<label>Imp/Exp Reg. No</label><input type="text" name="compimp" value="<?php echo $row['compimp'];?>">
									</div>
								</div>
								<div class="row">
									<!-- Row 4 -->
									<div class="col-lg-4 col-xs-4">
										<label>Phone no#</label><input type="text" name="compphone" value="<?php echo $row['compphone'];?>">
									</div>
									<div class="col-lg-4 col-xs-4">
										<label>N.T.N No#</label><input type="text" name="compntn" value="<?php echo $row['compntn'];?>">
									</div>
									<div class="col-lg-4 col-xs-4">
										<label>Fax no#</label><input type="text" name="compfax" value="<?php echo $row['compfax'];?>">
									</div>
								</div>
								<div class="row">
									<!-- Row 6 -->
									<div class="col-lg-4 col-xs-4">
										<label>S.Tax No#</label><input type="text" name="compstax" value="<?php echo $row['compstax'];?>">
									</div>
									<div class="col-lg-4 col-xs-4">
										<label>Email</label><input type="text" name="compemail" value="<?php echo $row['compemail'];?>">
									</div>
									<div class="col-lg-4 col-xs-4">
										<label>Contact Person</label><input type="text" name="compcontact" value="<?php echo $row['compcontact'];?>">
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<button class="btn btn-primary pull-right" type="submit" name="updateform">Save</button>

									</div>
								</div>
							<?php
								}
							}
							else {
							?>
					<form action="" name="formadd" class="form-horizontal" method="post">
						<style type="text/css">input { width: 100%; }</style>
						<div class="row">
							<!-- Row 1 -->
							<div class="col-lg-4 col-xs-4">
								<label>Company ID</label><input type="text" name="compid">
							</div>
							<div class="col-lg-4 col-xs-4">
								<label>Company Name</label><input type="text" name="compname">
							</div>
							<div class="col-lg-4 col-xs-4">
								<label>Opening Balance</label><input type="text" name="compbal">
								<input type="radio" name="compbaltype" value="Dr">Dr.
								<input type="radio" name="compbaltype" value="Cr">Cr.
							</div>
						</div>
						<div class="row">
							<!-- Row 2 -->
							<div class="col-lg-4 col-xs-4">
								<label>Date</label><input type="text" name="compdate" id="datepicker" value="<?php echo date('m/d/Y', time()); ?>">
							</div>
							<div class="col-lg-4 col-xs-4">
								<div class="col-lg-7">
								<label>Company Addres</label><input type="text" name="compaddress">
								</div>
							</div>
							<div class="col-lg-4 col-xs-4">
								<label>City</label><input type="text" name="compcity">
							</div>
						</div>
						<div class="row">
							<!-- Row 3 -->
							<div class="col-lg-4 col-xs-4">
								<label>Country</label><select name="compcountry"> 
									<option value="">Select Country</option> 
									<option value="United States">United States</option> 
									<option value="United Kingdom">United Kingdom</option> 
									<option value="Afghanistan">Afghanistan</option> 
									<option value="Albania">Albania</option> 
									<option value="Algeria">Algeria</option> 
									<option value="American Samoa">American Samoa</option> 
									<option value="Andorra">Andorra</option> 
									<option value="Angola">Angola</option> 
									<option value="Anguilla">Anguilla</option> 
									<option value="Antarctica">Antarctica</option> 
									<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
									<option value="Argentina">Argentina</option> 
									<option value="Armenia">Armenia</option> 
									<option value="Aruba">Aruba</option> 
									<option value="Australia">Australia</option> 
									<option value="Austria">Austria</option> 
									<option value="Azerbaijan">Azerbaijan</option> 
									<option value="Bahamas">Bahamas</option> 
									<option value="Bahrain">Bahrain</option> 
									<option value="Bangladesh">Bangladesh</option> 
									<option value="Barbados">Barbados</option> 
									<option value="Belarus">Belarus</option> 
									<option value="Belgium">Belgium</option> 
									<option value="Belize">Belize</option> 
									<option value="Benin">Benin</option> 
									<option value="Bermuda">Bermuda</option> 
									<option value="Bhutan">Bhutan</option> 
									<option value="Bolivia">Bolivia</option> 
									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
									<option value="Botswana">Botswana</option> 
									<option value="Bouvet Island">Bouvet Island</option> 
									<option value="Brazil">Brazil</option> 
									<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
									<option value="Brunei Darussalam">Brunei Darussalam</option> 
									<option value="Bulgaria">Bulgaria</option> 
									<option value="Burkina Faso">Burkina Faso</option> 
									<option value="Burundi">Burundi</option> 
									<option value="Cambodia">Cambodia</option> 
									<option value="Cameroon">Cameroon</option> 
									<option value="Canada">Canada</option> 
									<option value="Cape Verde">Cape Verde</option> 
									<option value="Cayman Islands">Cayman Islands</option> 
									<option value="Central African Republic">Central African Republic</option> 
									<option value="Chad">Chad</option> 
									<option value="Chile">Chile</option> 
									<option value="China">China</option> 
									<option value="Christmas Island">Christmas Island</option> 
									<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
									<option value="Colombia">Colombia</option> 
									<option value="Comoros">Comoros</option> 
									<option value="Congo">Congo</option> 
									<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
									<option value="Cook Islands">Cook Islands</option> 
									<option value="Costa Rica">Costa Rica</option> 
									<option value="Cote D'ivoire">Cote D'ivoire</option> 
									<option value="Croatia">Croatia</option> 
									<option value="Cuba">Cuba</option> 
									<option value="Cyprus">Cyprus</option> 
									<option value="Czech Republic">Czech Republic</option> 
									<option value="Denmark">Denmark</option> 
									<option value="Djibouti">Djibouti</option> 
									<option value="Dominica">Dominica</option> 
									<option value="Dominican Republic">Dominican Republic</option> 
									<option value="Ecuador">Ecuador</option> 
									<option value="Egypt">Egypt</option> 
									<option value="El Salvador">El Salvador</option> 
									<option value="Equatorial Guinea">Equatorial Guinea</option> 
									<option value="Eritrea">Eritrea</option> 
									<option value="Estonia">Estonia</option> 
									<option value="Ethiopia">Ethiopia</option> 
									<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
									<option value="Faroe Islands">Faroe Islands</option> 
									<option value="Fiji">Fiji</option> 
									<option value="Finland">Finland</option> 
									<option value="France">France</option> 
									<option value="French Guiana">French Guiana</option> 
									<option value="French Polynesia">French Polynesia</option> 
									<option value="French Southern Territories">French Southern Territories</option> 
									<option value="Gabon">Gabon</option> 
									<option value="Gambia">Gambia</option> 
									<option value="Georgia">Georgia</option> 
									<option value="Germany">Germany</option> 
									<option value="Ghana">Ghana</option> 
									<option value="Gibraltar">Gibraltar</option> 
									<option value="Greece">Greece</option> 
									<option value="Greenland">Greenland</option> 
									<option value="Grenada">Grenada</option> 
									<option value="Guadeloupe">Guadeloupe</option> 
									<option value="Guam">Guam</option> 
									<option value="Guatemala">Guatemala</option> 
									<option value="Guinea">Guinea</option> 
									<option value="Guinea-bissau">Guinea-bissau</option> 
									<option value="Guyana">Guyana</option> 
									<option value="Haiti">Haiti</option> 
									<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
									<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
									<option value="Honduras">Honduras</option> 
									<option value="Hong Kong">Hong Kong</option> 
									<option value="Hungary">Hungary</option> 
									<option value="Iceland">Iceland</option> 
									<option value="India">India</option> 
									<option value="Indonesia">Indonesia</option> 
									<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
									<option value="Iraq">Iraq</option> 
									<option value="Ireland">Ireland</option> 
									<option value="Israel">Israel</option> 
									<option value="Italy">Italy</option> 
									<option value="Jamaica">Jamaica</option> 
									<option value="Japan">Japan</option> 
									<option value="Jordan">Jordan</option> 
									<option value="Kazakhstan">Kazakhstan</option> 
									<option value="Kenya">Kenya</option> 
									<option value="Kiribati">Kiribati</option> 
									<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
									<option value="Korea, Republic of">Korea, Republic of</option> 
									<option value="Kuwait">Kuwait</option> 
									<option value="Kyrgyzstan">Kyrgyzstan</option> 
									<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
									<option value="Latvia">Latvia</option> 
									<option value="Lebanon">Lebanon</option> 
									<option value="Lesotho">Lesotho</option> 
									<option value="Liberia">Liberia</option> 
									<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
									<option value="Liechtenstein">Liechtenstein</option> 
									<option value="Lithuania">Lithuania</option> 
									<option value="Luxembourg">Luxembourg</option> 
									<option value="Macao">Macao</option> 
									<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
									<option value="Madagascar">Madagascar</option> 
									<option value="Malawi">Malawi</option> 
									<option value="Malaysia">Malaysia</option> 
									<option value="Maldives">Maldives</option> 
									<option value="Mali">Mali</option> 
									<option value="Malta">Malta</option> 
									<option value="Marshall Islands">Marshall Islands</option> 
									<option value="Martinique">Martinique</option> 
									<option value="Mauritania">Mauritania</option> 
									<option value="Mauritius">Mauritius</option> 
									<option value="Mayotte">Mayotte</option> 
									<option value="Mexico">Mexico</option> 
									<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
									<option value="Moldova, Republic of">Moldova, Republic of</option> 
									<option value="Monaco">Monaco</option> 
									<option value="Mongolia">Mongolia</option> 
									<option value="Montserrat">Montserrat</option> 
									<option value="Morocco">Morocco</option> 
									<option value="Mozambique">Mozambique</option> 
									<option value="Myanmar">Myanmar</option> 
									<option value="Namibia">Namibia</option> 
									<option value="Nauru">Nauru</option> 
									<option value="Nepal">Nepal</option> 
									<option value="Netherlands">Netherlands</option> 
									<option value="Netherlands Antilles">Netherlands Antilles</option> 
									<option value="New Caledonia">New Caledonia</option> 
									<option value="New Zealand">New Zealand</option> 
									<option value="Nicaragua">Nicaragua</option> 
									<option value="Niger">Niger</option> 
									<option value="Nigeria">Nigeria</option> 
									<option value="Niue">Niue</option> 
									<option value="Norfolk Island">Norfolk Island</option> 
									<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
									<option value="Norway">Norway</option> 
									<option value="Oman">Oman</option> 
									<option value="Pakistan" selected="selected">Pakistan</option> 
									<option value="Palau">Palau</option> 
									<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
									<option value="Panama">Panama</option> 
									<option value="Papua New Guinea">Papua New Guinea</option> 
									<option value="Paraguay">Paraguay</option> 
									<option value="Peru">Peru</option> 
									<option value="Philippines">Philippines</option> 
									<option value="Pitcairn">Pitcairn</option> 
									<option value="Poland">Poland</option> 
									<option value="Portugal">Portugal</option> 
									<option value="Puerto Rico">Puerto Rico</option> 
									<option value="Qatar">Qatar</option> 
									<option value="Reunion">Reunion</option> 
									<option value="Romania">Romania</option> 
									<option value="Russian Federation">Russian Federation</option> 
									<option value="Rwanda">Rwanda</option> 
									<option value="Saint Helena">Saint Helena</option> 
									<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
									<option value="Saint Lucia">Saint Lucia</option> 
									<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
									<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
									<option value="Samoa">Samoa</option> 
									<option value="San Marino">San Marino</option> 
									<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
									<option value="Saudi Arabia">Saudi Arabia</option> 
									<option value="Senegal">Senegal</option> 
									<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
									<option value="Seychelles">Seychelles</option> 
									<option value="Sierra Leone">Sierra Leone</option> 
									<option value="Singapore">Singapore</option> 
									<option value="Slovakia">Slovakia</option> 
									<option value="Slovenia">Slovenia</option> 
									<option value="Solomon Islands">Solomon Islands</option> 
									<option value="Somalia">Somalia</option> 
									<option value="South Africa">South Africa</option> 
									<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
									<option value="Spain">Spain</option> 
									<option value="Sri Lanka">Sri Lanka</option> 
									<option value="Sudan">Sudan</option> 
									<option value="Suriname">Suriname</option> 
									<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
									<option value="Swaziland">Swaziland</option> 
									<option value="Sweden">Sweden</option> 
									<option value="Switzerland">Switzerland</option> 
									<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
									<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
									<option value="Tajikistan">Tajikistan</option> 
									<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
									<option value="Thailand">Thailand</option> 
									<option value="Timor-leste">Timor-leste</option> 
									<option value="Togo">Togo</option> 
									<option value="Tokelau">Tokelau</option> 
									<option value="Tonga">Tonga</option> 
									<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
									<option value="Tunisia">Tunisia</option> 
									<option value="Turkey">Turkey</option> 
									<option value="Turkmenistan">Turkmenistan</option> 
									<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
									<option value="Tuvalu">Tuvalu</option> 
									<option value="Uganda">Uganda</option> 
									<option value="Ukraine">Ukraine</option> 
									<option value="United Arab Emirates">United Arab Emirates</option> 
									<option value="United Kingdom">United Kingdom</option> 
									<option value="United States">United States</option> 
									<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
									<option value="Uruguay">Uruguay</option> 
									<option value="Uzbekistan">Uzbekistan</option> 
									<option value="Vanuatu">Vanuatu</option> 
									<option value="Venezuela">Venezuela</option> 
									<option value="Viet Nam">Viet Nam</option> 
									<option value="Virgin Islands, British">Virgin Islands, British</option> 
									<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
									<option value="Wallis and Futuna">Wallis and Futuna</option> 
									<option value="Western Sahara">Western Sahara</option> 
									<option value="Yemen">Yemen</option> 
									<option value="Zambia">Zambia</option> 
									<option value="Zimbabwe">Zimbabwe</option>
								</select>
							</div>
							<div class="col-lg-8 col-xs-8">
								<label>Imp/Exp Reg. No</label><input type="text" name="compimp">
							</div>
						</div>
						<div class="row">
							<!-- Row 4 -->
							<div class="col-lg-4 col-xs-4">
								<label>Phone no#</label><input type="text" name="compphone">
							</div>
							<div class="col-lg-4 col-xs-4">
								<label>N.T.N No#</label><input type="text" name="compntn">
							</div>
							<div class="col-lg-4 col-xs-4">
								<label>Fax no#</label><input type="text" name="compfax">
							</div>
						</div>
						<div class="row">
							<!-- Row 6 -->
							<div class="col-lg-4 col-xs-4">
								<label>S.Tax No#</label><input type="text" name="compstax">
							</div>
							<div class="col-lg-4 col-xs-4">
								<label>Email</label><input type="text" name="compemail">
							</div>
							<div class="col-lg-4 col-xs-4">
								<label>Contact Person</label><input type="text" name="compcontact">
							</div>
						</div>
						<div class="row">
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
<div class="yesprint">
	<h2>test</h2>
</div>
<?php
}
 }
 else {
 header('Location: '.$website.'');
 } 
ob_end_flush(); 
include 'footer.php'; ?>