<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = trim($_POST['username']);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken";
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else {
                echo "Something went wrong";
            }
        }
    }
    mysqli_stmt_close($stmt);

if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

if(trim($_POST['password']) != trim($_POST['confirm_password']))
{
    $password_err = "Password should match";;
}

if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt){
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong....cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);

}




?>






<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dusty Paw Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="register.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    </head>
    <body>
        <header class="header">

            <a href="#" class="logo"> <i class="fas fa-paw"></i> DUSTY PAW</a>
</header>        
    
       <div class="login-box">  
  <h2>Sign Up</h2>  
  <form action="" method="post">  
   <div class="user-box">  
    <input type="text" name="" required="">  
    <label>Name</label>  
   </div>  
   <div class="user-box">  
    <input type="text" name="username" required="">  
    <label>Username</label>  
   </div>
   <div class="user-box">  
    <input type="password" name="password" required="">  
    <label>Password</label>  
   </div>
   <div class="user-box">  
    <input type="password" name="confirm_password" required="">  
    <label>Confirm Password</label>  
   </div>
   <div class="user-box">  
    <input type="text" name="" required="">  
    <label>Address</label>  
   </div>
   <div class="user-box">  
    <input type="text" name="" required="">  
    <label>City</label>  
   </div>
   <!-- <div class="user-box">  
    <input type="text" name="" required="">  
    <label>State</label>  
   </div> -->
   <div class="user-box">  
    <input type="text" name="" required="">  
    <label>ZIP</label>  
   </div>  

    <a><button name="subject" type="submit" value="Donation.html">
     <span></span>  
    <span></span>  
    <span></span>  
    <span></span> SignUp</button></a>
  </form> 

 </div>   
        <script src="login.css" async defer></script>
    </body>
</html>