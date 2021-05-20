<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        footer {
  position:relative;
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
<footer>
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