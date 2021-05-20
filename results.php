<!-- <?php //include('includes\quiz.php');?> -->
<!-- <script type="text/javascript">
	var b=window.opener.total;
	console.log(b);
</script> -->
<?php
session_start();
$regno=$_SESSION['regno'];
include('includes\config.php');
$reg= mysqli_real_escape_string($con, $regno);
$check_presence= "SELECT * FROM review WHERE RegNo = '$reg'";
$res = mysqli_query($con, $check_presence);
$p=0;
if(mysqli_num_rows($res) > 0){
while ($row = mysqli_fetch_array($res)) {
                    $p = $row['percentage'];
                    $t = $row['total'];
                    $name= $row['Name'];
                    $type=$row['Type'];
}
}
else
{
$t=$_COOKIE["total"];
$p=($t/10)*100;
$check_code = "SELECT * FROM users WHERE register_no = '$reg'";
  $code_res = mysqli_query($con, $check_code);
  if(mysqli_num_rows($code_res) > 0){
      $fetch_data = mysqli_fetch_assoc($code_res);
      $name= $fetch_data['name'];
      $email = $fetch_data['email'];
      $type=$_SESSION['type'];
      $insert = "INSERT INTO review(RegNo,Name,Email,percentage,total,Type) values(?,?,?,?,?,?)";
      $stmt = mysqli_prepare($con, $insert);
 		mysqli_stmt_bind_param($stmt,"sssiis",$reg,$name,$email,$p,$t,$type);
      if(mysqli_stmt_execute($stmt)){
          echo "<script>alert('Your performance has been recorded')</script>";
      }else{
          echo "<script>alert('There has been an issue!')</script>";
      }
  }else{
      echo "<script>alert('There is no session !!')</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
	<link rel="stylesheet" href="css\result.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
<div class="left">
	 <div class="thumbnail__logo">
      <h1 class="logo__text"><span style="font-size: 35px;">T</span>ech<span style="font-size: 35px;">N</span>etics</h1>
    </div>
<br><br><br><br>
<ul>
  <li><button class="btn" onclick="Quiz()"><i class="fa fa-align-justify"></i> &nbsp;&nbsp;Quiz</button></li><br><br>
  <li><button id="results" class="btn" onclick="Result()"><i class="fa fa-check-circle"></i>&nbsp;&nbsp;Results</button></li>
</ul>
</div>
<div class="center"  id="quiz">
	<div class="finished" id="finished">
		<p>
			<center>
				<h1><?php echo $type;?></h1>
			<hr>
			<h3>Due: 24th April &nbsp; &nbsp; &nbsp;&nbsp; Questions 10  &nbsp; &nbsp; &nbsp;&nbsp;  Time Limit 30 Minutes   &nbsp; &nbsp; &nbsp;&nbsp; Allowed Attempts 1</h3>
			<hr>
			<br><br>
			<h1>Instructions</h1>
			<h1 style="width: 500px; text-align: justify;"><br>Thank you for completing the Quiz we will Evaluate your performance and update you soon with the results!!</h1><br>
			<h2>Have A Good Day!</h2>
			</center>
		</p>
		<center>
			<button class="btn1" name="Home"><a href="launchquiz.php"><i class="fa fa-home icon"> Home</i></a></button>
		</center>
	</div>
</div>
<div class="center"  id="result">
	<div class="div1">
		
	</div>
	<div class="division">
		<p>
			<center >
			<p class="res">You have obtained <label id="perc" name="perc"><?php echo $p; ?></label> % in the exam you have written. This will be looked at and evaluated by us once we finish evaluating your performance we will give you an update with the result.<br><br><br>
			<label style="color:white;font-size: 25px; font-weight: bold;padding:70px;">THANK YOU! AND HAVE A GREAT DAY!</label></p>		
			<form method="POST"><input type="hidden" name="total" id="total"></form>
		</center>
	</p>
	</div>
<!-- 	<div class="div2">
		
	</div> -->
</div>
<div class="right">
<div class="" style="width: 100%; font-size: 30px;">
	<div style="font-size: 2.5rem; height: 20px; ">
		<center><i class="fa fa-clock-o fa-lg"></i></center>
	</div>
	<div style="text-align: center; height: 20px;">
		<h3>Timer</h3>
	</div>
	<div style="text-align: center;">
		 <div id="timer"></div>
	</div>
</div>
<div style="padding-left:10px;text-align: justify; font-size: 10px; "> 
	<h1>Notes:</h1>
	<h3>Do not try to move out of the tab</h3>
	<h3>Check the timer</h3>
	<h3>No Extra time will be given</h3>
	<h3>for any queries in terms of the quiz please send an email to technetics@gmail.com</h3>
</div><br>
<div id="navigation" class="navigation">
	<center>
		<button name="one" value="one" class="queb" id="one" onclick="navque('que1')">1</button>&nbsp;&nbsp;&nbsp; <button name="two" value="two" class="queb" id="two" onclick="navque('que2')">2</button><br><br>
		<button name="three" value="three" class="queb" id="two" onclick="navque('que3')">3</button>&nbsp;&nbsp;&nbsp; <button name="four" value="four" class="queb" id="four" onclick="navque('que4')">4</button><br><br>
		<button name="five" value="five" class="queb" id="five" onclick="navque('que5')">5</button>&nbsp;&nbsp;&nbsp; <button name="six" value="six" class="queb" id="six" onclick="navque('que6')">6</button><br><br>
		<button name="seven" value="seven" class="queb" id="seven" onclick="navque('que7')">7</button>&nbsp;&nbsp;&nbsp; <button name="eight" value="eight" class="queb" id="eight" onclick="navque('que8')">8</button><br><br>
		<button name="nine" value="nine" class="queb" id="nine" onclick="navque('que9')">9</button>&nbsp;&nbsp;&nbsp; <button name="ten" value="ten" class="queb" id="ten" onclick="navque('que10')">10</button><br><br>
	</center>
</div><br>
<form method="POST">
	<center>
	<input type="hidden" name="total" id="tot"><br>
	<button name="userssubmit" value="submit" class="buttn" id="buttn">Submit</button><br></center>
</form>

</div>	
</div>
<script src="scripts\result.js">
</script>
</body>
</html>

