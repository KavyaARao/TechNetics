<?php
include('includes/server.php');
include ('includes/config.php');
?>
<?php
$email = $_SESSION['email'];
$regno = $_SESSION['regno'];
if (!empty($email) && !empty($regno)) {
    $_SESSION['logged_in'] = true;
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome to TechNetics</title>

    <meta name="viewport" coantent="width=device-width, initial-scale=1" />
    <script src="scripts/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
    <header class="site-header">
        <div style="background-color: #fafafa; width: 100%; height: 20px"></div>
        <nav>
            <div class="logo">
                <h1>
                    <span style="font-size: 35px">T</span>ech<span style="font-size: 35px">N</span>etics
                </h1>
            </div>
            <div class="menu">
                <ul>
                    <?php
                    if (!empty($_SESSION['logged_in'])) { ?>
                        <a href="../Technetics-full/index2.php">
                            <li>Home</li>
                        </a>
                    <?php } else { ?>
                        <a href="../Technetics-full/index.php">
                            <li>Home</li>
                        </a>
                    <?php }
                    ?>
                    <a href="#events">
                        <li>Events</li>
                    </a>
                    <a href="#project">
                        <li>Projects</li>
                    </a>
                    <a href="#sponsors">
                        <li>Sponsors</li>
                    </a>
                    <a href="team.php">
                        <li>Team</li>
                    </a>
                    <?php
                    if (!empty($_SESSION['logged_in'])) { ?>
                        <a href="../Technetics-full/launchquiz.php">
                        <li>Quiz</li>
                        </a>
                        <a href="includes/logout.php" onclick="return confirm('Are you sure you want to logout')">
                            <li>Logout</li>
                        </a>
                    <?php } else { ?>
                        <a href="login.php">
                            <li>Login</li>
                        </a>
                    <?php }
                    ?>
                </ul>
            </div>
        </nav>
    </header>
    <section>
        <div class="rightside" id="home">
            <h2 style="color: black; text-align: center">Welcome to
                TechNetics</h2>
            <p>
                A technical club by the students and for the students of VIT
                University, Vellore.
            </p>
            <hr />
            <div class="wwd">
                <h2 style="color: black;
                        text-align: left;
                        margin-left: 42px;
                        padding-top: 0px;">
                    What we do?
                </h2>
                <ul>
                    <li>
                        <span style="font-weight: bold; font-size: 23px">O</span>rientation
                        Sessions<br />
                        <span style="font-weight: bold; font-size: 23px">W</span>orkshops,
                        Hackathons & Guest Lectures
                    </li>
                    <li>
                        <span style="font-weight: bold; font-size: 23px">W</span>eekly
                        Sessions on Technology<br />
                        <span style="font-weight: bold; font-size: 23px">P</span>ublishing
                        Research Papers & Projects
                    </li>
                </ul>
            </div>
        </div>
        <div class="leftside">
            <h2 style="color: black; text-align: left">About Us</h2>
            <p style="line-height: 30px;
                    font-weight: 500;
                    font-size: 18px;
                    text-align: justify;
                    margin-right: 8%;
                    margin-bottom: 4%;">
                <span style="margin-left: 8%; font-weight: bold">TechNetics</span> 
                is an official student developers club of VIT University, Vellore, we
                deal with various domains under information technology. Our primary
                intention is to promote all-round development of students through
                interactive sessions, events, workshops and projects that help them
                perceive real-world probems. We strive hard to educate and guide our
                members by equipping them with technical and management skills,
                thereby enabling them to make significant contributions towards the
                community.
            </p>
        </div>
    </section>
    <section id="events">
        <div class="bg events">
            <h2>Past Events</h2>
            <hr>
            <div class="container">
                <div style="margin-top: 7.5px">
                    <h3>TechHack</h3>
                    <p>
                         Our hackathon focuses on social obstacles and problems. Each team will be asked to ponder over the given problem statements and develop ideas and implement them either through software or both software and hardware to solve the problem. The teams with the best ideas and implementations will win.
                        <center><button class="btn" name="r1" value="TechHack"> <a href="review.php?event_id=1" style="color:black;">View Review</a> </button></center>
                    </p>
                </div>
                <div class="container">
                    <div>
                        <h3>Tech 1.0</h3>
                        <p>
                           Tech 1.0 is our flagship competitive coding event, where you can evaluate yourself with incremental difficulty of codes, and wide pallete of logical application. Coming back with the sixth iteration of Cook Off, TechNetics-VIT witnessed over 120+ participants from in and around VIT. With zealous participants, 8-hours of rigorous coding and exciting rewards, this event outdid the expectations of both participants and organizers.
                        <form action="" method="POST">
                            <center><button class="btn btn2" name="r2"><a href="review.php?event_id=2" style="color:black;">View Review</a></button></center>
                        </form>
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div>
                        <h3>CookIt 6.0</h3>
                        <p>
                             CookIt is our flagship competitive coding event, where you can evaluate yourself with incremental difficulty of codes, and wide pallet of logical application. Coming back with the sixth iteration of Cook Off, TechNEtics-VIT witnessed over 120+ participants from in and around VIT. With zealous participants, 8-hours of rigorous coding and exciting rewards, this event outdid the expectations of both participants and organizers.
                            <center><button class="btn btn2" name="r3"><a href="review.php?event_id=3" style="color:black;">View Review</a></button></center>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="left">
                    <h4>Upcoming Event</h4>
                    <h2>TechNocs</h2>
                    <p>The biggest Hack down South</p>
                </div>
                <div class="right">
                    <div class="countdown">
                        <div id="wk"></div>
                        <div id="day"></div>
                        <div id="hr"></div>
                    </div>
                    <?php
                    $_SESSION['eventname']="TechNocs";
                    ?>
                    <?php
                    if(isset($_GET['regevent']))
                    {
                    if($_GET['regevent']==true)
                    {
                      $reg=$_SESSION['regno'];
                      $email=$_SESSION['email'];
                      $en=$_SESSION['eventname'];
                      $check_exits="SELECT name FROM event WHERE RegNo='$reg'";
                      $result=mysqli_query($con,$check_exits);
                      if(mysqli_num_rows($result)>0)
                      {
                        echo "<script>alert('You are already registered for the event ! more details will be intimated to you very soon please wait!')</script>";
                      }
                      else
                      {
                                          $check_presence= "SELECT name FROM users WHERE register_no = '$reg'";
                      $res = mysqli_query($con, $check_presence);
                      $p=0;
                      if(mysqli_num_rows($res) > 0){
                      while ($row = mysqli_fetch_array($res)) {
                            $name= $row['name'];
                      }
                      $insert = "INSERT INTO event(RegNo,Name,Email,EventName) values(?,?,?,?)";
                          $stmt = mysqli_prepare($con, $insert);
                        mysqli_stmt_bind_param($stmt,"ssss",$reg,$name,$email,$en);
                          if(mysqli_stmt_execute($stmt)){
                              echo "<script>alert('You have been successfully registered for the event!!. Further information will be intimated to you!')</script>";
                          }else{
                              echo "<script>alert('Sorry there has been an issue!')</script>";
                          }
                      }  
    
                        }
                     }
                     } 
                     ?>
                <center><button type="button" class="btn" name="regevent" style="width: 170px;height: 50px; margin-top: 3rem;color: black;"><a href="index2.php?regevent=true" style="color: black;">Register Now</a></button></center>
                </div>
            </div>
        </div>
    </div>

    <!-- "Counter" Starts Here-->
    <div class="counter">
        <div class="container">
            <div id="projects">
                <h1>120+</h1>
                <h5>Projects</h5>
            </div>
            <div id="lines">
                <h1>20+</h1>
                <h5>Awards</h5>
            </div>
            <div id="coffee">
                <h1>90+</h1>
                <h5>Members</h5>
            </div>
        </div>
    </div>
    <!-- "Counter" Ends Here-->
    <section id="project" class="main special">
        <div class="proj">
            <h2>Projects</h2>
            <hr>
            <p>Projects are very fundamental thing, which will build the reputation of any club. We motivate ourselves to do as many and good projects that is helpful for all the students of our University. Below, mentioned are the departments that our club has done projects
            </p>


            <ul class="statistics">
                <li class="style1">
                    <strong>App</strong>Development
                </li>
                <li class="style2">
                    <strong>Web</strong>Development
                </li>
                <li class="style3">
                    <strong>IOT</strong>Internet of Things
                </li>
                <li class="style4">
                    <strong>Machine</strong>Learning
                </li>
                <li class="style5">
                    <strong>UI/UX</strong>Designing
                </li>
            </ul>
        </div>
    </section>
    <section id="sponsors">
        <div class="spons">
            <h1>SPONSORS</h1>
            <hr>
            <p>To become better, one must remember to be grateful to people who have contributed to making you who you are today. On that note we would like to thank our sponsors for their unwavering commitment and support.</p>
            <div class="spons sponsor">
                <img src="images/reg.png" alt="" />
                <img src="images/gatsby.png" width="200" height="100" />
            </div>
        </div>
    </section>
    <?php
    include("includes/footer.php");
    ?>
</body>
<script>
    //Function to display Countdown in banner
    function countDown() {
        let now = new Date().getTime();
        let gap = countDate - now;

        let second = 1000;
        let min = second * 60;
        let hour = min * 60;
        let day = hour * 24;
        let week = day * 7;

        let w = Math.floor(gap / (week));
        let d = Math.floor(gap % (week) / (day));
        let h = Math.floor(gap % (day) / (hour));

        document.getElementById('wk').innerText = w;
        document.getElementById('day').innerText = d;
        document.getElementById('hr').innerText = h;
    }
    setInterval(() => countDown(), 1000);
</script>

</html>