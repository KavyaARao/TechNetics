<script type="text/javascript">
	var qan=sessionStorage.getItem('q');
	var qans=JSON.parse(qan);
</script>
<?php
session_start();
include('config.php');
$email = "";
$name = "";
$q = array();
$n2=0;
if(isset($_POST['adminsubmit'])){
	$ti=$_POST['time'];
	$da=$_POST['duedate'];
	$ty=$_POST['type'];
	$c=0;
	$update_code = "UPDATE quiz SET status='old'  WHERE Type='$ty' and status='new'";
    $run_query =  mysqli_query($con, $update_code);
	for($i=1; $i<=10;$i++) {
		$tt="q".(string)$i."ans";
		$que="question".(string)$i;
		$tt1="q".(string)$i."opt2";
		$tt2="q".(string)$i."opt3";
		$tt3="q".(string)$i."opt4";
		$q1=$_POST[$que];
		$ans1=$_POST[$tt];
		$option1=$_POST[$tt1];
		$option2=$_POST[$tt2];
		$option3=$_POST[$tt3];
		$a6=(int)$ti;
		$stat="new";
		$insert_data ="INSERT INTO quiz (QuestionNo, Question, Answer, option1, option2, option3, status, Type, DueDate, timemins) VALUES (?,?,?,?,?,?,?,?,?,?)";
		$stmt = mysqli_prepare($con, $insert_data);
		mysqli_stmt_bind_param($stmt,"issssssssi", $i, $q1, $ans1, $option1,$option2,$option3,$stat,$ty,$da,$a6);
      if(mysqli_stmt_execute($stmt)){
          $c=$c+1;
          }
         else
         {
         	echo mysqli_error($con);
         	break;
         }
      }
      if ($c==10) {
      	echo "<script type='text/javascript'>alert('It has been submitted successfully');</script>";
      }
      else
      {
      	echo "<script type='text/javascript'>alert('There was an issue Please wait we are looking into it!');</script>";

      }
}
?>