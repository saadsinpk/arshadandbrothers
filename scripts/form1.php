<?php $conn = mysqli_connect("shareddb1e.hosting.stackcp.net","arshad_software","3)c8!IxhC_qJ","arshad_software");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  echo '{
  "data": [';
  $sql2 = "SELECT * FROM arshaddata ORDER BY clibillno1 DESC";
  $result2 = $conn->query($sql2);
  $i = 0;
  $o = 1;
  while($row2 = $result2->fetch_assoc()) { 
  if ($result2->num_rows == $o) {?>
  ["<?php echo $row2['cligdno']; ?>","<?php echo str_replace(" ","",$row2['clibillno1']); ?>","<?php echo $row2['clinametext']; ?>","<?php echo $row2['cligddate']; ?>","<a href='form.php?id=<?php echo $row2['id'];?>'>Edit</a> | <a href='form.php?delete=<?php echo $row2['id'];?>'>Delete</a>","<a href='form.php?print=<?php echo $row2['id'];?>' target='_blank'>Print</a>","<a href='saleform.php?print=<?php echo $row2['id'];?>' target='_blank'>Print</a>"]
  <?php // echo ' ["'.$row2['cligdno'].'","'.$row2['clibillno1'].'","'.$row2['clinametext'].'","'.$row2['cligddate'].'","<a href="form.php?delete='.$row2['id'].'">Delete</a> | <a href="form.php?id='.$row2['id'].'">Edit</a>","<a href="form.php?print='.$row2['id'].'" target="_blank"><i class="fa fa-edit"></i>Print</a>","<a href="saleform.php?print='.$row2['id'].'" target="_blank"><i class="fa fa-edit"></i>Print</a>"],';
  } else { ?>
  ["<?php echo $row2['cligdno']; ?>","<?php echo str_replace(" ","",$row2['clibillno1']); ?>","<?php echo $row2['clinametext']; ?>","<?php echo $row2['cligddate']; ?>","<a href='form.php?id=<?php echo $row2['id'];?>'>Edit</a> | <a href='form.php?delete=<?php echo $row2['id'];?>'>Delete</a>","<a href='form.php?print=<?php echo $row2['id'];?>' target='_blank'>Print</a>","<a href='saleform.php?print=<?php echo $row2['id'];?>' target='_blank'>Print</a>"],
    <?php // echo ",";
  }
  $o++;
}?> 
  ]
}