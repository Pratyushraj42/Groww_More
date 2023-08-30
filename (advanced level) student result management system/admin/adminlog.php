
<?php
include "../phpcode/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["Password"];

    // Prepare and execute the SQL query
    $sql = "SELECT * FROM adminlog WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Successful login
        session_start();
        $_SESSION["email"] = $email;
        header("Location: addash.php"); // Redirect to the dashboard page
        exit();
    } else {
        // Invalid login
        echo "Invalid email or password.";
    }

    $stmt->close();
}

$conn->close();
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
            <a href="index.php"><em>ADMIN</em> LOGIN</a>
        </div>
        <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
                <li><a href="../index.php">Home</a></li>
                
                        <li><a href="../student/stulog.php">Student Login</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    
  
        
  

 
    
  <section class="section coming-soon" data-section="section3">
    <div class="col-md-5 mx-auto"> <!-- Add mx-auto class to center-align the form -->
    <form id="admin" action="adminlog.php" method="post" class="text-center">

    
            <div class="row">
                <div class="col-md-12">
                    <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required>
                    </fieldset>
                </div>

                <div class="col-md-12">
                    <fieldset>
                    <input name="Password" type="password" class="form-control" id="password" placeholder="Enter Your Password" required>
                    </fieldset>
                </div>
                <div class="col-md-12">
                    <fieldset>
                  <button type="submit" name="register_submit" id="form-submit" class="button">Login</button>
                    </fieldset>
                    
                </div>
                
            </div>
            
        </form>
    </div>
</section>
  
<br><br><br>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2020 by Resul Management 
          
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
