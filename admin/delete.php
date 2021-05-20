<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
<!-- css -->
  <title>TechNetics | Admin</title>

<link rel="stylesheet" href="../css/style.css"> 
<style>
   .top-area
{
  background-color: #3FBBC0;
}
input {
  font-size: 14px;
  line-height: 15px;
  margin: 0;
  padding: 0;
  -webkit-appearance: none;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #ccc;
}
input[type=text],[type=number],[type=password]{
  width: 50%;
  padding: 10px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
table{
  text-align: center;
  font-family: 'Lato', sans-serif;
    width: 85%;
    border-collapse: collapse;
 /* border: 1px solid black;*/
    padding: 3px;
    box-shadow: 5px 5px #E0EEEE;
    color:#3498DB;
}
label{
  height: 90px;
  font-size: 20px;
  font-weight: bold;
}
.home {
  background-color: #3498DB; /* Blue background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; 
  width:10%;/* Mouse pointer on hover */
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.4);
}
.delete{
background-color: #3498DB; /* Blue background */
  border: none; 
  border-left:#3498DB;
  border-right:#3498DB;/* Remove borders */
  color:#FAFAFA; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; 
  font-family: 'Lato';
  width:20%;/* Mouse pointer on hover */  
  box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.6);
}
.delete:hover{
  background-color:#E0EEEE;
  color:  #3498DB;
}
th{
    font-size: 20px;
    font-weight: bold;
  background-color: #3498DB;
    color: white;
  text-align: center;
  padding: 8px;
}
tr,td{
 font-family: 'Lato', sans-serif;
  background-color: white;
    color: black;
     padding: 5px;
}
td
{
    font-size: 15px;
}
h2
{
  font-size: 22px;
}
.odd{
  background-color: white;
  color:  #3498DB;
}
.even{
  background-color:#3498DB;
  color:  #E0EEEE ;
}
p{
  background: #3498DB ;
color: white;
font-size: 20px;
font-weight: bold;
text-align: center;
width: 75%;
padding: 16px 45px;
box-shadow: 3px 3px 3px 3px #AEC6CF;
}
</style>

</head>
<body>
        <header class="site-header">
            <div style="background-color: #fafafa; width: 100%; height: 20px"></div>
            <nav>
                <div class="logo">
                    <h1>
                        <span style="font-size: 35px">T</span>ech<span
                            style="font-size: 35px">N</span>etics
                    </h1>
                </div>
                <div class="menu" >
          <ul>
            <a href="index.php">
              <li>Logout</li>
            </a>
          </ul>
        </div>
            </nav>
        </header>
 <br><br><br> <br><br><br> <br><br><br>
<center>
 <?php
session_start();
include("../includes/config.php");
$sql="SELECT * FROM users order by id ASC";
$result = mysqli_query($con,$sql);
echo "<br><p >TOTAL USERS IN DATABASE: <b>".mysqli_num_rows($result)."</b></p><br><br><br>";
echo "<table>
<tr>
<th>ID</th>
<th>Register No</th>
<th> Name</th>
<th>Email</th>
<th>Status</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr bgcolor=#FFFFFF>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td> " . $row['register_no'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
<br><br><br><br>
<form method="POST">
  <p>DELETION OF A USER</p><br><br><br>
  <label>Enter Users Registration Number:</label><input type="text" name="regno" class="regno">
  <button class="delete" id="delete" name="delete"><i class="fa fa-cross"></i>DELETE</button>
</form>
<?php
if(isset($_POST['delete']))
{
 $regno = mysqli_real_escape_string($con, $_POST['regno']);
$result="DELETE from users where register_no='$regno'";
if (mysqli_query($con,$result)) {
  echo "<script type='text/javascript'>alert('Record Deleted Successfully')</script>";
  echo "<script type='text/javascript'>document.location='delete.php';</script>";
}
else
{
  echo "<script type='text/javascript'>alert('Error Deleting Record ')</script>";
}
}
mysqli_close($con);

?>
<center>
      <button type="button" class="home" name="Home"><a href="mainpage.php"><i class="fa fa-home icon" style="color: white;"> Home</i></a></button>
    </center>
</center>
</body>
</html>