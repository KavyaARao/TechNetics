<?php include('includes/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>TechNetics | Login</title>
  <link rel="stylesheet" type="text/css" href="css\login.css">
  <style>
    .alert{
  color: red;
  font-weight: bold;
}
  </style>
</head>

<body>
  <div class="signup__container">
    <div class="container__child signup__thumbnail">
      <div class="thumbnail__logo">
        <h1 class="logo__text"><span style="font-size: 35px;">T</span>ech<span style="font-size: 35px;">N</span>etics
        </h1>
      </div>
      <div class="thumbnail__content text-center">
        <img src="images\comp-final.png">
        <h1 class="heading--primary">Welcome Back to <span style="font-size: 35px;">T</span>ech<span
            style="font-size: 35px;">N</span>etics</h1>
        <h2 class="heading--secondary">Login to attend various &nbsp;types of &nbsp;events, take part in
          &nbsp;<br>interactive sessions and enhance both your technical &nbsp;<br> and management skills.</h2>
      </div>
      <div class="signup__overlay"></div>
    </div>
    <div class="container__child signup__form">
      <form action="" method="POST" onsubmit="return validate()">
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
          <input class="form-control" type="text" name="regno" id="regno" placeholder="Registration Number" />
          <div id="r"></div>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" type="text" name="email" id="email" placeholder="Email" />
          <div id="e"></div>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password" id="password" placeholder="********" />
          <div id="p"></div>
        </div>
        <div class="m-t-lg">
          <ul class="list-inline">
            <li>
              <input class="btn btn--form" type="submit" value="Sign In" name="login"/>
            </li><br>
            <li>
              <a class="signup__link" href="forgot_password.php">Forgot Password?</a>
            </li><br>
            <li>
              <a class="signup__link" href="register.php">Don't Have an account? Register</a>
            </li>
          </ul>
        </div>
      </form>
    </div>
  </div>
  <script src="scripts\login.js">
  </script>
</body>

</html>