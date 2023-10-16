<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Report</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="report.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    </head>
    <body>
        <header class="header">

            <a href="#" class="logo"> <i class="fas fa-paw"></i> DUSTY PAW</a>
</header>        
    
       <div class="login-box">  
  <h2>Report </h2>  
  <form action="upload.php" method="post" enctype="multipart/form-data">  
   <div class="user-box">  
    <input type="text" name="location" required="">  
    <label>Location</label>  
   </div>  
   <div class="user-box">
    <input type="file" name="file" id="file" required="">  
    <!-- <label for="file">Image</label> -->
     
   </div>  
   <a><button name="report" onclick="location.href=homepage.php" type="submit" value="submit">
    <span></span>  
   <span></span>  
   <span></span>  
   <span></span> Report</button></a>
 </form> 

 </div>   
        <script src="report.css" async defer></script>
    </body>
</html>