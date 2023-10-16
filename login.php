<?php
session_start();

if(isset($_SESSION['username']))
{
    header("location:homepage/homepage.php");
    exit;
}
require_once "config.php";
$username = $password = "";
$err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please Enter username and password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }

if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            header("location:homepage.php");
                         }
                    }
                 }
    }
}

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    </head>
    <body>
        <header class="header">

            <a href="#" class="logo"> <i class="fas fa-paw"></i> DUSTY PAW</a>
</header>        
    
       <div class="login-box">  
  <h2>Login</h2>  
  <form action="" method="post">  
   <div class="user-box">  
    <input type="text" name="username" required="">  
    <label>Username</label>  
   </div>  
   <div class="user-box">  
    <input type="password" name="password" required="">  
    <label>Password</label>  
   </div>  
   <a><button name="subject" type="submit" value="Donation.html">
    <span></span>  
   <span></span>  
   <span></span>  
   <span></span> Login</button></a>
   <a href="register.php"><button onclick="location.href=register.php'" type="button">
    <span></span>  
   <span></span>  
   <span></span>  
   <span></span> 
Sign Up</button></a>
 
 </form> 

 </div>   
        <script src="login.css" async defer></script>
    </body>
</html>