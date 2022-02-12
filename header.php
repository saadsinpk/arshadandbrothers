<!DOCTYPE html>
<html>
<head>
    <title>      arshad Brothers    </title>
<?php //    <link href="//fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" /> 	
?>


    <link href="assets/frontend/css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/frontend/css/print.css" media="all" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="assets/frontend/js/shCore.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link href="assets/frontend/css/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/frontend/css/fulloption.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/frontend/css/datatables.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/frontend/css/datepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/frontend/css/timepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/frontend/css/style.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/frontend/css/fancy-style.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/frontend/css/jquery.fancybox-1.3.4.css" media="all" rel="stylesheet" type="text/css" />
    <!-- for mark_leave date design -->
    <link href="assets/frontend/css/jquery-ui.min.css" media="all" rel="stylesheet" type="text/css" />

    <!-- *********************************************************** -->

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <script src="assets/frontend/js/jquery-1.10.2.min.js" type="text/javascript">  </script>
     <!-- for mark_leave date  -->
  <script src="assets/frontend/js/jquery-ui.min.js" type="text/javascript"></script>
  <script src="assets/frontend/js/jquery.fancybox-1.3.4.js" type="text/javascript"></script>
  <script src="assets/frontend/js/web.js" type="text/javascript"></script>
    <script src="assets/frontend/js/num2word.js" type="text/javascript">  </script>
  <!-- *************************************************************************** -->

	<style type="text/css" class="init">
		.statuson td, .statusoff td {
		}
		.sorting_1 {
			color: #000 !important;
		}
		.statuson td:nth-child(14) {

			box-shadow: inset -7px 7px 22px 0px rgba(50, 50, 50, 0.4);
			background : #A6F5AA !important;
		    font-size: 15px;
		    clear: both;
		    font-weight: bold;
		    text-align: center;
		
		}
			
		.statusoff td:nth-child(14) {
			
			box-shadow: inset -7px 7px 22px 0px rgba(50, 50, 50, 0.4);
			background : #EA907D !important;
		    font-size: 15px;
		    clear: both;
		    font-weight: bold;
		    text-align: center;
			
		}
		.selected {
		}
		.even {
			background: #E6E6E6;
		}
		.selected td:nth-child(14) {
			background : #000 !important;
			color : #fff;
		    font-size: 15px;
		    font-weight: bold;
		    text-align: center;
			box-shadow: inset -5px 5px 10px 2px rgba(252, 252, 252, 0.62);
		}
	</style>

<style>

/* Dropdown Button */
.dropbtn {
    background-color: #007aff;
    color: white;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 90px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    
    
 
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #09a0ca;
}

</style>




  </head>
  <body class="default">
<div class="se-pre-con"></div>

    <div class="modal-shiftfix">
      <!-- Navigation -->
      <div class="navbar navbar-fixed-top scroll-hide">
        <div class="container-fluid top-bar">
          <div class="pull-right">
            <ul class="nav navbar-nav pull-right">	

            </ul>
          </div>
          <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          
          <a href="index.php?users=home"><img alt="arshad Brothers" src="assets/frontend/images/logo.jpg" style="max-width: 150px;" /></a>

          </div>
        <div class="container-fluid main-nav clearfix">
          <div class="nav-collapse">
          <ul class="nav">
              <li>
                <a class="<?php if (basename($_SERVER['PHP_SELF'])=='formlist.php' || basename($_SERVER['PHP_SELF'])=='form.php') { 
                  echo 'current';
                 } ?>" href="index.php?users=home">
                <span aria-hidden="true" class="fa fa-home fa-fw"></span>Form</a>
              </li>
            <li>
                <a class="<?php if (basename($_SERVER['PHP_SELF']) =='analysis.php' || basename($_SERVER['PHP_SELF'])=='analysisform.php') {
                  echo 'current';
                 } ?>" href="analysis.php?selectmonth=<? echo date('m'); ?>&selectyear=<? echo date('Y'); ?>&Submitsearch=Submit">
                <span aria-hidden="true" class="fa fa-usd"></span>analysis</a>
            </li>
            <li>
                <a class="<?php if (basename($_SERVER['PHP_SELF']) =='company.php' || basename($_SERVER['PHP_SELF'])=='companyform.php') {
                  echo 'current';
                 } ?>" href="company.php">
                <span aria-hidden="true" class="fa fa-usd"></span>company</a>
            </li>
            <li>
                <a class="<?php if (basename($_SERVER['PHP_SELF'])=='option.php') {
                  echo 'current';
                 } ?>" href="option.php">
                <span aria-hidden="true" class="fa fa-option"></span>option</a>
            </li>
				<li>
					<a class="<?php if (basename($_SERVER['PHP_SELF'])=='user.php' || basename($_SERVER['PHP_SELF'])=='adduser.php') {
                  echo 'current';
                 } ?>" href="user.php">
                <span aria-hidden="true" class="fa fa-user-o"></span>User</a>
				</li>



            <li>
                <a class="" href="logout.php">
                <span aria-hidden="true" class="fa fa-sign-out"></span>Logout</a>
            </li>



            </ul>
          </div>
        </div>
      </div>
      </div><style>
.number1 {
    font-size: 1.5em;
    font-weight: 100;
    color: #007aff;
    line-height: 1.4em;
    padding-top: 8px;
    letter-spacing: -0.06em;
}
.number1 a {

    color: #999;

}
.widget-container .heading {
   font-size: 25px;
   color: #ff4c00;

}

.text_new{
    font-weight: 600;

}
</style>