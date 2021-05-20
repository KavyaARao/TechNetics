<?php include('..\includes\server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>TechNetics |Admin Login</title>
  <link rel="stylesheet" type="text/css" href="..\css\login.css">
</head>

<body>
  <div class="signup__container">
    <div class="container__child signup__thumbnail">
      <div class="thumbnail__logo">
        <h1 class="logo__text"><span style="font-size: 35px;">T</span>ech<span style="font-size: 35px;">N</span>etics
        </h1>
      </div>
      <div class="thumbnail__content text-center">
        <img src="..\images\comp-final.png">
        <h1 class="heading--primary">Admin Login <span style="font-size: 50px"></span> <span style="font-size: 40px;">T</span>ech<span
            style="font-size:40px;">N</span>etics</h1>
      </div>
      <div class="signup__overlay"></div>
    </div>
    <div class="container__child signup__form">
      <form action="" method="POST" onsubmit="return validate()">
      <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
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
              <input class="btn btn--form" type="submit" value="Sign In" name="admin_login"/>
            </li>
            <li>
              <button type="button" class="home" name="Home"><a href="..\index.php"><i class="fa fa-home icon" style="color: white;"> Home</i></a></button>
            </li>
          </ul>
        </div>
      </form>
    </div>
  </div>
</body>
</html>