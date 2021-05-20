<?php
$type=$_SESSION['type'];
 $reg= mysqli_real_escape_string($con, $type);
$check_code = "SELECT * FROM quiz WHERE status='new' and Type = '$reg'";
 $result=mysqli_query($con,$check_code);
 $i=1;
 while ($row=mysqli_fetch_assoc($result)) {
 		# code...
 		$q[$i]["Question"]=$row['Question'];
 		$q[$i]["Answer"]=$row['Answer'];
 		$q[$i]["opt1"]=$row['option1'];
 		$q[$i]["opt2"]=$row['option2'];
 		$q[$i]["opt3"]=$row['option3'];
 		$q[$i]['date']=$row['DueDate'];
 		$q[$i]['timemins']=$row['timemins'];
 		$q[$i]['type']=$row['Type'];
 		$i=$i+1;
 }
 ?>
 <script type="text/javascript">
	var dets=<?php echo json_encode($q);?>;
	sessionStorage.setItem('Details',JSON.stringify(dets));
</script>