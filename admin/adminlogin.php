<?php include('..\includes\server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="..\css\adminlogin.css">
</head>
<body>
<div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__logo">
      <h1 class="logo__text"><span style="font-size: 35px;">T</span>ech<span style="font-size: 35px;">N</span>etics</h1>
    </div>
    <div class="thumbnail__content text-center">
      <img src="..\images\admin-final.png">
      <div class="heading--primary"><h1  style="left:35px"><!-- <span style="font-size: 35px;">T</span>ech<span style="font-size: 35px;">N</span>etics --> Admin Login</h1></div>
      <!-- <h2 class="heading--secondary">Login to attend various &nbsp;types of &nbsp;events, take part in &nbsp;<br>interactive sessions and enhance both your technical &nbsp;<br> and management skills.</h2> -->
    </div>
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
    <form method="POST" onsubmit="return validate()">
      <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
      
       <div class="form-group">
        <label for="email">Registration Number</label>
        <input class="form-control" type="text" name="regno" id="regno" placeholder="Registration Number"/>
         <div id="r"></div>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" id="email" placeholder="Email"/>
        <div id="e"></div>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="********"/>
        <div id="p"></div>
      </div>
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Sign In" name="admin_login" />
          </li><br>
          <li>
          </li>
        </ul>
      </div>
    </form>  
  </div>
</div>
<script src="..\scripts\adminlogin.js">
</script>
</body>
</html>