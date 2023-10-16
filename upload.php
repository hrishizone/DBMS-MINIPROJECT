<!DOCTYPE html>
<html>
<head>
<title></title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="upload.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
       <div class="container">
           <h1 class="text-center text-white bg-dark" >Reports</h1>
           <br>
           <div class="table-responsiv">
            <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>ID</th>
                <th>Location</th>
                <th>Photo</th>
</thead>
<div class="login-box">  
  <!-- <h2>Login</h2>  -->
<form action="" method="post">
    <a href="homepage.php"><button onclick="location.href=homepage.php'" type="button" background="none">
Go To Home Page</button></a></form></div>
<tbody>
    <?php
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'displayupload');

    if(isset($_POST['report'])){

        $location = $_POST['location'];
        $files = $_FILES['file'];

        // print_r($location);
        // echo "<br>";
        // print_r($files);

        $filename  = $files['name'];
        $fileerror = $files['error'];
        $filetmp  = $files['tmp_name'] ;
         
        $fileext =explode('.',$filename);
        $filecheck = strtolower(end($fileext));
        $fileextstored = array('png', 'jpg', 'jpeg');

        if(in_array($filecheck,$fileextstored)){
            $destinationfile = 'upload/'.$filename;
            move_uploaded_file($filetmp,$destinationfile);

            $q= "INSERT INTO `imgupload`(`location`, `image`) VALUES ('$location','$destinationfile')";

            $query = mysqli_query($con, $q);

            $displayquery= "select * from imgupload ";
            $querydisplay = mysqli_query($con,$displayquery);

            // $row = mysqli_num_rows($querydisplay);
            while ( $result = mysqli_fetch_array($querydisplay)) {
            ?>
            <tr>
            <td><?php echo $result['id'];?></td>
            <td><?php echo $result['location'];?></td>
            <td><img src="<?php echo $result['image'];?>" height="100px" width="100px"></td>
            </tr>
            <?php
             }

        }
    }
    
    
    ?>

 </div> 
        
        <script src="upload.css" async defer></script>
    </body>
</html>
