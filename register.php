<?php include('includes/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css\register.css">
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
      <h1 class="logo__text"><span style="font-size: 35px;">T</span>ech<span style="font-size: 35px;">N</span>etics</h1>
    </div>
    <div class="thumbnail__content text-center">
      <img src="images\comp-final.png">
      <h1 class="heading--primary">Welcome to <span style="font-size: 35px;">T</span>ech<span style="font-size: 35px;">N</span>etics</h1>
      <h2 class="heading--secondary">Become a fast member of this official developers club in&nbsp;<br> Vellore Institute of Technology, Vellore. Where you will be&nbsp;<br> able to attend various types of events, take part in &nbsp;<br>interactive sessions and enhance both your technical &nbsp;<br> and management skills.</h2>
    </div>
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
    <form action="" onsubmit="return validate()" method="post">
    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
       <div class="form-group">
        <label for="email">Registration Number</label>
        <input class="form-control" type="text" name="regno" id="regno" placeholder="Registration Number"  />
         <div id="r"></div>
      </div>
      <div class="form-group">
        <label for="username">Name</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Name" />
       <div id="n"></div>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" id="email" placeholder="Email" /><br>
        <div id="e"></div>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password" placeholder="********"  />
        <div id="p"></div>
      </div>
      <div class="form-group">
        <label for="passwordRepeat">Confirm Password</label>
        <input class="form-control" type="password" name="confirmRepeat" id="confirmRepeat" placeholder="********" />
        <div id="cp"></div>
      </div>
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Register" name="register"/>
          </li><br>
          <li>
            <a class="signup__link" href="login.php">I am already a member</a>
          </li>
        </ul>
      </div>
    </form>  
  </div>
</div>
<script src="scripts\register.js">
</script>
</body>
</html>