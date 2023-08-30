<?php 

include "../student/slogin.php";


?>










<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>RESULTS & MANAGEMENT</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css&js/css/fontawesome.css">
    <link rel="stylesheet" href="../css&js/css/main.css">
    <link rel="stylesheet" href="../css&js/css/owl.css">
    <link rel="stylesheet" href="../css&js/css/lightbox.css">



  </head>

<body style="background-color: teal;">

   
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>STUDENT</em> LOGIN</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="../index.php">Home</a></li>
          <li><a href="../admin/adminlog.php">Admin Login</a></li>
          
        </ul>
      </ul>
    </nav>
  </header>
  
        
  

 
    
  <section class="section coming-soon" data-section="section3">
    <div class="col-md-5 mx-auto">
        <form id="contact" action="slogin.php" method="post" class="text-center">
            <div class="row">
                <div class="col-md-12">
                    <fieldset>
                        <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                    </fieldset>
                </div>

                <div class="col-md-12">
                    <fieldset>
                        <input name="password" type="password" class="form-control" id="password" placeholder="Enter Your Password" required="">
                    </fieldset>
                </div>
                <div class="col-md-12">
                    <fieldset>
                        <button type="submit" id="form-submit" class="button">Login</button>
                    </fieldset>
                </div>
                <div class="col-md-12">

                   <a href=""><h5 style="color:white;">Forgot Password?</h5></a> 
                  
                </div>
            </div>
        </form>
    </div>
</section>

  
<br><br>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2020 by Result Management 
          
           | Design: <a href="https://www.linkedin.com/in/%F0%9D%92%AB%F0%9D%93%87%F0%9D%92%B6%F0%9D%93%89%F0%9D%93%8E%F0%9D%93%8A%F0%9D%93%88%F0%9D%92%BD-%F0%9D%91%85%F0%9D%92%B6%F0%9D%92%BF-3a3b8b206/" rel="sponsored" target="_parent">Pratyush Raj</a></p>
        </div>
      </div>
    </div>
  </footer>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../css&js/js/isotope.min.js"></script>
    <script src="../css&js/js/owl-carousel.js"></script>
    <script src="../css&js/js/lightbox.js"></script>
    <script src="../css&js/js/tabs.js"></script>
    <script src="../css&js/js/video.js"></script>
    <script src="../css&js/js/slick-slider.js"></script>
    <script src="../css&js/js/custom.js"></script>
    
</body>
</html>