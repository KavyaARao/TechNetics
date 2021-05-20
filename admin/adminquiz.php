<?php include('..\includes\quiz.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
	<link rel="stylesheet" href="..\css\adminquiz.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form method="POST">
<div class="container">
<div class="left">
	 <div class="thumbnail__logo">
      <h1 class="logo__text"><span style="font-size: 35px;">T</span>ech<span style="font-size: 35px;">N</span>etics</h1>
    </div>
<br><br><br><br>
<ul>
  <li><button type="button" class="btn" onclick="Quiz()"><i class="fa fa-align-justify"></i> &nbsp;&nbsp;Quiz</button></li><br><br>
  <li><button type="button" class="btn" onclick="Result()"><i class="fa fa-check-circle"></i>&nbsp;&nbsp;Results</button></li>
</ul>
</div>
<div class="center"  id="quiz">
	<div class="start" id="start">
		<p>
			<center>
				<h1>Recruitment Test</h1>
			<hr>
			<h3>Due Date:<input type="text" name="duedate" id="duedate" class="duedate" style="width: 15%;">&nbsp; &nbsp; &nbsp;&nbsp; Questions 10  &nbsp; &nbsp; &nbsp;&nbsp;  Time Limit(minutes) <input type="text" name="time" id="time" class="time" style="width: 15%;">  &nbsp; &nbsp; &nbsp;&nbsp; Allowed Attempts 1</h3><hr>
			<br><br>
			<h1>WHAT IS THE QUIZ FOR?</h1>
			<h3 style="width: 500px; text-align: justify;"><input type="text" name="type" id="type" class="type" style="width: 100%;"><br> </h3><br>
			<h2>THANK YOU!</h2>
			</center>
		</p><br><br><br>
		<center>
			<button type="button" class="btn1" onclick="start()">Start <i class="fa fa-play"></i></button>
		</center>
	</div>
	<div class="finished" id="finished">
		<p>
			<center>
				<h1>Recruitment Test</h1>
			<hr>
			<h3>Due Date:24th April&nbsp; &nbsp; &nbsp;&nbsp; Questions 10  &nbsp; &nbsp; &nbsp;&nbsp;  Time Limit 30 mins  &nbsp; &nbsp; &nbsp;&nbsp; Allowed Attempts 1</h3>
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
		<label>Enter Question 1:&nbsp;</label><input type="text" name="question1" id="question1" class="que1">
		<h6>QUESTION 1 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<label>Answer:&nbsp;</label><input type="text" name="q1ans" id="q1ans" class="ans">
			<br><br>
			<label>Option 2:&nbsp;</label><input type="text" name="q1opt2" id="q1opt2" class="opt2" style="width: 48%;">
			<br><br>
			<label>Option 3:&nbsp;</label><input type="text" name="q1opt3" id="q1opt3" class="opt3" style="width: 48%;">
			<br><br>
			<label>Option 4:&nbsp;</label><input type="text" name="q1opt4" id="q1opt4" class="opt4" style="width: 48%;"><br><br>
			<button type="button" name="addque1" value="ADD" class="butn" id="Add" onclick="add1();"><i class="fa fa-plus"></i>&nbsp;Add</button><br>
		</div>
	</div>
	<div id="que2" class="que">
		<div class="question">
			<br>
		<center>
		<label>Enter Question 2:&nbsp;</label><input type="text" name="question2" id="question2" class="que2">
		<h6>QUESTION 2 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<label>Answer:&nbsp;</label><input type="text" name="q2ans" id="q2ans" class="ans">
			<br><br>
			<label>Option 2:&nbsp;</label><input type="text" name="q2opt2" id="q2opt2" class="opt2" style="width: 48%;">
			<br><br>
			<label>Option 3:&nbsp;</label><input type="text" name="q2opt3" id="q2opt3" class="opt3" style="width: 48%;">
			<br><br>
			<label>Option 4:&nbsp;</label><input type="text" name="q2opt4" id="q2opt4" class="opt4" style="width: 48%;"><br><br>
			<button type="button" name="addq2" value="ADD" class="butn" id="Add" onclick="add2()"><i class="fa fa-plus"></i>&nbsp;Add</button><br>
		</div>
	</div>
	<div id="que3" class="que">
		<div class="question">
			<br>
		<center>
		<label>Enter Question 3:&nbsp;</label><input type="text" name="question3" id="question3" class="que3">
		<h6>QUESTION 3 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<label>Answer:&nbsp;</label><input type="text" name="q3ans" id="q3ans" class="ans">
			<br><br>
			<label>Option 2:&nbsp;</label><input type="text" name="q3opt2" id="q3opt2" class="opt2" style="width: 48%;">
			<br><br>
			<label>Option 3:&nbsp;</label><input type="text" name="q3opt3" id="q3opt3" class="opt3" style="width: 48%;">
			<br><br>
			<label>Option 4:&nbsp;</label><input type="text" name="q3opt4" id="q3opt4" class="opt4" style="width: 48%;"><br><br>
			<button type="button" name="addq3" value="ADD" class="butn" id="Add" onclick="add3()"><i class="fa fa-plus"></i>&nbsp;Add</button><br>
		</div>
	</div>
	<div id="que4" class="que">
		<div class="question">
			<br>
		<center>
		<label>Enter Question 4:&nbsp;</label><input type="text" name="question4" id="question4" class="que4">
		<h6>QUESTION 4 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<label>Answer:&nbsp;</label><input type="text" name="q4ans" id="q4ans" class="ans">
			<br><br>
			<label>Option 2:&nbsp;</label><input type="text" name="q4opt2" id="q4opt2" class="opt2" style="width: 48%;">
			<br><br>
			<label>Option 3:&nbsp;</label><input type="text" name="q4opt3" id="q4opt3" class="opt3" style="width: 48%;">
			<br><br>
			<label>Option 4:&nbsp;</label><input type="text" name="q4opt4" id="q4opt4" class="opt4" style="width: 48%;"><br><br>
			<button type="button" name="addq4" value="ADD" class="butn" id="Add" onclick="add4()"><i class="fa fa-plus"></i>&nbsp;Add</button><br>
		</div>
	</div>
	<div id="que5" class="que">
		<div class="question">
			<br>
		<center>
		<label>Enter Question 5:&nbsp;</label><input type="text" name="question5" id="question5" class="que5">
		<h6>QUESTION 5 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<label>Answer:&nbsp;</label><input type="text" name="q5ans" id="q5ans" class="ans">
			<br><br>
			<label>Option 2:&nbsp;</label><input type="text" name="q5opt2" id="q5opt2" class="opt2" style="width: 48%;">
			<br><br>
			<label>Option 3:&nbsp;</label><input type="text" name="q5opt3" id="q5opt3" class="opt3" style="width: 48%;">
			<br><br>
			<label>Option 4:&nbsp;</label><input type="text" name="q5opt4" id="q5opt4" class="opt4" style="width: 48%;"><br><br>
			<button type="button" name="addq5" value="ADD" class="butn" id="Add" onclick="add5()"><i class="fa fa-plus"></i>&nbsp;Add</button><br>
		</div>
	</div>
	<div id="que6" class="que">
		<div class="question">
			<br>
		<center>
		<label>Enter Question 6:&nbsp;</label><input type="text" name="question6" id="question6" class="que6">
		<h6>QUESTION 6 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<label>Answer:&nbsp;</label><input type="text" name="q6ans" id="q6ans" class="ans">
			<br><br>
			<label>Option 2:&nbsp;</label><input type="text" name="q6opt2" id="q6opt2" class="opt2" style="width: 48%;">
			<br><br>
			<label>Option 3:&nbsp;</label><input type="text" name="q6opt3" id="q6opt3" class="opt3" style="width: 48%;">
			<br><br>
			<label>Option 4:&nbsp;</label><input type="text" name="q6opt4" id="q6opt4" class="opt4" style="width: 48%;"><br><br>
			<button type="button" name="addq6" value="ADD" class="butn" id="Add" onclick="add6()"><i class="fa fa-plus"></i>&nbsp;Add</button><br>
		</div>
	</div>
	<div id="que7" class="que">
		<div class="question">
			<br>
		<center>
		<label>Enter Question 7:&nbsp;</label><input type="text" name="question7" id="question7" class="que7">
		<h6>QUESTION 7 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<label>Answer:&nbsp;</label><input type="text" name="q7ans" id="q7ans" class="ans">
			<br><br>
			<label>Option 2:&nbsp;</label><input type="text" name="q7opt2" id="q7opt2" class="opt2" style="width: 48%;">
			<br><br>
			<label>Option 3:&nbsp;</label><input type="text" name="q7opt3" id="q7opt3" class="opt3" style="width: 48%;">
			<br><br>
			<label>Option 4:&nbsp;</label><input type="text" name="q7opt4" id="q7opt4" class="opt4" style="width: 48%;"><br><br>
			<button type="button" name="addq7" value="ADD" class="butn" id="Add" onclick="add7()"><i class="fa fa-plus"></i>&nbsp;Add</button><br>
		</div>
	</div>
	<div id="que8" class="que">
		<div class="question">
			<br>
		<center>
		<label>Enter Question 8:&nbsp;</label><input type="text" name="question8" id="question8" class="que8">
		<h6>QUESTION 8 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<label>Answer:&nbsp;</label><input type="text" name="q8ans" id="q8ans" class="ans">
			<br><br>
			<label>Option 2:&nbsp;</label><input type="text" name="q8opt2" id="q8opt2" class="opt2" style="width: 48%;">
			<br><br>
			<label>Option 3:&nbsp;</label><input type="text" name="q8opt3" id="q8opt3" class="opt3" style="width: 48%;">
			<br><br>
			<label>Option 4:&nbsp;</label><input type="text" name="q8opt4" id="q8opt4" class="opt4" style="width: 48%;"><br><br>
			<button type="button" name="addq8" value="ADD" class="butn" id="Add" onclick="add8()"><i class="fa fa-plus"></i>&nbsp;Add</button><br>
		</div>
	</div>
	<div id="que9" class="que">
		<div class="question">
			<br>
		<center>
		<label>Enter Question 9:&nbsp;</label><input type="text" name="question9" id="question9" class="que9">
		<h6>QUESTION 9 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<label>Answer:&nbsp;</label><input type="text" name="q9ans" id="q9ans" class="ans">
			<br><br>
			<label>Option 2:&nbsp;</label><input type="text" name="q9opt2" id="q9opt2" class="opt2" style="width: 48%;">
			<br><br>
			<label>Option 3:&nbsp;</label><input type="text" name="q9opt3" id="q9opt3" class="opt3" style="width: 48%;">
			<br><br>
			<label>Option 4:&nbsp;</label><input type="text" name="q9opt4" id="q9opt4" class="opt4" style="width: 48%;"><br><br>
			<button type="button" name="addq9" value="ADD" class="butn" id="Add" onclick="add9()"><i class="fa fa-plus"></i>&nbsp;Add</button><br>
		</div>
	</div>
	<div id="que10" class="que">
		<div class="question">
			<br>
		<center>
		<label>Enter Question 10:&nbsp;</label><input type="text" name="question10" id="question10" class="que10">
		<h6>QUESTION 10 of 10</h6>
		</center>	
		</div><br><br>
		<div class="answer">
			<label>Answer:&nbsp;</label><input type="text" name="q10ans" id="q10ans" class="ans">
			<br><br>
			<label>Option 2:&nbsp;</label><input type="text" name="q10opt2" id="q10opt2" class="opt2" style="width: 48%;">
			<br><br>
			<label>Option 3:&nbsp;</label><input type="text" name="q10opt3" id="q10opt3" class="opt3" style="width: 48%;">
			<br><br>
			<label>Option 4:&nbsp;</label><input type="text" name="q10opt4" id="q10opt4" class="opt4" style="width: 48%;"><br><br>
			<button type="button" name="addq10" value="ADD" class="butn" id="Add" onclick="add10()"><i class="fa fa-plus"></i>&nbsp;Add</button><br>
		</div>
	</div>
	</div>
	<div class="bcon" id="bcon">
		<center class="nav">
		<button type="button" name="prev" value="prev" class="btn2"  id="prev" onclick="prevquestion();"><i class="fa fa-chevron-circle-left"></i> Previous </button>
		<button type="button" name="next" value="next" class="btn2"  id="next" onclick="nextquestion();">Next <i class="fa fa-chevron-circle-right"></i></button>
		</center>
	</div>
	</div>
</div>
<div class="center"  id="result">
	<div class="division">
		<center>
			<?php
            $sql = "SELECT * FROM review ORDER BY Type";
            $result = mysqli_query($con, $sql);
            echo "<center>";
            echo "<br><p class='res'>Quiz Results <b>".mysqli_num_rows($result)."</b></p><br>";
            echo "<table>
            <tr>
            <th>Register No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Total</th>
            <th>Percentage</th>
            <th>Type</th>
            </tr>";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $name = $row['Name'];
                    $regno = $row['RegNo'];
                    $email = $row['Email'];
                    $total=$row['total'];
                    $per=$row['percentage'];
                    $type=$row['Type'];
                    echo "<tr bgcolor=#FFFFFF>";
                    echo "<td>" . $regno . "</td>";
                    echo "<td> " . $name . "</td>";
                    echo "<td>" . $email . "</td>";
                    echo "<td>" . $total . "</td>";
                    echo "<td>" . $per . "</td>";
                    echo "<td>" . $type . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<h3>There is no results  yet!!</h3>";
            }
            echo "</table>";
            ?>
		</center>
	</div>
	<center>
			<button type="button" class="home" name="Home"><a href="mainpage.php"><i class="fa fa-home icon" style="color: white;"> Home</i></a></button>
		</center>
</div>
<div class="right">
<div class="questions done">
	<h2> &nbsp;&nbsp;Number of questions Added:-<label id="Number" class="Number"><span id="No">__</span>/10</label></h2>
</div>
<br><br>
<div id="navigation" class="navigation">
	<center>
		<button type="button" name="one" value="one" class="queb" id="one" onclick="navque('que1')">1</button>&nbsp;&nbsp;&nbsp; <button type="button" name="two" value="two" class="queb" id="two" onclick="navque('que2')">2</button><br><br>
		<button type="button" name="three" value="three" class="queb" id="two" onclick="navque('que3')">3</button>&nbsp;&nbsp;&nbsp; <button type="button" name="four" value="four" class="queb" id="four" onclick="navque('que4')">4</button><br><br>
		<button type="button" name="five" value="five" class="queb" id="five" onclick="navque('que5')">5</button>&nbsp;&nbsp;&nbsp; <button type="button" name="six" value="six" class="queb" id="six" onclick="navque('que6')">6</button><br><br>
		<button type="button" name="seven" value="seven" class="queb" id="seven" onclick="navque('que7')">7</button>&nbsp;&nbsp;&nbsp; <button type="button" name="eight" value="eight" class="queb" id="eight" onclick="navque('que8')">8</button><br><br>
		<button type="button"name="nine" value="nine" class="queb" id="nine" onclick="navque('que9')">9</button>&nbsp;&nbsp;&nbsp; <button type="button"name="ten" value="ten" class="queb" id="ten" onclick="navque('que10')">10</button><br><br>
	</center>
</div><br>
<center><button name="adminsubmit" value="submit" class="buttn" id="buttn">Submit</button><br></center>	
</div>	
</div>
<script src="..\scripts\adminquiz.js">
</script>
</form>
</body>
</html>