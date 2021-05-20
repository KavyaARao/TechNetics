<?php 
session_start();
$regno=$_SESSION['regno'];
include('includes\config.php');
$reg= mysqli_real_escape_string($con, $regno);
$check_code = "SELECT * FROM review WHERE RegNo = '$reg'";
$code_res = mysqli_query($con, $check_code);
if(mysqli_num_rows($code_res) > 0){
header("Location: http://localhost/iwp/Technetics-full/results.php");
exit();
}
else
{
$quiz_id = $_GET['quiz_id'];
$type = "";

if ($quiz_id == 1) {
    $type = "Technical";
}
if ($quiz_id == 2) {
    $type = "Management";
}
if ($quiz_id == 3) {
    $type = "Design";
}
if (isset($_POST['login'])) {
    $email = $_SESSION['email'];
    $regno = $_SESSION['regno'];
    if (!empty($email) && !empty($regno)) {
        $_SESSION['logged_in'] = true;
    }
}
$_SESSION['type']=$type;
}
?>
<?php
include('includes\quiz1.php');
?>
<!-- <script type="text/javascript">
	document.getElementById("buttn").onclick=function()
	{
	var totals=sessionStorage.getItem('total');
	var perc=sessionStorage.getItem('per');
	console.log(totals);
	};
</script> -->

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
	<link rel="stylesheet" href="css\userquiz.css">
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
	<div class="start" id="start">
		<p>
			<center>
				<h1 id="type">Recruitment Test</h1>
			<hr>
			<h3>Due:<label id='due'>24th April </label>&nbsp; &nbsp; &nbsp;&nbsp; Questions 10  &nbsp; &nbsp; &nbsp;&nbsp;  Time Limit:<label id="t"> 20</label> Minutes   &nbsp; &nbsp; &nbsp;&nbsp; Allowed Attempts 1</h3>
			<hr>
			<br><br>
			<h1>Instructions</h1>
			<h3 style="width: 500px; text-align: justify;">The Test is of multiple choice format. Read Each Question Carefully and answer the question accordingly.<br><br>After answering an question click the next button.You will be able to see one question at a time you can navigate from one question to another by using the next and previous button.<br><br>Each question is for one one mark so the total comes to ten. the decision will be made on the marks obtained here along with your performance in the interview round.<br></h3><br>
			<h2>All The Best!</h2>
			</center>
		</p>
		<center>
			<button class="btn1" name="start" onclick="start()">Start <i class="fa fa-play"></i></button>
		</center>
	</div>
	<div class="finished" id="finished">
		<p>
			<center>
				<h1>Recruitment Test</h1>
			<hr>
			<h3>Due: 24th April &nbsp; &nbsp; &nbsp;&nbsp; Questions 10  &nbsp; &nbsp; &nbsp;&nbsp;  Time Limit 30 Minutes   &nbsp; &nbsp; &nbsp;&nbsp; Allowed Attempts 1</h3>
			<hr>
			<br><br>
			<h1>Instructions</h1>
			<h1 style="width: 500px; text-align: justify;"><br>Thank you for completing the Quiz we will Evaluate your performance and update you soon with the results!!</h1><br>
			<h2>Have A Good Day!</h2>
			</center>
		</p>
	</div>
	<div id="container">
		<br><br>
	<div class="qcon" id="qcon">
	<div id="que1" class="que" value="1">
		<div class="question">
			<br>
		<center>
		<label id="1">Which line of code creates a instance of the Person Class?</label><br>
		<h6>QUESTION 1 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<button name="A" value="Person.create()" class="butn" onclick="Solveq1('q1btn1')" id="q1btn1">Person.create()</button><br>
			<br><br>
			<button name="A" value="Html" class="butn" onclick="Solveq1('q1btn2');" id="q1btn2">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q1btn3" onclick="Solveq1('q1btn3');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q1btn4" onclick="Solveq1('q1btn4');">Person.create()</button><br>
		</div>
	</div>
	<div id="que2" class="que">
		<div class="question">
			<br>
		<center>
		<label id="2">Which line of code creates a instance of the Person Class?</label><br>
		<h6>QUESTION 2 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<button name="A" value="Person.create()" class="butn" id="q2btn1" onclick="Solveq2('q2btn1');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q2btn2" onclick="Solveq2('q2btn2');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q2btn3" onclick="Solveq2('q2btn3');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q2btn4" onclick="Solveq2('q2btn4');">Person.create()</button><br>
		</div>
	</div>
	<div id="que3" class="que">
		<div class="question">
			<br>
		<center>
		<label id="3">Which line of code creates a instance of the Person Class?</label><br>
		<h6>QUESTION 3 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<button name="A" value="Person.create()" class="butn" id="q3btn1" onclick="Solveq3('q3btn1');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q3btn2" onclick="Solveq3('q3btn2');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q3btn3" onclick="Solveq3('q3btn3');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q3btn4" onclick="Solveq3('q3btn4');">Person.create()</button><br>
		</div>
	</div>
	<div id="que4" class="que">
		<div class="question">
			<br>
		<center>
		<label id="4">Which line of code creates a instance of the Person Class?</label><br>
		<h6>QUESTION 4 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<button name="A" value="Person.create()" class="butn" id="q4btn1" onclick="Solveq4('q4btn1');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q4btn2" onclick="Solveq4('q4btn2');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q4btn3" onclick="Solveq4('q4btn3');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q4btn4" onclick="Solveq4('q4btn4');">Person.create()</button><br>
		</div>
	</div>
	<div id="que5" class="que">
		<div class="question">
			<br>
		<center>
		<label id="5">Which line of code creates a instance of the Person Class?</label><br>
		<h6>QUESTION 5 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<button name="A" value="Person.create()" class="butn" id="q5btn1" onclick="Solveq5('q5btn1');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q5btn2" onclick="Solveq5('q5btn2');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q5btn3" onclick="Solveq5('q5btn3');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q5btn4" onclick="Solveq5('q5btn4');" >Person.create()</button><br>
		</div>
	</div>
	<div id="que6" class="que">
		<div class="question">
			<br>
		<center>
		<label id="6">Which line of code creates a instance of the Person Class?</label><br>
		<h6>QUESTION 6 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<button name="A" value="Person.create()" class="butn" id="q6btn1" onclick="Solveq6('q6btn1');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q6btn2" onclick="Solveq6('q6btn2');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q6btn3" onclick="Solveq6('q6btn3');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q6btn4" onclick="Solveq6('q6btn4');">Person.create()</button><br>
		</div>
	</div>
	<div id="que7" class="que">
		<div class="question">
			<br>
		<center>
		<label id="7">Which line of code creates a instance of the Person Class?</label><br>
		<h6>QUESTION 7 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<button name="A" value="Person.create()" class="butn" id="q7btn1" onclick="Solveq7('q7btn1');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q7btn2" onclick="Solveq7('q7btn2');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q7btn3" onclick="Solveq7('q7btn3');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q7btn4" onclick="Solveq7('q7btn4');">Person.create()</button><br>
		</div>
	</div>
	<div id="que8" class="que">
		<div class="question">
			<br>
		<center>
		<label id="8">Which line of code creates a instance of the Person Class?</label><br>
		<h6>QUESTION 8 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<button name="A" value="Person.create()" class="butn" id="q8btn1" onclick="Solveq8('q8btn1');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q8btn2" onclick="Solveq8('q8btn2');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q8btn3" onclick="Solveq8('q8btn3');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q8btn4" onclick="Solveq8('q8btn4');">Person.create()</button><br>
		</div>
	</div>
	<div id="que9" class="que">
		<div class="question">
			<br>
		<center>
		<label id="9">Which line of code creates a instance of the Person Class?</label><br>
		<h6>QUESTION 9 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<button name="A" value="Person.create()" class="butn" id="q9btn1" onclick="Solveq9('q9btn1');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q9btn2" onclick="Solveq9('q9btn2');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q9btn3" onclick="Solveq9('q9btn3');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q9btn4" onclick="Solveq9('q9btn3');">Person.create()</button><br>
		</div>
	</div>
	<div id="que10" class="que">
		<div class="question">
			<br>
		<center>
		<label id="10">Which line of code creates a instance of the Person Class?</label><br>
		<h6>QUESTION 10 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<button name="A" value="Person.create()" class="butn" id="q10btn1" onclick="Solveq10('q10btn1');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q10btn2" onclick="Solveq10('q10btn2');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q10btn3" onclick="Solveq10('q10btn3');">Person.create()</button><br>
			<br><br>
			<button name="A" value="Person.create()" class="butn" id="q10btn4" onclick="Solveq10('q10btn4');">Person.create()</button><br>
			<br><br><br><br>
			
		</div>
	</div>
	</div>
	<div class="bcon" id="bcon">
		<center class="nav">
			<button class="btn2" onclick="prev()" id="prev"><i class="fa fa-chevron-circle-left"></i> Previous </button>
		<button class="btn2" onclick="next()" id="next">Next <i class="fa fa-chevron-circle-right"></i></button>
		</center>
	</div>
	</div>
</div>
<div class="center"  id="result">
	<div class="div1">
		
	</div>
	<div class="division">
		<p>
			<center >
			<p class="res">You have obtained <label id="perc" name="perc"> </label> % in the exam you have written. This will be looked at and evaluated by us once we finish evaluating your performance we will give you an update with the result.<br><br><br>
			<label style="color:white;font-size: 25px; font-weight: bold;padding:70px;">THANK YOU! AND HAVE A GREAT DAY!</label></p>		
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
	<center>
	<input type="hidden" name="total" id="tot"><br>
	<button name="userssubmit" value="submit" class="buttn" id="buttn"><a href="?submit=true">Submit</a></button><br></center>

</div>	
</div>
<script src="scripts\usersquiz.js">
</script>
</body>
</html>