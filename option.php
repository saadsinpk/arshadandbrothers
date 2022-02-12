<?php
ob_start();
session_start();
include 'header.php';
include 'connect.php';
if (isset($_SESSION['user'])) {

if($_SESSION['group'] == '2') { ?>
<style type="text/css">input { width: 100%; }</style>
      <div class="row">
    <div class="col-lg-12">
    <div class=" padded" >
            <h3>Option</h3>
                      </div>

      <div class="widget-container fluid-height">
        <div class="widget-content padded">

                <div class="row">
                  <div class="col-lg-12">
                  <div class="widget-container fluid-height clearfix">

                    <div class="widget-content padded clearfix">
                      <form action="" name="updateform" class="form-horizontal" method="post">
                        <div class="row">
                          <!-- Row 1 -->
                          <?php 
                          if (isset($_POST['saveform'])) {
                            foreach ($_POST as $postkey => $value) {
                              $sql6 = "UPDATE `weboption` SET  `optionvalue` =  '$value' WHERE optionkey = '$postkey'";
                              $result6 = $conn->query($sql6);
                            }

                          }
                          $sql = "SELECT * FROM weboption";

                          $result = $conn->query($sql);
                          while($row = $result->fetch_assoc()) { 
                            echo "<div class='col-lg-12 col-xs-12'>
                            <label>".$row['optionkey']."</label><input type='text' name='".$row['optionkey']."' value='".$row['optionvalue']."'>
                          </div>";

                          }?>
                        </div>
                        <div class="row">
                          <div class="col-lg-12">
                            <button class="btn btn-primary pull-right" type="submit" name="saveform">Save</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  </div>
                </div>
      </div>
    </div>
  </div>
<?php }
	}
 else {
 header('Location: '.$website.'index.php');
 } 
ob_end_flush(); 
include 'footer.php'; ?>
<script>
    $(function(){
      // bind change event to select
      $('#dynamic_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });
</script>