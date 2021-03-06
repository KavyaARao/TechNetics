<?php
session_start();
include('config.php');
$email = "";
$name = "";
$errors = array();
//if user signup button
if(isset($_POST['register'])){
  $regno = mysqli_real_escape_string($con, $_POST['regno']);
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $cpassword = mysqli_real_escape_string($con, $_POST['confirmRepeat']);
  if($password !== $cpassword){
      $errors['password'] = "Confirm password not matched!";
  }
  $email_check = "SELECT * FROM users WHERE email = '$email'";
  $res = mysqli_query($con, $email_check);
  if(mysqli_num_rows($res) > 0){
      $errors['email'] = "Email that you have entered is already exist!";
  }
  if(count($errors) === 0){
      $code = rand(999999, 111111);
      $status = "notverified";
      $insert_data = "INSERT INTO users (register_no,name, email, password, code, status)
                      values('$regno','$name', '$email', '$password', '$code', '$status')";
      
      $data_check = mysqli_query($con, $insert_data);
      if($data_check){
          $subject = "Email Verification Code";
          $message = "Your verification code is $code";
          $sender = "From:naseerthanveer@gmail.com";
          if(mail($email, $subject, $message, $sender)){
              $info = "We've sent a verification code to your email - $email";
              $_SESSION['info'] = $info;
              $_SESSION['email'] = $email;
              header('location: user-otp.php');
              exit();
          }else{
              $errors['otp-error'] = "Failed while sending code!";
          }
      }else{
          $errors['db-error'] = "Failed while inserting data into database!";
      }
  }
}
//if user click verification code submit button
if(isset($_POST['check'])){
  $_SESSION['info'] = "";
  $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
  $check_code = "SELECT * FROM users WHERE code = $otp_code";
  $code_res = mysqli_query($con, $check_code);
  if(mysqli_num_rows($code_res) > 0){
      $fetch_data = mysqli_fetch_assoc($code_res);
      $fetch_code = $fetch_data['code'];
      $email = $fetch_data['email'];
      $code = 0;
      $status = 'verified';
      $update_otp = "UPDATE users SET code = $code, status = '$status' WHERE code = $fetch_code";
      $update_res = mysqli_query($con, $update_otp);
      if($update_res){
          $_SESSION['regno'] = $regno;
          $_SESSION['email'] = $email;
          header('location: login.php');
          exit();
      }else{
          $errors['otp-error'] = "Failed while updating code!";
      }
  }else{
      $errors['otp-error'] = "You've entered incorrect code!";
  }
}
 //if user click login button
 if(isset($_POST['login'])){
    $regno = mysqli_real_escape_string($con,$_POST['regno']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $check_email = "SELECT * FROM users WHERE email = '$email' and register_no='$regno'";
    $res = mysqli_query($con, $check_email);
    if(mysqli_num_rows($res) > 0){
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        if($password==$fetch_pass){
            $_SESSION['email'] = $email;
            $status = $fetch['status'];
            if($status == 'verified'){
              $_SESSION['email'] = $email;
              $_SESSION['regno'] = $regno;
              header('location: index2.php');
            }else{
                $info = "It's look like you haven't still verify your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['logged_in'] = true;
                header('location: user-otp.php');
            }
        }else{
            $errors['email'] = "Incorrect email or password!";
        }
    }else{
        $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
    }
}

  //if user click continue button in forgot password form
  if(isset($_POST['check-email'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $check_email = "SELECT * FROM users WHERE email='$email'";
    $run_sql = mysqli_query($con, $check_email);
    if(mysqli_num_rows($run_sql) > 0){
        $code = rand(999999, 111111);
        $insert_code = "UPDATE users SET code = $code WHERE email = '$email'";
        $run_query =  mysqli_query($con, $insert_code);
        if($run_query){
            $subject = "Password Reset Code";
            $message = "Your password reset code is $code";
            $sender = "From:naseerthanveer@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a passwrod reset otp to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['regno']=$regno;
                header('location: reset_password.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Something went wrong!";
        }
    }else{
        $errors['email'] = "This email address does not exist!";
    }
}
//if user click check reset otp button
if(isset($_POST['change_password'])){
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM users WHERE code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        $_SESSION['regno']=$regno;
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $update_pass = "UPDATE users SET code = $code, password = '$password' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: login.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }else{
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}
if(isset($_POST['admin_login'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $regno= mysqli_real_escape_string($con, $_POST['regno']);
    $check_aemail = "SELECT * FROM admin_table WHERE email = '$email'";
    $res = mysqli_query($con, $check_aemail);
    if(mysqli_num_rows($res) > 0){
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        if($password==$fetch_pass){
            $_SESSION['email'] = $email;
            $_SESSION['adminlogin']=true;
              header('location: ../admin/mainpage.php');
        }else{
            $errors['email'] = "Incorrect email or password!";
        }
    }else{
        $errors['email'] = "Incorrect email or password!";
    }
}
?>
