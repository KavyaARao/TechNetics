<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to TechNetics</title>

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="scripts/script.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato"
            rel="stylesheet">
        <style>
            * {box-sizing:border-box}
 
.dropdown {
  position:fixed;
  display: inline-block;

}
img{
  width: 380px;
  height: 200px;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  border-radius: 20px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: center;
  background-color: #6699cc;
  border-radius: 20px;
}

.dropdown-content a:hover {background-color: #f1f1f1;color: #6699cc;}

.dropdown:hover .dropdown-content {
  display: block;
  border-radius: 20px;
  width: 400px;
  background-color: #6699cc;
}

.dropdown:hover .dropbtn {
  border-radius: 20px;
  background-color: #3e8e41;
}
.btn{
  width: 400px;
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
            <a href="../includes/logout.php">
              <li>Logout</li>
            </a>
          </ul>
        </div>
            </nav>
        </header><br><br><br><br><br>
    <section>
     <div class="container">
     <div class="dropdown">
  <button class="btn"><img src="../images/users1.jpg">Users</button><br><br>
  <div class="dropdown-content">
  <a href="users.php">View </a>
  <a href="delete.php">Delete</a>
  </div>
</div>
  </div>
  <div class="container">
  <div class="dropdown">
  <button class="btn"><img src="../images/exam.jpg">Quiz</button><br><br>
  <div class="dropdown-content">
  <a href="adminquiz.php">Add Quiz</a>
  <a href="adminquiz.php">Results</a>
  </div>
</div>
  </div>
<div class="container">
<div class="dropdown">
  <button class="btn"><img src="../images/review.jpg">Review</button><br><br>
  <div class="dropdown-content">
  <a href="adminreview.php">View Reviews</a>
  </div>
</div>
</div>
    </section> 
<br><br><br>
    <footer class="footer">
      <div class="footer_info">
        <div class="footer_width about">
          <h2>TechNetics</h2>
          <p>
            TechNetics is an official student developers club of VIT University,
            Vellore, we deal with various domains under information technology.
            A technical club by the students and for the students of VIT
            University, Vellore.
          </p>
        </div>
        <div class="footer_width link">
          <h2>Quick Link</h2>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Sponsors</a></li>
          </ul>
        </div>
        <div class="footer_width Contact">
          <h2>Contact</h2>
          <ul>
            <li>
              <p>VIT University, Vellore</p>
            </li>
            <li>
              <a href="#">technetics@gmail.com</a>
            </li>
            <li>
              <a href="#">+91 9512307480</a>
            </li>
          </ul>
        </div>
        <div class="footer_width"></div>
      </div>
      <div class="copy-right">
        &copy;Copyright 2020 || All rights reserverd
      </div>
    </footer>
    </body>
</html>