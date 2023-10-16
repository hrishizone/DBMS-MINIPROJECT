<?php 
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fostering System</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="homepage.css">

</head>
<body>
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-paw"></i> DUSTY PAW</a>

    <nav class="navbar">
        <!-- <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#shop">donate</a>
        <a href="#services">volunteer</a>
        <a href="#contact">contact</a> -->
        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
        <a href="swap.htm">Explore</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

    <form action="" class="login-form">
        <h3><?php echo "welcome ". $_SESSION['username']?></h3>
        <!-- <input type="email" name="" placeholder="Phone number, email or username" id="" class="box">
        <input type="password" name="" placeholder="Password" id="" class="box">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <div class="links">
            <a href="#">forget password</a> -->
            <a href="logout.php">log out</a>
        </div>
    </form>

</header>

<!-- header section ends -->

<!-- home section starts  -->


<section class="home" id="home">

    <div class="content">
        <h3> <span>hi,</span> Welcome To Dusty Paw </h3>
        <a href="#" class="btn">Explore</a>
    </div>

    <!-- <img src="image/top_wave.png" class="wave" alt=""> -->

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="image/new.png" alt="">
    </div>

    <div class="content">
        <h3>Feed A<span> Stray Dog</span>, Today!</h3>
        <p>All They Want Is Food, Shelter, Care And Some Love.</p>
        <a href="Donation.html" class="btn">Donate Now</a>
    </div>

</section>

<!-- about section ends -->

<!--  section starts -->

<div class="dog-food">

    <div class="image">
        <img src="image/adopt.png" alt="">
    </div>

    <div class="content">
        <h3>Let's<span> Help </span> The Needy </h3>
        <p>When You Look Into The Eyes Of An Animal You've Rescued, You Can't Help But Fall In Love</p>
        <a href="adoption.html" class="btn">Adopt Now</a>
    </div>

</div>

<div class="cat-food">

    <div class="content">
        <h3> <span>Let's See Them,</span> Before They See Us </h3>
        <p>Report Stray dog to be rescued</p>
            <a href="report.php" class="btn">Report Now</a>
    </div>

    <div class="image">
        <img src="image/motopaws.png" alt="">
    </div>

</div>

<!-- ends -->

<!--  starts  -->

<section class="shop" id="shop">

    <h1 class="heading">Pets Available For<span> Adoption </span> Nearby </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="adoption.html" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image//coco.png" alt="">
            <div class="overlay"></div>
            </div>
            <div class="content">
                <h3>Coco</h3><h1>8 Months And 7 Days Old</h1>
                <hr>
                <p>Male, Bangalore</p>
                <!-- <div class="amount"> Male, Bangalore</div> -->
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="adoption.html" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/bruno.png" alt="">
                <div class="overlay"></div>
            </div>
            <div class="content">
                <h3>Bruno</h3><h1>4 Years, 8 Months And 12 Days Old</h1>
               <hr>
               <p>Male, Pune</p>
               <!-- <div class="amount">Male, Pune</div> -->
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="adoption.html" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/lisa.png" alt="">
                <div class="overlay"></div>
            </div>
            <div class="content">
                <h3>Lisa</h3><h1>1 Year, 3 Months And 16 Days Old</h1>
                <hr>
                <p>Female, Pune</p>
                <!-- <div class="amount"> Female, Pune</div> -->
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="adoption.html" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/unk.png" alt="">
                <div class="overlay"></div>
            </div>
            <div class="content">
                <h3>Inu</h3><h1>(Stray Dog)</h1>
                <hr>
                <p>Female, Pune</p>
                <!-- <div class="amount"> Female, Pune</div> -->
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="adoption.html" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/hatichi.png" alt="">
                <div class="overlay"></div>
            </div>
            <div class="content">
                <h3>Hatichi</h3><h1>4 Months And 10 Days Old</h1>
                <hr>
                <p>Male, Nashik</p>
                <!-- <div class="amount"> Male, Nashik</div> -->

            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="adoption.html" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="image/rafa.png" alt="">
                <div class="overlay"></div>
            </div>
            <div class="content">
                <h3>Rafa</h3><h1>1 Year, 2 Months And 3 Days</h1>
                <hr>
                <p>Male, Sangamner</p>
                <!-- <div class="amount">Male, Sangamner</div> -->
            </div>
        </div>

    </div>

</section>

<!-- shop section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>projects</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-dog"></i>
            <h3>STERILIZATIONS</h3>
            <a href="#" class="btn">read more</a>
        </div>

        <div class="box">
            <i class="fas fa-home"></i>
            <h3>SANCTUARY</h3>
            <a href="#" class="btn">read more</a>
        </div>

        
    </div>

</section>

<!-- services section ends -->

<!-- plan section starts  -->

<section class="plan" id="plan">

    <h1 class="heading"> Saving Animals. <span> Serving Community</span></h1>

    <div class="box-container">

        <div class="box">
            <h3 class="day">    </h3>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <i class="fas fa-syringe icon">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </i>
            <i class="fas fa-home icon">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</i>
            <i class="fas fa-drumstick-bite icon">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</i>
            <i class="fas fa-ambulance icon"></i>
            
            <div class="list">
                <p> Vaccination</p>
                <p>Shelter</p>
                <p>Daily Meals </p>
                <p>Medical Treatment</p>
            </div>
            <div class="amount"><span class="fas fa-rupee-sign"></span>10-<span class="fas fa-rupee-sign"></span>1000</div>
            <a href="Donation.html" class="btn">Donate</a>
        </div>
    </div>

</section>

<!-- plan section ends -->

<section class="contact" id="contact">

    <div class="image">
        <img src="image/adoptme.png" alt="">
    </div>

    <form action="">
        <h3>For adoption queries:</h3>
        <input type="text" placeholder="Name" class="box">
        <input type="email" placeholder="Email" class="box">
        <input type="tumber" placeholder="Contact Number" class="box">
        <textarea name="" placeholder="Your Message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Send Message" class="btn">
    </form>

</section>
<!-- <div class="test">
<centre><h1>TESTIMONIALS</h1></centre></div>
<section class="main">

  <div class="wrap wrap--1">  
   <div class="container container--1">  
    <p>Person 1</p> 
    
   </div>  
  </div>  
  <div class="wrap wrap--2">  
   <div class="container container--2">  
    <p>Person 2</p>  
   </div>  
  </div>  
  <!-- <div class="wrap wrap--3">  
   <div class="container container--3">  
    <p>S V Dongare</p>  
   </div>  
  </div>   -->
 </section> -->

<section class="footer">

    <img src="image/top_wave.png" alt="">

    <div class="share">
        <a href="#" class="btn"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#" class="btn"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#" class="btn"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#" class="btn"> <i class="fab fa-youtube"></i> YouTube </a>
    </div>

    <!-- <div class="credit"> <span>HRISHIKESH TANYA MAYANK x PGA</span></div> -->

</section>

<!-- custom js file link  -->
<script src="homepage.js"></script>

</body>
</html>