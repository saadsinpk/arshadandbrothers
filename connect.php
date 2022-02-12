<?php
$conn = mysqli_connect("shareddb1e.hosting.stackcp.net","arshad_software","3)c8!IxhC_qJ","arshad_software");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$website = "http://arshadandbrothers.com/software/";

$sql_details = array(
	'user' => 'arshad_software',
	'pass' => '3)c8!IxhC_qJ',
	'db'   => 'arshad_software',
	'host' => 'shareddb1e.hosting.stackcp.net'
);
?> 