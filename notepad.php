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
						
											</div>

			<div class="widget-container fluid-height">
				<div class="widget-content padded">
				 <div class="row">
		<div class="col-lg-12">


		</div>
		</div>
						  <div class="heading tabs">
							<i class="icon-sitemap"></i>	
							<ul class="nav nav-tabs pull-left" data-tabs="tabs">
							  <li class="active">
								<a  href="#"><i class="fa fa-database"></i><span>Notepad Months</span></a>
							  </li>

							 </ul>

						  </div>

								<div class="row">
								  <div class="col-lg-12">
									<div class="widget-container fluid-height clearfix">

									  <div class="widget-content padded clearfix">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
	
<p>&nbsp;</p>
		<span class=""><input type="button" class="btn btn-primary" value="January" href="january.php" onclick="window.open('january.php', 'newwindow');"></span>
		<span class=""><input type="button" class="btn btn-primary" value="February" href="february.php" onclick="window.open('february.php', 'newwindow');"></span>
		<span class=""><input type="button" class="btn btn-primary" value="March" href="march.php" onclick="window.open('march.php', 'newwindow');"></span>
		<span class=""><input type="button" class="btn btn-primary" value="April" href="april.php" onclick="window.open('april.php', 'newwindow');"></span>
		<span class=""><input type="button" class="btn btn-primary" value="May" href="may.php" onclick="window.open('may.php', 'newwindow');"></span>
		<span class=""><input type="button" class="btn btn-primary" value="June" href="june.php" onclick="window.open('june.php', 'newwindow');"></span>
		<span class=""><input type="button" class="btn btn-primary" value="July" href="july.php" onclick="window.open('july.php', 'newwindow');"></span>
		<span class=""><input type="button" class="btn btn-primary" value="August" href="august.php" onclick="window.open('august.php', 'newwindow');"></span>
		<span class=""><input type="button" class="btn btn-primary" value="September" href="september.php" onclick="window.open('september.php', 'newwindow');"></span>
		<span class=""><input type="button" class="btn btn-primary" value="October" href="october.php" onclick="window.open('october.php', 'newwindow');"></span>
		<span class=""><input type="button" class="btn btn-primary" value="November" href="november.php" onclick="window.open('november.php', 'newwindow');"></span>
		<span class=""><input type="button" class="btn btn-primary" value="December" href="december.php" onclick="window.open('december.php', 'newwindow');"></span>
		
		
		
	
	




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