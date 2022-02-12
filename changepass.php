<!DOCTYPE html>
<html>
<head>
    <title>
      OTTI    </title>
    <link href="//fonts.googleapis.com/css?family=Lato:100,300,400,700" media="all" rel="stylesheet" type="text/css" />


    <link href="assets/frontend/css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="free/1.0.0/icon-font.min.css">
    <link href="assets/frontend/css/jquery.fancybox.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/frontend/css/fullcalendar.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/frontend/css/datatables.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/frontend/css/datepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/frontend/css/timepicker.css" media="all" rel="stylesheet" type="text/css" />
    <link href="assets/frontend/css/style.css" media="all" rel="stylesheet" type="text/css" />
    <!-- for mark_leave date design -->
    <link href="assets/frontend/css/jquery-ui.min.css" media="all" rel="stylesheet" type="text/css" />
    <!-- *********************************************************** -->

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <script src="jquery-1.10.2.min.js" type="text/javascript">  </script>
     <!-- for mark_leave date  -->
  <script src="assets/frontend/js/jquery-ui.min.js" type="text/javascript"></script>
  <!-- *************************************************************************** -->

  <!-- ------------- Loader ------------------- -->
  <style>
	.no-js #loader { display: none;  }
	.js #loader { display: block; position: absolute; left: 100px; top: 0; }
	.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(assets/frontend/loader/reload.gif) center no-repeat  rgba(0,0,0,0.5);
	}
  </style>

  </head>
  <body class="default">
<!-- <a href="http://iwcnetwork.com">
<img style="position:fixed; bottom:2%; right:2%;z-index:100000;width:100px;" src="http://www.iwcnetwork.com/image/logonew.png">
</a> -->
<div class="se-pre-con"></div>

    <div class="modal-shiftfix">
      <!-- Navigation -->
      <div class="navbar navbar-fixed-top scroll-hide">
        <div class="container-fluid top-bar">
          <div class="pull-right">
            <ul class="nav navbar-nav pull-right">

 				<!-- <li class="dropdown notifications hidden-xs">
                	<a class="dropdown-toggle" data-toggle="dropdown" href="#">
               			MENU
                	</a>
                	<ul class="dropdown-menu">
                 		 <li><a href="#">
                    		MENU 1
                   			</a>
                 		 </li>
                	</ul>
              	</li> -->

              <li class="dropdown notifications hidden-xs ">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                	<i class="lnr lnr-plus-circle" style="font-size: 20pt;"></i>
                </a>

                <ul class="dropdown-menu" style="width:600px;">

              <div class="col-md-12">
                <br>

                <div class="col-md-4">
                   Customers
                   <ul >
                                      <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_selling_estimate" style="color: #333;">Estimate </a>
                  </li>
                                    <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_selling_invoice" style="color: #333;">Invoice </a>
                  </li>
                                    <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_selling_can" style="color: #333;">Customer adjustment note </a>
                  </li>
                                    </ul>
                </div>
                <div class="col-md-4">
                Suppliers
                 <ul>
                                  <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_buying_bill" style="color: #333;">Bill</a>
                 </li>
                                  <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_buying_san" style="color: #333;">Supplier adjustment note</a>
                  </li>
                                    </ul>
                 </div>
                <div class="col-md-4">
                 Others
                 <ul>
                                   <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_project" style="color: #333;">Project</a>
                  </li>
                                  <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_item" style="color: #333;">Item</a>
                  </li>
                                   <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_journal" style="color: #333;">Journal</a>
                  </li>
                                     <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_contact" style="color: #333;">Contact</a>
                  </li>
                                     <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_account" style="color: #333;">New Account</a>
                  </li>
                                     <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_tax" style="color: #333;">Tax</a>
                  </li>
                                    </ul>
                </div>

                </div>
                 <!--  <li>
                  	<a style="color:red;">Create A New </a>
                  </li>
                                     <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_selling_estimate">Estimate </a>
                  </li>
                                    <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_selling_invoice">Invoice </a>
                  </li>
                                    <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_selling_can">Customer adjustment note </a>
                  </li>
                                   <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_buying_bill">Bill</a>
                  </li>
                                  <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_buying_san">Supplier adjustment note</a>
                  </li>
                                  <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_project">Project</a>
                  </li>
                                    <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_item">Item</a>
                  </li>
                                   <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_selling_receive_money">Receive money</a>
                  </li>
                <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_buying_mk">Make payment</a>
                  </li>
                 <li>
                  	<a href="#">Expense claim</a>
                  </li>
                  <li>
                  	<a href="#">Timesheet</a>
                  </li>
                   <li>
                  	<a href="#">Transfer money</a>
                  </li>
                   <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=iras_gst_codes">IRAS GST Code</a>
                  </li>
                                     <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_journal">Journal</a>
                  </li>
                                     <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_contact">Contact</a>
                  </li>
                                     <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=add_account">New Account</a>
                  </li>
                                     <li>
                  	<a class="" href="http://accounting.appinsg.com/index.php?user=tax_setting_add_tax">Tax</a>
                  </li>-->
                  

                </ul>

              </li>
           <!-- <li class="dropdown messages hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="lnr lnr-envelope"></span>
                </a>
              </li>

              <li class="dropdown messages hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="lnr lnr-users"></span>
                </a>
              </li> -->

              <li class="dropdown messages hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="lnr lnr-cog"></span>
                </a>
                	<ul class="dropdown-menu">
	                  <li>
	                  	<a href="loginChartofaccounts.html"> Chart of accounts</a>
	                  </li>
	                  	                  <li>
	                  	<a href="http://accounting.appinsg.com/index.php?user=users"> User and roles</a>
	                  </li>
	                  	                  <li>
	                  	<a href="http://accounting.appinsg.com/index.php?user=sale_purchase_prefrence"> General settings</a>
	                  </li>
	                  <li>
	                  	<a href="http://accounting.appinsg.com/index.php?user=taxes"> Tax settings</a>
	                  </li>
	                   <li>
	                  	<a href="http://accounting.appinsg.com/index.php?user=linked_accounts">Linked Accounts</a>
	                 </li>
	                    <li>
	                  	<a href="http://accounting.appinsg.com/index.php?user=activity_log">Activity Logs</a>
	                 </li>

	                 <!--  <li>
	                  	<a href="#"> Payroll settings</a>
	                  </li>
	                  <li style="background:#e5f7f0;">
	                  	<a href="#"> Change book</a>
	                  </li>
	                  <li style="background:#e5f7f0;">
	                  	<a href="#"> Log out</a>
	                  </li>-->
                  </ul>
              </li>

            <li class="dropdown user hidden-xs">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                             <img src="https://placeholdit.imgix.net/~text?txtsize=19&bg=efefef&txtclr=aaaaaa%26text%3Dno%2Bimage&txt=no+image&w=200&h=150" width="34" height="34"/>System<b class="caret"></b>
                   </a>
                <ul class="dropdown-menu">
                <li><a href="http://accounting.appinsg.com/index.php?user=profile">
             		<i class="lnr lnr-mustache"></i>Profile</a>
                  </li>
                                    <li><a href="http://accounting.appinsg.com/index.php?user=site_setting">
             			<i class="lnr lnr-cog"></i>Site setting </a>
                  </li>
              <li><a href="http://accounting.appinsg.com/index.php?user=changepassword">
               	<i class="lnr lnr-lock"></i>Change Password</a>
              </li>

              <li><a href="http://accounting.appinsg.com/index.php?user=logout">
                    <i class="lnr lnr-power-switch"></i>Logout</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <button class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a  class="logo" href="http://accounting.appinsg.com/index.php?user=home">
       OTTI</a>
        </div>
        <div class="container-fluid main-nav clearfix">
          <div class="nav-collapse">
          <ul class="nav">

              <li>
                <a class="" href="http://accounting.appinsg.com/index.php?user=home">
                <span aria-hidden="true" class="lnr lnr-home"></span>Dashboard</a>
              </li>

			 <li class="dropdown">
			 	<a data-toggle="dropdown" href="#" class="">
                <span aria-hidden="true" class="lnr lnr-store"></span>Accounts<b class="caret"></b></a>
                <ul class="dropdown-menu">
             	  <li>
                    <a class="" href="http://accounting.appinsg.com/index.php?user=banking_bank_account">Banking</a>
                  </li>
                  <li>
                    <a class="" href="http://accounting.appinsg.com/index.php?user=selling_estimates">Selling</a>
                  </li>
                  <li>
                    <a class="" href="http://accounting.appinsg.com/index.php?user=buying_bills">Buying</a>
                  </li>
                  <li>
                    <a class="" href="http://accounting.appinsg.com/index.php?user=project">Projects</a>
                  </li>
                  <li>
                    <a class="" href="http://accounting.appinsg.com/index.php?user=item">Items</a>
                  </li>

                </ul>
              </li>




            <li>
                <a class="" href="http://accounting.appinsg.com/index.php?user=reports">
                <span aria-hidden="true" class="lnr lnr-printer"></span>Reporting</a>
            </li>




     <li>
                <a class="" href="http://accounting.appinsg.com/index.php?user=journal">
                <span aria-hidden="true" class="lnr lnr-magnifier"></span>Journals</a>
            </li>
            <li>
                <a class="" href="http://accounting.appinsg.com/index.php?user=contacts&contact_type=customers">
                <span aria-hidden="true" class="lnr lnr-phone"></span>Contacts</a>
            </li>
            <li class="hidden-lg hidden-md hidden-sm">
                <a  href="http://accounting.appinsg.com/index.php?user=logout">
                <span aria-hidden="true" class="lnr lnr-power-switch"></span>Logout</a>
            </li>



            </ul>
          </div>
        </div>
      </div>
      </div><div class="container-fluid main-content">
<div class="page-title">

        <h1>Change Password</h1>
    </div>
<div class="row">
 <div class="col-md-12">
 <div class="widget-container fluid-height clearfix">
 <div class="widget-content padded">
 <form method="post" class="form-horizontal" action="" enctype="multipart/form-data">
 <div class="row">
 <div class="col-md-12">
 <div class="form-group">
 <label class="control-label col-md-3">Old Password</label>
            <div class="col-md-6">
              <input class="form-control"  name="oldpassword" type="password" value="">
            </div>
          </div>
 <div class="form-group">
 <label class="control-label col-md-3">New Password</label>
            <div class="col-md-6">
              <input class="form-control"  name="newpassword" type="password" value="">
            </div>
          </div>
 <div class="form-group">
 <label class="control-label col-md-3">Confirm Password</label>
            <div class="col-md-6">
              <input class="form-control"  name="confirmpassword" type="password" value="">
            </div>
          </div>
  <div class="form-group">
   <div class="col-md-12">  
   <div class="col-md-3"></div>  
   <div class="col-md-6">             
    <button class="btn btn-lg btn-block btn-success" type="submit" name="submit_changepassword"><i class="lnr lnr-chevron-up-circle"></i> Update</button>  
    </div>       
   <div class="col-md-3"></div>
   </div>
 </div>
 </div></div>
 </form>
</div>
</div>
</div>
</div></div>
 


<!-- this is for add bank account transfer money
<a title="Add New Contact" class="text-danger " data-toggle="modal" href="#add_contact_modal"><i class="lnr lnr-plus-circle"></i>Add New Contact</a>
-->

<div class="modal fade" id="add_contact_modal" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" class="close" data-dismiss="modal" type="button">?</button>
                        <h4 class="modal-title">
                          Add Contact
                        </h4>
                      </div>
                      <div class="modal-body">
                      <div id="after_post_message_contact"></div>
     <form id="add_contact_form"  action="http://accounting.appinsg.com/index.php?user=ajax" method="post" class="form-horizontal">
      <input type="hidden" name="add_contact_form_submit" value="add_contact_form_submit">
<button class="btn btn-primary pull-right" type="submit" name="submit_contact">Submit </button>
                        <div class="form-group">
                           <label class="control-label col-md-3">Type of contact<font color="red">*</font></label>
                           <div class="col-md-7">
                              <label class="checkbox-inline" >
                              <input checked="" type="checkbox" name="contact_type[]" value="customer">
                              <span>Customer</span>
                              </label>
                              <label class="checkbox-inline">
                              <input id="supplier_fields" type="checkbox" name="contact_type[]" value="supplier"><span>Supplier</span>
                              </label>
                        <!--       <label class="checkbox-inline" id="label_super_fund_id">
                              <input id="super_fund_id" type="checkbox" name="contact_type[]" value="super fund"><span>Super Fund</span></label> -->
                       </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">This contact is</label>
                           <div class="col-md-7">
                              <label class="radio-inline">
                              <input checked=""  type="radio" name="contact_is" value="business" id="business_id--">
                              <span> A business</span>
                              </label>
                              <label class="radio-inline">
                              <input  type="radio" name="contact_is" value="individual" id="individual_id--">
                              <span> An individual</span>
                              </label>
                           </div>
                        </div>


                        <div class="form-group" id="business_name_id">
                           <label class="control-label col-md-3">First name<font color="red">*</font></label>
                           <div class="col-md-7">
                              <input class="form-control" placeholder="" type="text" name="business_name" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">Last name<font color="red">*</font></label>
                           <div class="col-md-7">
                              <input class="form-control" placeholder="" type="text" name="display_name" value="">
                           </div>
                        </div>
                          <div class="form-group" >
                           <label class="control-label col-md-3">Company Name</label>
                           <div class="col-md-7">
                              <input class="form-control" placeholder="" type="text" name="company_name" value="">
                           </div>
                        </div>
                        <div class="form-group" id="branch_id">
                           <label class="control-label col-md-3">Branch</label>
                           <div class="col-md-7">
                              <input class="form-control" placeholder="" type="text" name="branch" value="">
                           </div>
                        </div>



                        <div class="form-group">
                           <label class="control-label col-md-3">Phone</label>
                           <div class="col-md-2">
                              <input class="form-control" placeholder="" type="text" name="phone_pre_code">
                           </div>
                           <div class="col-md-5">
                              <input class="form-control" placeholder="" type="text" name="phone_number">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">Mobile</label>
                           <div class="col-md-2">
                              <input class="form-control" placeholder="" type="text" name="mobile_pre_code">
                           </div>
                           <div class="col-md-5">
                              <input class="form-control" placeholder="" type="text" name="mobile_number">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">Fax</label>
                           <div class="col-md-2">
                              <input class="form-control" placeholder="" type="text" name="fax_pre_code">
                           </div>
                           <div class="col-md-5">
                              <input class="form-control" placeholder="" type="text" name="fax_number">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">Email<font color="red">*</font></label>
                           <div class="col-md-7">
                              <input class="form-control" placeholder="name@address.com" type="text" name="email">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">Website</label>
                           <div class="col-md-7">
                              <input class="form-control" placeholder="www.name.com" type="text" name="website">
                           </div>
                        </div>
                         <div class="form-group">
                           <label class="control-label col-md-3">Office number</label>
                           <div class="col-md-7">
                              <input class="form-control" placeholder="" type="text" name="office_number">
                           </div>
                        </div>
                         <div class="form-group">
                           <label class="control-label col-md-3">HP number</label>
                           <div class="col-md-7">
                              <input class="form-control" placeholder="" type="text" name="hp_number">
                           </div>
                        </div>

               <br>

                        <div class="form-group">
                           <label class="control-label col-md-3"></label>
                           <div class="col-md-7">
                              <label><strong>POSTAL ADDRESS / REGISTERED ADDRESS</strong></label>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">Address is</label>
                           <div class="col-md-7">
                              <label class="radio-inline">
                              <input checked=""  name="postal_address_is" type="radio" value="national">
                              <span> National</span>
                              </label>
                              <label class="radio-inline">
                              <input name="postal_address_is" type="radio" value="international">
                              <span>International</span>
                              </label>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">Postal address</label>
                           <div class="col-md-7">
                              <textarea class="form-control" name="postal_address"></textarea>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">Town</label>
                           <div class="col-md-7">
                              <input class="form-control" placeholder="" type="text" name="postal_address_town">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">Suburb</label>
                           <div class="col-md-7">
                              <input class="form-control" placeholder="" type="text" name="postal_address_suburb">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">State</label>
                           <div class="col-md-7">
                                  <input class="form-control" placeholder="" type="text" name="postal_address_state">


                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-3">Postcode</label>
                           <div class="col-md-7">
                              <input class="form-control" placeholder="Text" type="text" name="postal_address_postcode">

                           </div>
                        </div>

            </form>
                      </div>

                    </div>
                  </div>
                </div>





<!-- this is for add item
<a title="Add New Item" class="text-danger " data-toggle="modal" href="#add_item_modal"><i class="lnr lnr-plus-circle"></i>Add New Item</a>
-->

<div class="modal fade" id="add_item_modal" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" class="close" data-dismiss="modal" type="button">?</button>
                        <h4 class="modal-title">
                          Add Items
                        </h4>
                      </div>
                      <div class="modal-body">
                      <div id="after_post_message_item"></div>

<form id="add_item_form" action="http://accounting.appinsg.com/index.php?user=ajax" class="form-horizontal" method="post">
<input type="hidden" name="add_item_form_submit" value="add_item_form_submit">
     <input type="hidden" name="item_to" value="both">
     <input type="hidden" name="item_status" value="active">
    <h3>Add item  <button class="btn btn-primary pull-right" type="submit" name="submit_item">Submit </button> </h3>
                <div class="form-group">
                                 <label class="control-label col-md-4">Name<font color="red">*</font></label>
                                 <div class="col-md-7">
                                    <input class="form-control" name="item_name" type="text" >
                                 </div>
                              </div>

                        <div class="form-group">
                           <label class="control-label col-md-4">Type<font color="red">*</font></label>
                           <div class="col-md-7">
                              <select class="form-control" name="item_type" >
                                 <option value="Product">Product</option>
                                 <option value="Service">Service</option>
                              </select>
                           </div>
                        </div>
 <div class="row">

                           <div class="col-lg-12">



					            <div class="form-group">
					               <label class="control-label col-md-4"></label>
                                    <div class="col-md-7">
                                           <label><strong>IT WILL BE SOLD FOR</strong></label>
                                        </div>
                                      </div>
					         <div class="form-group">
                                 <label class="control-label col-md-4" id="sell_net">Price per unit (net)</label>
                                 <label class="control-label col-md-4" style="display:none;" id="sell_grs">Price per unit (gross)</label>
                                 <div class="col-md-7">
                                    <input class="form-control" name="sell_item_price" type="text" id="sell_price">
                                 </div>
                              </div>
                               <div class="form-group">
					            <label class="control-label col-md-4">Income Account for tracking Sales<font color="red">*</font></label>
					            <div class="col-md-7">
					              <select class="form-control" name="sell_item_account" >
					              <option value="">Select Account</option>
							 															<option value="1">Income</option>
																									<option value="2">Consulting Revenue</option>
																									<option value="4">Other Fees and Charges </option>
																									<option value="22">Sales</option>
																									<option value="25">Other Income</option>
																									<option value="39">Bank - CDS</option>
																									<option value="42">Mandiri</option>
																									<option value="46">RRIY</option>
																									<option value="49">iiiiiii</option>
																									<option value="50">Mobile Sale</option>
																              </select>
					            </div>
					        </div>
                           <div class="form-group">
                                 <label class="control-label col-md-4">Tax code</label>
                                 <div class="col-md-7">
                                     <select class="form-control" name="sell_item_tax_code">
                                      <option value="">Select Account</option>
                                  																<option value="2">DS - Deemed supplies</option>
																									<option value="3">E33 - Reg. 33 exempt supplies</option>
																									<option value="6">ES3 - Reg. 33 exempt supplies</option>
																									<option value="7">ESN - Non-Reg. 33 exempt supplies</option>
																									<option value="14">FRE - GST Free </option>
																									<option value="15">GST - Goods & Services Tax</option>
																									<option value="20">N-T sale - Non-Taxable Sales Tax
</option>
																									<option value="23">OS -  Supplies (Out-of-scope)</option>
																									<option value="25">SR - Standard-rated supplies(GST7%)</option>
																									<option value="28">ZR - Zero-rated supplies</option>
																									<option value="29">maam - maam returns</option>
																									<option value="30">maam - maam returns</option>
																									<option value="31">BTW - Dutch VAT</option>
											                                     </select>
                                 </div>
                              </div>

                           		<br><br><br>

	                           	<div class="form-group">
						               <label class="control-label col-md-4"></label>
	                                    <div class="col-md-7">
	                                           <label><strong>IT WILL BE BUY FOR</strong></label>
	                                        </div>
	                                      </div>
						         <div class="form-group">
	                                 <label class="control-label col-md-4" id="buy_net">Price per unit (net)</label>
	                                 <label class="control-label col-md-4" style="display:none;" id="buy_grs">Price per unit (gross)</label>
	                                 <div class="col-md-7">
	                                    <input class="form-control" name="buy_item_price" type="text" id="buy_price">
	                                 </div>
	                              </div>
	                               <div class="form-group">
						            <label class="control-label col-md-4">Cost of Sales Account<font color="red">*</font></label>
						            <div class="col-md-7">
						              <select class="form-control" name="buy_item_account">
						           	   <option value="">Select Account</option>
							 															<option value="7">Meals</option>
																									<option value="10">Accounting Fees</option>
																									<option value="32">tea expence</option>
																									<option value="51">exp</option>
																	              </select>/
						            </div>
						        </div>
	                           <div class="form-group">
	                                 <label class="control-label col-md-4">Tax code</label>
	                                 <div class="col-md-7">
	                                     <select class="form-control" name="buy_item_tax_code">
	                                      <option value="">Select Account</option>
	                                     															<option value="1">BL - Not claimable GST (Reg.26/27) - Edit</option>
																									<option value="4">EN3 - Non-Reg. 33 exempt supplies</option>
																									<option value="5">EP - Purchases exempted from GST</option>
																									<option value="16">IGD  - Import under deferment scheme
</option>
																									<option value="17">IM - Imports goods with GST 7%</option>
																									<option value="19">ME - Imports under special scheme</option>
																									<option value="21">NR - Non GST-registered supplier
</option>
																									<option value="22">OP - Purchases (Out-of-scope) </option>
																									<option value="24">RE - GST not direct attributable</option>
																									<option value="26">TX - Purchases with GST 7%(Standard-rated purchase)</option>
																									<option value="27">ZP - Purchases with no GST incurred</option>
																									<option value="32">GST - mn mn mn</option>
												                                       </select>
	                                 </div>
	                              </div>


                        </div>
                        </div>


                     </form>
                      </div>

                    </div>
                  </div>
                </div>







<!-- this is for add Project

<a title="Add New Project" class="text-danger " data-toggle="modal" href="#add_project"><i class="lnr lnr-plus-circle"></i>Add New Project</a>


-->
<div class="modal fade" id="add_project" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button aria-hidden="true" class="close" data-dismiss="modal" type="button">?</button>
                        <h4 class="modal-title">
                        Add Project
                        </h4>
                        <div id="after_post_message_project"></div>

                      </div>
                      <div class="modal-body">
         <form id="add_project_form"  action="http://accounting.appinsg.com/index.php?user=ajax" method="post" class="form-horizontal">
                <input type="hidden" name="add_project_form_submit" value="add_project_form_submit">
                 <div class="row">
               <div class="col-lg-12">
               <h3>Add project &nbsp;&nbsp;&nbsp;<span class="label label-info">Status : Active</span></h3>
      <div class="form-group">
                              <label>Project name<font color="red">*</font></label>
                            <input class="form-control" placeholder="" type="text" name="project_name" >
                            </div>
                            	<div class="form-group">
                              <label>Start date</label>
                             <div class="input-group date datepicker col-md-12" data-date-autoclose="true" data-date-format="dd-mm-yyyy">
                                       	 <input class="form-control" type="text" name="start_date" value="02-02-2017"><span class="input-group-addon"><i class="lnr lnr-calendar-full "></i></span>

                                      </div>
                            </div>
                              <div class="form-group">
                              <label>Status</label>
                             <select class="form-control" name="visibility_status">
                                 <option value="active">Active</option>
                                 <option value="inactive">Inactive</option>
                              </select>
                            </div>
                             <div class="form-group">
                              <label>End date</label>
                             <div class="input-group date datepicker col-md-12" data-date-autoclose="true" data-date-format="dd-mm-yyyy">
                                       	 <input class="form-control" type="text" name="end_date"><span class="input-group-addon"><i class="lnr lnr-calendar-full "></i></span>

                                      </div>
                            </div>
                            <div class="form-group">
                              <label>Description</label>
                            <input class="form-control" placeholder="" type="text" name="description">
                            </div>



                      <div class="row">
             <div class="col-lg-12">
                <div class="widget-container fluid-height">
                  <div class="heading tabs">

                    <ul class="nav nav-tabs pull-left" data-tabs="tabs" id="tabs">
                      <li class="active">
                        <a data-toggle="tab" href="#tab1"><i class="fa fa-comments"></i><span>Customers</span></a>
                      </li>
                      <li>
                        <a data-toggle="tab" href="#tab2"><i class="fa fa-user"></i><span>Suppliers</span></a>
                      </li>
                    <!--   <li>
                        <a data-toggle="tab" href="#tab3"><i class="fa fa-paper-clip"></i><span>Items</span></a>
                      </li> -->
                    </ul>
                  </div>
                  <div class="tab-content padded" id="my-tab-content">
                    <div class="tab-pane active" id="tab1">
                       <p>
                      Assigning customers to a project allows the costs of the project to be shared between them. <br>
                      You do not have to assign customers to a project.
                      </p>
             <div class="row">
<div class="form-group">
            <label class="control-label col-md-4">Multi-Select</label>
            <div class="col-md-8">
              <select class="form-control" multiple="" name="customer">
                                    <option value="1">Alice Booth</option>
                                        <option value="3">Anna Brandon</option>
                                        <option value="4">james melbourne</option>
                                        <option value="5">Alice McCarty</option>
                                        <option value="6">Rini Rani</option>
                                        <option value="7">ahmad ahmad</option>
                                        <option value="8">Webcream Abdugamitov</option>
                                        <option value="10">dsdf dsfds</option>
                                        <option value="11">Ahmed  fff</option>
                                        <option value="12">kha kjhkjh</option>
                          </select>
            </div>
          </div>
</div>
                    </div>
                    <div class="tab-pane" id="tab2">
                         <p>
                    Assigning suppliers to a project allows you to track suppliers in the project.<br>
You do not have to assign suppliers to a project.
                      </p>
                                         <div class="row">
<div class="form-group">
            <label class="control-label col-md-4">Multi-Select</label>
            <div class="col-md-8">
              <select class="form-control" multiple="" name="supplier">
                                     <option value="3">Anna Brandon</option>
                                </select>
            </div>
          </div>
</div>
                    </div>
                 <!--    <div class="tab-pane" id="tab3">
                     <p>
                   Assigning items to a project means they will appear at the top of the item list when entering transactions.<br>
It also allows you to customise the sale rate for this particular project.
                      </p>
                      <div class="row">


			    <div class="row">

<div class="form-group">
            <label class="control-label col-md-4">Multi-Select</label>
            <div class="col-md-8">
              <select class="form-control" multiple="" name="items[]">
                                    <option value="2">Wireless Headphones--(Product)</option>
                                        <option value="3">Shirt--(Product)</option>
                                        <option value="4">lumber--(Product)</option>
                                        <option value="5">Bag  Canas Washed--(Product)</option>
                                        <option value="6">milk--(Product)</option>
                                        <option value="7">???? ???????--(Product)</option>
                                        <option value="8">A--(Product)</option>
                                        <option value="9">HP 403a Toner Cartridge--(Product)</option>
                                        <option value="12">JM7--(Product)</option>
                                        <option value="13">Sex Toy--(Product)</option>
                                        <option value="14">rania--(Service)</option>
                                        <option value="15">rania 1 --(Service)</option>
                                        <option value="16">reyyey--(Product)</option>
                                        <option value="17">Adddddd--(Service)</option>
                                </select>
            </div>
          </div>
    </div>


</div>
                    </div> -->
                  </div>
                </div>
                 <button class="btn btn-primary btn-block" type="submit" name="add_project_submit"> Submit </button>
              </div>
            </div>


             </div>
           </div>
            </form>
                      </div>

                    </div>
                  </div>
                </div>

<!-- this is for add Bank Account
<a title="Add Bank Account" class="text-danger " data-toggle="modal" href="#add_bank_account"><i class="lnr lnr-plus-circle"></i>Add New Bank Account</a>-->
<div class="modal fade" id="add_bank_account" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog" >
                    <div class="modal-content" >
                      <div class="modal-header">
                        <button aria-hidden="true" class="close" data-dismiss="modal" type="button">?</button>
                        <h4 class="modal-title">
                        Add Bank Account
                        </h4>
                      </div>
                      <div class="modal-body">
                      <div id="after_post_message_bank"></div>
                <form id="add_bank_account_form"  action="http://accounting.appinsg.com/index.php?user=ajax" method="post" class="form-horizontal">
                <input type="hidden" name="add_bank_account_form_submit" value="add_bank_account_form_submit">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="form-group">
                           <label class="control-label col-md-4">Account display name <font color="red">*</font></label>
                        <div class="col-md-8">
                              <input class="form-control" placeholder="" type="text" name="account_name" value="">
                              <span>The account display name must be unique within this book</span>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="control-label col-md-4">Account type</label>
                           <div class="col-md-8">
                              <label class="radio-inline">
                              <input checked="" type="radio" name="account_nature" id="bank_account" value="assets">
                              <span> Bank account (asset)</span>
                              </label>
                              <label class="radio-inline">
                              <input  type="radio" name="account_nature" value="liabilities"  id="credit_account" >
                              <span>Credit account (liability)</span>
                              </label>
                           </div>
                        </div>

                          <div class="form-group">
                                    <label class="control-label col-md-4">Date account opened
                                    </label>
                                    <div class="col-md-8">
                                       <div class="input-group date datepicker col-md-12" data-date-autoclose="true" data-date-format="dd-mm-yyyy">
                                          <input class="form-control" type="text" name="account_opening_date" value="02-02-2017">
                                          <span class="input-group-addon"><i class="lnr lnr-calendar-full "></i></span>

                                       </div>
                                        <span>Leave blank if opened before 7 January 2012</span>
                                    </div>
                                 </div>
                        <div class="form-group">
                           <label class="control-label col-md-4">Opening balance</label>
                           <div class="col-md-8">
                              <input class="form-control" placeholder="00.00" type="text" name="opening_balance" value="">
                                <span>As at 7 January 2012</span>
                           </div>

                        </div>
                         <button class="btn btn-primary btn-block" name="submit">Submit</button>


                     </div>


               </div>


         </form>
                    </div>
                  </div>
                </div>
                </div>


<script>
/************************add_bank_account_form***********************************************/
$("#add_bank_account_form").submit(function(e)
		{
            var postData = $(this).serializeArray();
		    var formURL = $(this).attr("action");

		    $.ajax(
		    {
		        url : formURL,
		        type: "POST",
		        data : postData,
		        dataType: 'json',
		        success:function(data, textStatus, jqXHR)
		        {
			      $("#after_post_message").html(data.msg);
		        	 if(data.error==false){
		        	  setTimeout(function(){
		        		  $('#add_project').modal('toggle');
		        		  window.location='http://accounting.appinsg.com/index.php?user=changepassword';
			                },6000);
		        	 //  var url = 'http://accounting.appinsg.com/index.php?user=changepassword';
			  	     //   $('#div1-wrapper').load(url + ' #div1');
				  	  //    $('#divaba-wrapper').load(url + ' #div_aba');

			  	        }
		        }
		    });
		    e.preventDefault(); //STOP default action
		    e.unbind(); //unbind. to stop multiple form submit.
		});

/************************add_project_form***********************************************/
$("#add_project_form").submit(function(e)
		{
            var postData = $(this).serializeArray();
		    var formURL = $(this).attr("action");

		    $.ajax(
		    {
		        url : formURL,
		        type: "POST",
		        data : postData,
		        dataType: 'json',
		        success:function(data, textStatus, jqXHR)
		        {
			      $("#after_post_message_project").html(data.msg);
		        	 if(data.error==false){
		        	  setTimeout(function(){
		        		  $('#add_project').modal('toggle');
		        		  window.location='http://accounting.appinsg.com/index.php?user=changepassword';
			                },6000);
		        	 //  var url = 'http://accounting.appinsg.com/index.php?user=changepassword';
			  	     //   $('#div1-wrapper').load(url + ' #div1');
				  	  //    $('#divaba-wrapper').load(url + ' #div_aba');

			  	        }
		        }
		    });
		    e.preventDefault(); //STOP default action
		    e.unbind(); //unbind. to stop multiple form submit.
		});
/************************add_item_form***********************************************/
$("#add_item_form").submit(function(e)
		{
            var postData = $(this).serializeArray();
		    var formURL = $(this).attr("action");

		    $.ajax(
		    {
		        url : formURL,
		        type: "POST",
		        data : postData,
		        dataType: 'json',
		        success:function(data, textStatus, jqXHR)
		        {
			      $("#after_post_message_item").html(data.msg);
		        	 if(data.error==false){
		        	  setTimeout(function(){
		        		  $('#add_item_modal').modal('toggle');
		        		  window.location='http://accounting.appinsg.com/index.php?user=changepassword';
			                },3000);
                   }
		        }
		    });
		    e.preventDefault(); //STOP default action
		    e.unbind(); //unbind. to stop multiple form submit.
		});
/************************add_contact form***********************************************/
$("#add_contact_form").submit(function(e)
		{
            var postData = $(this).serializeArray();
		    var formURL = $(this).attr("action");

		    $.ajax(
		    {
		        url : formURL,
		        type: "POST",
		        data : postData,
		        dataType: 'json',
		        success:function(data, textStatus, jqXHR)
		        {
			      $("#after_post_message_contact").html(data.msg);
		        	 if(data.error==false){
		        	  setTimeout(function(){
		        		  $('#add_contact_modal').modal('toggle');
		        		  window.location='http://accounting.appinsg.com/index.php?user=changepassword';
			                },3000);
                   }
		        }
		    });
		    e.preventDefault(); //STOP default action
		    e.unbind(); //unbind. to stop multiple form submit.
		});
</script>






</body>


  <!-- used for show calendar -->
   <script src="assets/frontend/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/frontend/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
 <!-- ****************************** -->

   <script src="assets/frontend/js/jquery.dataTables.min.js" type="text/javascript"></script>
  <script src="assets/frontend/js/datatable-editable.js" type="text/javascript"></script>
  <!-- used for calendar -->
 <script src="assets/frontend/js/jquery.easy-pie-chart.js" type="text/javascript"></script>
 <!-- ******************************* -->

  <script src="assets/frontend/js/bootstrap-fileupload.js" type="text/javascript"></script>
<script src="assets/frontend/js/bootstrap-datepicker.js" type="text/javascript"></script>

  <script src="assets/frontend/js/bootstrap-timepicker.js" type="text/javascript"></script>
   <script src="assets/frontend/js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script>
/*  for mobile navigation
     $('.navbar-toggle').click(function() {
         return $('body, html').toggleClass("nav-open");
       });
*/
</script>

<!-- --- Date Pick --- -->
<script src="assets/frontend/js/main.js" type="text/javascript"></script>
<script src="assets/frontend/js/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="assets/frontend/js/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="assets/frontend/js/jquery.validate.js" type="text/javascript"></script>
<script src="assets/frontend/js/jquery.isotope.min.js" type="text/javascript"></script>
<script src="assets/frontend/js/isotope_extras.js" type="text/javascript"></script>
 <script src="assets/frontend/js/select2.js" type="text/javascript"></script>
 <script src="assets/frontend/js/fullcalendar.min.js" type="text/javascript"></script>

<!-- --------Time Picker----- -->
<script src="assets/frontend/js/daterange-picker.js" type="text/javascript"></script>
<script src="assets/frontend/js/date.js" type="text/javascript"></script>

	<!-- --- Script for Loader --- -->
	<script>
		$(window).load(function() {
			$(".se-pre-con").fadeOut("slow");
		});
	</script>
	<!-- --- close Script for Loader --- -->

<!-- mobile screen k liye  -->



 



<script>
//---------- Checksheet (Job Type Details) ----------
//$("#add_contact_form_submit_id").click(function(){
//	alert("dfdfdsf");
//$("#add_contact_form").submit();

//});

</script>


<script>
$("#add_payment_form_submit").click(function(){
	$.ajax({
	      type: 'POST',
	      url: "http://accounting.appinsg.com/index.php?user=ajax",
	      data: $("add_payment_form_submit").serialize(),
	      success: function(data)
	       { $("#after_post_message").html(data);
	       setTimeout(function(){
	    		  window.location = 'http://accounting.appinsg.com/index.php?user=sale_purchase_prefrence';
	                },3000);}
	});

});
</script>
<script>
$("#tax_type_id").change(function(){
	var tax_type=$(this).val();
	//var tax_id=$("#tax_id").val();
	location.href=window.location.pathname+'?user=add_tax&tax_type='+tax_type;
});


</script>
<script>

$("#tax_type_edit_id").change(function(){
	var tax_type_id=$(this).val();
	//alert("sssssssssssssssssssssssssss");
	location.href=window.location.pathname+'?user=edit_tax&tax_id='++'&tax_type='+tax_type_id;
});
</script>


<script>
function goBack() {
    window.history.back();
}
</script>
<script>
$('#select_all').change(function() {
    var checkboxes = $(this).closest('form').find(':checkbox');
    if($(this).is(':checked')) {
        checkboxes.prop('checked', true);
    } else {
        checkboxes.prop('checked', false);
    }
});
</script>
</html>
<?php include 'footer.php'; ?>