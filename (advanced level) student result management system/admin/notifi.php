<?php
include "../phpcode/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    
    // Image upload handling
    $targetDirectory = "D:/project img/"; // Update the target directory
    $uploadedFileName = basename($_FILES["im"]["name"]);
    $targetFilePath = $targetDirectory . $uploadedFileName;
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    
    // Allow only image files
    if (in_array($fileType, array("jpg", "jpeg", "png"))) {
        if (move_uploaded_file($_FILES["im"]["tmp_name"], $targetFilePath)) {
            $conn = new mysqli("localhost", "root", "", "rm");
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            $imagePath = "path_to_your_uploaded_images/" . $uploadedFileName; // Update the path
            $sql = "INSERT INTO notification (title, im) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            if (!$stmt) {
                die("Error preparing statement: " . $conn->error);
            }
            $stmt->bind_param("ss", $title, $imagePath);
            if (!$stmt->execute()) {
                die("Error executing statement: " . $stmt->error);
            }
            $stmt->close();
            $conn->close();
            
            echo "Image uploaded and data inserted successfully.";
        } else {
            echo "Image upload failed.";
        }
    } else {
        echo "Only image files (jpg, jpeg, png) are allowed.";
    }
}
?>




<!DOCTYPE html>

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

<body>

   
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>STUDENT</em> DASHBOARD</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
    <ul class="main-menu">
        <li><a href="#">REGISTERED STUDENTS</a></li>
        <li><a href="uploadres.php">Upload Result</a></li>
        <li><a href="notifi.php">Update Notification</a></li>
        <li><a href="adminlog.php">Logout</a></li>
      </ul>
      </ul>
    </nav>
  </header>
  <br>
  <br>
  <section class="results">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Upload Images</h3>
                    <form id="uploadImages" action="#" method="post" class="container mt-4" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="title" type="text" class="form-control" id="title" placeholder="Title" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="im" type="file" accept=".jpg, .jpeg, .png" class="form-control" id="uploadImage" required="">
                                </fieldset>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" class="btn btn-primary" style="background-color: teal;">Upload</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
 
 
    
 

  
<br><br><br><br><br><br><br>
<br><br><br><br><br><br>
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