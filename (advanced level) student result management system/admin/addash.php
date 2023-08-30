<?php
include "../phpcode/connection.php";

// Fetch data from the registration table
$sql = "SELECT `S no.`, `name`, `email`, `number`, `university`, `regno`, `password` FROM registration";
$result = $conn->query($sql);

// Close the connection
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
<body>
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>ADMIN</em> DASHBOARD</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#">REGISTERED STUDENTS</a></li>
        <li><a href="uploadres.php">Upload Result</a></li>
        <li><a href="notifi.php">Update Notification</a></li>
        <li><a href="adminlog.php">Logout</a></li>
      </ul>
    </nav>
  </header>
  <br>
  <br>
  <br>
  <br>
  <section class="section" data-section="section1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Registered Students</h2>
          <table class="table">
            <thead>
              <tr>
                <th>Sno.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>University Name</th>
                <th>Registration Number</th>
                <th>Password</th>
              </tr>
            </thead>
            <tbody>
                            <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["S no."] . "</td>";
                                    echo "<td>" . $row["name"] . "</td>";
                                    echo "<td>" . $row["email"] . "</td>";
                                    echo "<td>" . $row["number"] . "</td>";
                                    echo "<td>" . $row["university"] . "</td>";
                                    echo "<td>" . $row["regno"] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No registered students found</td></tr>";
                            }
                            ?>
                        </tbody>
          </table>
         
        </div>
      </div>
    </div>
  </section>
  <br><br><br><br><br><br>
  
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