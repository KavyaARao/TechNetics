<?php
include('includes/server.php');
?>
<?php
if (isset($_POST['login'])) {
  $email = $_SESSION['email'];
  $regno = $_SESSION['regno'];
  if (!empty($email) && !empty($regno)) {
    $_SESSION['logged_in'] = true;
  }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome to TechNetics</title>
    <meta name="viewport" coantent="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
    <?php
   include('includes/header.php');
   ?>
    <section>
        <div class="rightside" id="home">
            <h2 style="color: black; text-align: center">Recruitments</h2>
            <hr />
            <div class="quiz">
                <h2 style="color: black;
            text-align: left;
            margin-left: 42px;
            padding-top: 0px;">
                    Process:
                </h2>
                <ul>
                    <li>Online Quiz</li>
                    <li>Interview</li>
                </ul>
            </div>
        </div>
        <div class="leftside">
            <h2 style="color: black; text-align: left">Instructions</h2>
            <p style="line-height: 30px;
          font-weight: 500;
          font-size: 18px;
          text-align: justify;
          margin-right: 8%;
          margin-bottom: 4%;">
                <span style="margin-left: 8%; font-weight: bold">TechNetics</span> is
                an official developers club, we deal with various domains under
                informaiton technology. Our primary intention is to promote all-round
                development of students through interactive sessions, events,
                workshops and projects that help them perceive real-world probems. We
                strive hard to educate and guide our members by equipping them with
                technical and management skills, thereby enabling them to make
                significant contributions towards the community.
            </p>
        </div>
    </section>
    <section>
        <div class="bg">
            <h2 style="font-size: 30px">Departments</h2>
            <hr>
            <div class="dept">
                <div class="container">
                    <div style="margin-top: 7.5px; height: 252px">
                        <h3>Technical</h3>
                        <p>
                            If you are a tech enthusiast and want to explore more about
                            technology by the means of networking with people then this is
                            the right department. So, start your journey by giving a simple
                            quiz which has basic programming related to questions.
                        </p>
                        <center><button class="btn btn2">Start Quiz</button></center>
                    </div>
                    <div class="container">
                        <div>
                            <h3>Management</h3>
                            <p>
                                If you are some one who wants to experience office life during
                                college, by managing events, our social media handle, team
                                members then this is the right department for you.
                            </p>
                            <center><button class="btn btn2">Start Quiz</button></center>
                        </div>
                    </div>
                    <div class="container">
                        <div>
                            <h3>Design</h3>
                            <p>
                                If you are good at poster designing and want to gain more
                                knowledge and experience by doing number of designs for the
                                club then this is the right department for you.
                            </p>
                            <center><button class="btn btn2">Start Quiz</button></center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
 include('includes/footer.php');
 ?>
</body>

</html>