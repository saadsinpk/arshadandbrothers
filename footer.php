<div class="copywright" style="text-align:center;"><a href="http://sidtechno.com.pk/"  class="hidden-xs">Design and Develop by Sid Techno</a></div>
</body>

  <!-- used for show calendar -->
   <script src="assets/frontend/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="assets/frontend/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
 <!-- ****************************** -->

  <script src="assets/frontend/js/datatable-editable.js" type="text/javascript"></script>


	<script type="text/javascript" language="javascript" src="assets/frontend/js/jquery.dataTables.js">
	</script>
	<script type="text/javascript" language="javascript" src="assets/frontend/js/shCore.js">
	</script>
	<script type="text/javascript" language="javascript" src="assets/frontend/js/demo.js">
	</script>
	<script type="text/javascript" language="javascript" class="init">
	
function checkAvailability() {
$("#loaderIcon").show();
$.ajax({
url: "check_availability.php",
data:'billno1='+$("#billno1").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
	$("#loaderIcon").hide();
},
error:function (){}
});
}

	var selected = [];

	$(document).ready(function() {
    $('#frontform').DataTable( {
        "ajax": 'scripts/form1.php'
    } );
} );
function myFunction() {
    window.print();
}
$(document).ready(function() {
	 $('.jsexistinghead').on('change',function(){
	  $("input[name='headsoption']").val($(this).find("option:selected").attr("data-type"));
	});
	 $('#company').on('change',function(){
	  $("input[name='companyname']").val($(this).find("option:selected").attr("data-name"));
	  $("input[name='companysalestax']").val($(this).find("option:selected").attr("data-salestax"));
	  $("input[name='companyaddress']").val($(this).find("option:selected").attr("data-address"));
	  $("input[name='companyntnno']").val($(this).find("option:selected").attr("data-ntnno"));
	  // $("input[name='address']").val($(this).find("option:selected").attr("data-address"));
	});

$(".addmorefield").click(function () {
	var selectedvalue = $("#jsexistinghead").val();
	var jsrecnum = $("#jsrecnum").val();
	var jsdate = $(".jsdate").val();
	var jsbyparty = $("#jsbyparty").val();
	var jsbyab = $("#jsbyab").val();
	var headstype = $("#headstype").val();

	var headdescivalue = $(".headdescivalue");
	for(var i = 0; i < headdescivalue.length; i++){
	    var pastvalue = $(headdescivalue[i]).val();
	    if (selectedvalue == pastvalue) {
	    	alert("Can't enter same Heads");
        	   return false;
	    } else { 

	    }
	}
	$('#jsbyab').val('')
	$( ".savedatatems" ).append( "<div class='savedatatem'><div class='col-lg-3 col-xs-3'><input type='text' value='"+selectedvalue+"' name='headsdescription[]' class='headdescivalue' readonly></div><div class='col-lg-3 col-xs-3'><input type='text' value='"+jsrecnum+"' name='headspo[]' readonly></div><div class='col-lg-2 col-xs-2'><input type='text' value='"+jsdate+"' name='headsdate[]' readonly></div><div class='col-lg-2 col-xs-2'><input type='text' value='"+jsbyparty+"' name='headsbyparty[]' readonly></div><div class='col-lg-1 col-xs-1'><input type='text' value='"+jsbyab+"' name='headsbyab[]' readonly><input type='hidden' value='"+headstype+"' name='headsbytype[]'></div><div class='col-lg-1 col-xs-1'><a class='removethis' >Delete</a></div></div>" );
});


// $(document).ready(function(){
//     $(".selectchange").change(function(){
//         $(this).find("option:selected").each(function(){
//             var optionValue = $(this).attr("value");
//             if(optionValue){
//                 $(".boxes").not("." + optionValue).hide();
//                 $("." + optionValue).show();
//             } else{
//                 $(".boxes").hide();
//             }
//         });
//     }).change();
// });
// $(".fabrictotal,.fabrictotaladv").keyup(function(){
// 	var amt1 = $('.fabrictotal').val();
// 	var amt2 = $('.fabrictotaladv').val();
// 	var sub = (amt1 - amt2)
//     $(".fabricbalc").val(sub);
// });

$('.savedatatems').on('click', '.removethis', function() {
	$(this).parent().parent().remove();
});

$(".removethis").click(function () {
	$(this).parent().parent().remove();
});
<?php $sql4 = "SELECT * FROM weboption WHERE optionkey = 'percentage'";
$result4 = $conn->query($sql4);
while($row4 = $result4->fetch_assoc()) { 
	echo "var curpercentage = ".$row4['optionvalue'].";";
} ?>
function Calculation() {
	if ($("input[name='taxyesnot']").is(':checked')) {
		var amt1 = $('.sum1').val();
		var amt2 = $('.sum2').val();
		var sumvalue = parseInt(amt1, 10) + parseInt(amt2, 10);
	    $(".sum3").val(sumvalue);
		var amt3 = $('.sum3').val();
	    $(".sum4").val((amt3/100)*curpercentage);
		var amt4 = $('.sum3').val();
		var amt5 = $('.sum4').val();
		var amt6 = $('.sum5').val();
		var sumvaluetemp = parseInt(amt4, 10) + parseInt(amt5, 10);
		var grandtotal = parseInt(sumvaluetemp, 10) + parseInt(amt6, 10);
	    $(".sum6").val(grandtotal);
		var amt7 = $('.sum6').val();
	    $('#word').val(convertNumberToWords(amt7));
	} else {
		var amt1 = $('.sum1').val();
		var amt2 = $('.sum2').val();
		var sumvalue = parseInt(amt1, 10) + parseInt(amt2, 10);
	    $(".sum3").val(sumvalue);
		var amt3 = $('.sum3').val();
	    $(".sum4").val((amt1/100)*curpercentage);
		var amt4 = $('.sum3').val();
		var amt5 = $('.sum4').val();
		var amt6 = $('.sum5').val();
		var sumvaluetemp = parseInt(amt4, 10) + parseInt(amt5, 10);
		var grandtotal = parseInt(sumvaluetemp, 10) + parseInt(amt6, 10);
	    $(".sum6").val(grandtotal);
		var amt7 = $('.sum6').val();
	    $('#word').val(convertNumberToWords(amt7));
	}
}
$( ".serchrwotax" ).keyup(function() {
	var amt1 = $('.serchrwotax').val();
    $(".serchrtax").val((amt1/100)*curpercentage);
});


$( ".sum1" ).keyup(function() {
	Calculation();
});
$( ".sum2" ).keyup(function() {
	Calculation();
});
$( ".sum3" ).keyup(function() {
	Calculation();
});
$( ".sum4" ).keyup(function() {
	Calculation();
});
$( ".sum5" ).keyup(function() {
	Calculation();
});
$( ".sum6" ).keyup(function() {
	Calculation();
});
$("input[name='taxyesnot']").change( function(){
  Calculation();
});
	var selected = [];
$( "#stutusid" ).click(function() {
	for ( var i = 0, l = selected.length; i < l; i++ ) {
		var urlList = "<?php echo $website;?>statusfariya.php?userid="+selected[i]+""
		$.each( urlList.split( "," ), function( index, item ) {
			window.open( item, "_blank" )
		});
	}
			window.location.replace("<?php echo $website; ?>formlist.php");
});
	$('#customertab tbody').on('click', 'tr td:nth-child(1),tr td:nth-child(2),tr td:nth-child(3),tr td:nth-child(4),tr td:nth-child(5),tr td:nth-child(6),tr td:nth-child(7),tr td:nth-child(8),tr td:nth-child(9),tr td:nth-child(10),tr td:nth-child(11),tr td:nth-child(12),tr td:nth-child(13),tr td:nth-child(14)', function () {
		var id = this.closest('tr').id;
		var index = $.inArray(id, selected);
		if ( index === -1 ) {
			selected.push( id );
		} else {
			selected.splice( index, 1 );
		}

		$(this).closest('tr').toggleClass('selected');
	} );
	$('#statusofftab tbody').on('click', 'tr', function () {
		var id = this.id;
		var index = $.inArray(id, selected);
		if ( index === -1 ) {
			selected.push( id );
		} else {
			selected.splice( index, 1 );
		}

		$(this).toggleClass('selected');
	} );
} );

	</script>
  <!-- used for calendar -->
 <script src="assets/frontend/js/jquery.easy-pie-chart.js" type="text/javascript"></script>
 <!-- ******************************* -->

  <script src="assets/frontend/js/bootstrap-fileupload.js" type="text/javascript"></script>
<script src="assets/frontend/js/bootstrap-datepicker.js" type="text/javascript"></script>

  <script src="assets/frontend/js/bootstrap-timepicker.js" type="text/javascript"></script>
   <script src="assets/frontend/js/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script>
		$( function() {
			$('#datepicker').datepicker({
				format: 'dd-mm-yyyy'
			});
		} );
		$( function() {
			$('#datepicker2').datepicker({
				format: 'dd-mm-yyyy'
			});
		} );
		$( function() {
			$('#datepickerfront3').datepicker({
				format: 'dd-mm-yyyy'
			});
		} );
		// $( function() {
		// 	$('#datepicker4').datepicker({
		// 		format: 'dd/mm/yyyy'
		// 	});
		// } );
		// $( function() {
		// 	$('#datepicker5').datepicker({
		// 		format: 'dd/mm/yyyy'
		// 	});
		// } );
	</script>
<script>
/*  for mobile navigation
     $('.navbar-toggle').click(function() {
         return $('body, html').toggleClass("nav-open");
       });
*/

</script>

<!-- --- Date Pick --- -->
<script src="assets/frontend/js/jquery.maskedinput.min.js" type="text/javascript"></script>
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

</html>