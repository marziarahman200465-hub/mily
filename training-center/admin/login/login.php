<?php
require_once '../../config/db.php';
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $error=array();
    $email_check=mysqli_query($dbcon,"SELECT * FROM `users` WHERE `email`='$email'");
    if(mysqli_num_rows($email_chack)>0){
        $rows=mysqli_fetch_assoc($email_chack);

        if($rows['password']==md5($password)){
            $_SESSION['email_login']=$email;
            header('Location:../dashboard/admin_index.php');

        }else{
            $error['password_check']="Your password is wrong";
        }

    }else{
        $error['email_check']="This email is not found!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div class="login-card">
        <div class="login-header">
            <h2>Welcome Back!</h2>
            <p>Please login to your account</p>
        </div>
        
        <form>
          <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email" placeholder="Enter your email" name="email" required>
</div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" id="password" placeholder="Enter your password" name="password" required>
</div>

            <div class="form-options">
            
                <a href="#">Forgot Password?</a>
            </div>

            <button type="submit" class="login-btn">Login</button>

            <div class="register-text">
                Don't have an account? <a href="../registration/register.php">Register Now</a>
            </div>
        </form>
    </div>

</body>
</html>