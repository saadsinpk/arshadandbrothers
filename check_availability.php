<?php
include 'connect.php';

if(!empty($_POST["billno1"])) {
	$billno1 = $_POST["billno1"];
	$sql = "SELECT * FROM arshaddata WHERE clibillno1='$billno1'";
	$result = $conn->query($sql);
	if ($result->num_rows >= 1) {
		echo "<span class='status-not-available'>Duplicate</span>";
	} else { echo "<span class='status-available'>New</span>"; }
}
?>