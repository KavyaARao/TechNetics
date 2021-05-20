<?php
include('../includes/config.php');
include('../includes/server.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>TechNetics | Reviews</title>
    <meta name="viewport" coantent="width=device-width, initial-scale=1" />
    <script src="scripts/script.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style>
        .revmain {
            width: 100%;
            padding: 25px;
            background-color: #fafafa;
            display: block;
            justify-content: space-between;
        }

        .revmain .rev {
            padding: 10px;
            border: 0.5px #ccc;
            margin-bottom: 10px;
            border-radius: 25px;
        }

        .addrev {
            width: 100%;
            padding: 25px;
            padding-top: 5px;
            display: block;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            line-height: 2rem;
        }
         footer {
  position:fixed;
  overflow: hidden;
  bottom:0;
  margin-bottom: 0;
  width:100%;
  height:auto;   
  background-color: rgb(34, 34, 34);
  color: #fff;
}
footer ul li {
  list-style-type: none;
}
footer a {
  text-decoration: none;
  transition: 0.5s;
  color: #fff;
}
.about p {
  line-height: 1.8em;
}
.footer_info {
  width: 90%;
  margin: 0 auto;
  display: flex;
  padding: 50px 0;
}
.footer_info .link {
  padding-left: 5em;
}
.footer_info,
.footer_width {
  padding: 0 15px;
}
.footer_info .Contact {
  padding-left: 5em;
}

.footer_info h2 {
  text-align: left;
  margin-bottom: 20px;
}
.footer_info p {
  text-align: justify;
}
.about,
.contact {
  width: 40%;
}
.link {
  width: 20%;
}
.link ul li a {
  display: block;
  margin-bottom: 15px;
  font: 18px;
}
.Contact ul li {
  display: block;
  margin-bottom: 15px;
  font: 18px;
}
.link ul li a:hover {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
}
.copy-right {
  padding: 15px 0;
  text-align: center;
  background-color: rgb(66, 66, 66);
}
        .addrev .rform {
            width: 100%;
        }

        .addrev:hover {
            box-shadow: 0 16px 32px 0 rgba(0, 0, 0, 0.2);
        }

        .addrev .rform textarea {
            width: 100%;
            padding: 10px;
            overflow: auto;
        }

        .addrev .rbtn {
            font-size: 18px;
            font-weight: bold;
            background: #111;
            width: 100px;
            padding: 8px;
            text-align: center;
            text-decoration: none;
            color: #fafafa;
            border: #000;
            border-radius: 20px;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: box-shadow, transform;
            transition-property: box-shadow, transform;
        }

        .rbtn:hover,
        .rbtn:focus,
        .rbtn:active {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            background: linear-gradient(57deg, #4760e9, #11cdde);
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        .cont {
            font-size: 24px;
        }
           .top-area
{
  background-color: #3FBBC0;
}
table{
  text-align: center;
  font-family: 'Lato', sans-serif;
    width: 85%;
    border-collapse: collapse;
 /* border: 1px solid black;*/
    padding: 3px;
    box-shadow: 5px 5px #E0EEEE;
    color:#4D71A3;
}
label{
  height: 90px;
  font-size: 20px;
  font-weight: bold;
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

.res{
    background: #3498DB ;
color: white;
font-size: 20px;
font-weight: bold;
text-align: center;
width: 75%;
padding: 16px 45px;
box-shadow: 3px 3px 3px 3px #AEC6CF;
}
header {
  position: fixed;
}
.site-header {
  width: 100%;
  /* background: #0f8a9d;*/
  background: linear-gradient(57deg, #4760e9, #11cdde);
}
nav {
  width: 100%;
  height: 80px;
  display: flex;
  color: white;
}
.bg {
  width: 100%;
  background: #0f8a9d;
  background: linear-gradient(90deg, #4760e9, #11cdde);
}
.bg1 {
  background-image: url(images/bg1.jpg);
  background-repeat: no-repeat;
  background-size: 100%;
  background-size: cover;
}
.logo {
  width: 50%;
  height: 80px;
}

.logo h1 {
  line-height: 80px;
  padding-left: 50px;
}

.menu {
  width: 50%;
  height: 80px;
}

.menu ul {
  width: 100%;
  height: 80px;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: center;
}
.menu a {
  text-decoration: none;
  color: white;
  font-weight: bolder;
}
.menu ul li {
  list-style: none;
  font-size: 15px;
  font-weight: bold;
  text-transform: uppercase;
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
            <a href="mainpage.php">
                <li>Home</li>
            </a>
             <a href="users.php ">
                        <li>View Users</li>
                    </a>
                    <a href="delete.php">
                        <li>Delete Users</li>
                    </a>
                    <a href="adminquiz.php">
                        <li>Quiz</li>
                    </a>
                    <a href="adminreview.php">
                        <li>Reviews</li>
                    </a>
            <a href="../includes/logout.php">
              <li>Logout</li>
            </a>
          </ul>
        </div>
            </nav>
        </header><br><br><br><br><br>
    <section>
        <div id="event1">
         <div class="content">
                <p>Students attended the event have posted some reviews
                    which may be helpful to you.<br>
                    If you have any FAQ you can contact us.
                </p>
            </div>
            <div class="gall">
                <div class="imag">
                    <img src="../images/events/event1(1).jpg">
                </div>
                <div class="imag">
                    <img src="../images/events/event1(2).jpg">
                </div>
                <div class="imag">
                    <img src="../images/events/event1(3).jpg">
                </div>
            </div>
            <hr>
        </div>

    </section>
    <section>
        <div class="revmain">
            <?php
            $sql = "SELECT * FROM reviews";
            $result = mysqli_query($con, $sql);
            echo "<center>";
            echo "<br><p class='res'>TOTAL REVIEWS <b>".mysqli_num_rows($result)."</b></p><br>";
            echo "<table>
            <tr>
            <th>Register No</th>
            <th>Name</th>
            <th>Review</th>
            <th>Event</th>
            </tr>";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $name = $row['name'];
                    $regno = $row['regno'];
                    $cont = $row['content'];
                    $event=$row['event'];
                   echo "<tr bgcolor=#FFFFFF>";
                    echo "<td>" . $regno . "</td>";
                    echo "<td> " . $name . "</td>";
                    echo "<td>" . $cont . "</td>";
                    echo "<td>" . $event . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan=4>No Reviews yet!!</td></tr>";
            }
            echo "</table>";
            ?>
        </div>

        <br><br><br>
    </section><br><br>
     <?php if (!empty($_SESSION['adminlogin'])) { ?>
        <section>
            <div class="addrev">
                <h2 style="color: black; text-align:left; padding-bottom:10px;">Add Reply</h2>
                <form action="" method="POST" class="rform">
                    <textarea name="content" id="rcontent" rows="5" placeholder="Write your reply here!!" required></textarea>
                    <input type="submit" value="Submit" name="rsubmit" class="rbtn">
                </form>
                <?php
                if (isset($_POST['rsubmit'])) {
                    $content = trim($_POST['content']);
                    $event='reply';
                    $email = "technetics@gmail.com";
                    $regno = "admin";
                    $fetch_name = "admin";
                        $sql2 = "INSERT INTO reviews(regno,name,email,event,content)
        VALUES ('$regno','$fetch_name','$email','$event','$content')";
                        $data = mysqli_query($con, $sql2);
                        if ($data) {
                            echo "<script type='text/javascript'>alert('Review Submitted!');</script>";
                            echo "<script type='text/javascript'>document.location='adminreview.php';</script>";
                        } else {
                            echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n";
                            echo "<script type='text/javascript'>alert('Error!');</script>";
                            header('Location: reviews.php');
                        }
                    }
                ?>
            </div>
        </section>
    <?php
    }
    ?>
</body>
</html>
<?php include('../includes/footer.php'); ?>