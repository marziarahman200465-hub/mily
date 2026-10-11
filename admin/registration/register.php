<?php 
require_once '../../config/db.php';
if(isset($_POST['register'])){
date_default_timezone_set('Asia/Dhaka'); 
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$reg_time=date("Y-m-d");
/* $inputError=array();
if(empty($first_name)){
    $inputError['first_name']="First Name is required";
}
if(empty($last_name)){
    $inputError['last_name']="Last Name is required";
}
if(empty($email)){
    $inputError['email']="Email is required";
}
if(empty($phone)){
    $inputError['phone']="Phone is required";
}
if(empty($password)){
    $inputError['password']="Password is required";
} */
}
$inputError=array();
if (empty($first_name)){
    $inputError['first_name']="First Name is required";

$text="my name is marzia rahman.";
/* echo strlen($text);
 echo ucwords($text); */
 echo ucfirst($text);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <link rel="stylesheet" href="css/registration.css">
</head>

<body>

    <div class="register-container">

        <!-- Left Section -->
        <div class="register-left">
            <div class="icon">👋</div>

            <h1>Welcome!</h1>

            <p>
                Create your account and join our community.
                Fill in your details to get started.
            </p>
        </div>


        <!-- Registration Form -->
        <div class="register-right">

            <h2>Create Account</h2>

            <p class="subtitle">
                Please fill in the information below.
            </p>

            <form action="register.php" method="POST">

                <div class="form-row">

                    <div class="form-group">
                        <label for="first_name">First Name</label>

                        <input
                            type="text"
                            id="first_name"
                            name="first_name"
                            placeholder="Enter first name" value="<?php if(isset($first_name)){echo $first_name;}?>"
                        > 
                        <!-- <label style="color:red;" for=""><?php if(isset($inputError['first_name'])){echo $inputError['first_name'];}?></label> -->
                        <label style="color:red;" for=""><?php if(isset($inputError['first_name'])){echo $inputError['first_name'];}?></label>
                    </div>


                    <div class="form-group">
                        <label for="last_name">Last Name</label>

                        <input
                            type="text"
                            id="last_name"
                            name="last_name"
                            placeholder="Enter last name" <!-- value="<?php if(isset($last_name)){echo $last_name;}?>" -->
                           
                        > <label style="color:red;" for=""><?php if(isset($inputError['last_name'])){echo $inputError['last_name'];}?></label>
                    </div>

                </div>


                <div class="form-group">
                    <label for="email">Email Address</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email" value="<?php if(isset($email)){echo $email;}?>"
                       
                    > <label style="color:red;" for=""><?php if(isset($inputError['email'])){echo $inputError['email'];}?></label>
                </div>


                <div class="form-group">
                    <label for="phone">Phone Number</label>

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="Enter phone number" value="<?php if(isset($phone)){echo $phone;}?>"
                       
                    > <label style="color:red;" for=""><?php if(isset($inputError['phone'])){echo $inputError['phone'];}?></label>
                </div>


                <div class="form-group">

                    <label>Gender</label>

                    <div class="gender-box">

                        <label>
                            <input
                                type="radio"
                                name="gender"
                                value="male"
                                
                            >
                            Male
                        </label>

                        <label>
                            <input
                                type="radio"
                                name="gender"
                                value="female"
                            >
                            Female
                        </label>

                        <label>
                            <input
                                type="radio"
                                name="gender"
                                value="other"
                            >
                            Other
                        </label>

                    </div>

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label for="password">Password</label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Enter password" value="<?php if(isset($password)){echo $password;}?>"
                           
                        > <label style="color:red;" for=""><?php if(isset($inputError['password'])){echo $inputError['password'];}?></label>

                    </div>


                    <div class="form-group">

                        <label for="confirm_password">
                            Confirm Password
                        </label>

                        <input
                            type="password"
                            id="confirm_password"
                            name="confirm_password"
                            placeholder="Confirm password" 
                        > 

                    </div>

                </div>


                <div class="terms">

                    <input
                        type="checkbox"
                        id="terms"
                        name="terms"
                        required
                    >

                    <label for="terms">
                        I agree to the
                        <a href="#">Terms & Conditions</a>
                        and
                        <a href="#">Privacy Policy</a>.
                    </label>

                </div>


                <button type="submit" class="register-btn" name="register">
                    Create Account
                </button>

            </form>


            <p class="login-text">
                Already have an account?
                <a href="login.php">Login Now</a>
            </p>

        </div>

    </div>

</body>
</html>
```
