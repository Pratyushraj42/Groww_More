
<?php
include '/xampp/htdocs/t3/phpcode/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $university = $_POST['university'];
    $regno = $_POST['regno'];
    $password = $_POST['password'];

    // Insert data into the 'student' table
    $query = "INSERT INTO registration (name, email, number, university, regno, password) VALUES ('$name', '$email', '$number', '$university', '$regno', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Student added successfully!";
    } else {
        echo "Error adding student: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>RESULTS & MANAGEMENT</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css&js/css/fontawesome.css">
    <link rel="stylesheet" href="css&js/css/main.css">
    <link rel="stylesheet" href="css&js/css/owl.css">
    <link rel="stylesheet" href="css&js/css/lightbox.css">



  </head>

<body>

   
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>RESULT</em> MANAGEMENT</a>
    </div>
    <a href="#" class="menu-link"><i class="fa fa-bars" id="menu"></i></a>
    <nav id="menu" class="main-nav" >
      <ul class="main-menu">
        <li><a href="#section1">Home</a></li>
        <li class=""><a href="#section2">About Us</a></li>
        <li><a href="#section4">Universities</a></li>
        <li class="main-menu"><a href="#section3" id="login-link">Register or Login</a>
        <li><a href="#section6">Contact</a></li>
        
          </ul>
        </li>
      </ul>
    </nav>
    
  </header>

  
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="../t3/css&js/images/ex.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Universities Result Management</h6>
              <h2><em>Students</em> Result</h2>
              
          </div>
      </div>
  </section>
  


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Universities</h4>
              </div>
              <div class="content-hide">
                <p>Our services encompass a consortium of distinguished universities, each contributing to a comprehensive and esteemed academic network.</p>
                
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Register</h4>
              </div>
              <div class="content-hide">
                <p>Prior to accessing their results, students are required to complete the registration process for our services. This procedural step ensures a streamlined and secure experience for obtaining their academic outcomes.</p>
                
                
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Easy Access</h4>
              </div>
              <div class="content-hide">
                <p>The user interface has been meticulously crafted to facilitate universal comprehension and seamless accessibility for all users. Its design embodies an intuitive approach, ensuring a user-friendly experience across the board.</p>
                
                
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section why-us" data-section="section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Why choose Result Management?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>Fast Updation</a></li>
              <li><a href='#tabs-2'>Easy Access</a></li>
              <li><a href='#tabs-3'>Several Universities</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="css&js/images/fast.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Fast Updation</h4>
                    <p>Upon the prompt declaration of results, our dedicated team promptly undertakes the task of expeditiously updating the outcomes for students. Simultaneously, our team implements robust measures to safeguard against potential disruptions caused by high volumes of traffic, thereby ensuring the stability and uninterrupted functionality of the website.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="css&js/images/easy.avif" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Easy Access</h4>
                    <p>The user interface has been meticulously crafted to ensure universal comprehension and seamless accessibility for all users. Our commitment to user-friendliness guarantees that individuals of varying backgrounds can easily navigate and utilize our services. Additionally, our dedicated team is readily available to provide assistance to students via a contact form, addressing any queries or support requirements that may arise.</p> 
                    
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="css&js/images/uni.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Several Universities</h4>
                    <p>Numerous esteemed universities have enthusiastically enrolled for our services and are currently reaping the substantial benefits we offer.These universities, recognized for their commitment to excellence, have chosen to collaborate with us due to our unparalleled expertise in providing cutting-edge services. Our collaborative efforts have resulted in a symbiotic relationship, allowing these institutions to harness the full potential of our offerings and elevate their educational standards.</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
            <div>
              <h4><em>LOGIN </em>OR <em>REGISTER</em></h4>
            </div>
          </div>
        </div>
      

       
        <div class="col-md-5">
          <div class="right-content">
            
            <form id="registration-form" action="index.php" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>/
                <div class="col-md-12">
                  <fieldset>
                    <input name="number" type="text" class="form-control" id="phone-number" placeholder="Your Phone Number" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="university" type="text" class="form-control" id="university" placeholder="University Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="regno" type="text" class="form-control" id="regno" placeholder="Registration Number" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Enter Your Password" required="">
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" name="register_submit" id="form-submit" class="button">Register</button>
                    <button type="" name="register_submit" id="form-submit" class="button"><a style="color: white;" href="../t3/student/stulog.php">Login</a> </button>
                  </fieldset>
                  
   

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section courses" data-section="section4">
    
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h3><b> <em> UNIVERSITIES</em></b> </h3>
          </div>
        </div>
        <div class="owl-carousel owl-theme">
          <div class="item">
            <img src="css&js/images/aarya.png" alt="Course #1">
            <div class="down-content">
              <h4>Aaryabhatt University</h4>
              <p>Aryabhatt Knowledge University (AKU) is a renowned state university located in Patna, Bihar, India. It offers a wide range of undergraduate and postgraduate courses in disciplines like engineering, medicine, management, and more.</p>
            </div>
          </div>
          <div class="item">
            <img src="css&js/images/patli.webp" alt="Course #2">
            <div class="down-content">
              <h4>Patliputra University</h4>
              <p>Patliputra University, located in Patna, Bihar, is a prominent public university offerering a wide range of undergraduate and postgraduate programs in various disciplines.</p>
              
            </div>
          </div>
          <div class="item">
            <img src="css&js/images/nalan.jpg" alt="Course #3">
            <div class="down-content">
              <h4>Nalanda University</h4>
              <p>Nalanda University, located in Patna, Bihar, is a historic and renowned ancient center of learning in India, dating back to the 5th century CE. It was a vibrant hub for Buddhist studies and other disciplines, attracting scholars from across Asia.</p>
              
            </div>
          </div>
          <div class="item">
            <img src="css&js/images/bhagal.jpg" alt="Course #4">
            <div class="down-content">
              <h4>Bhagalpur University</h4>
              <p>Bhagalpur University, officially known as Tilka Manjhi Bhagalpur University (TMBU), is located in Bhagalpur, Bihar, India. Established in 1960, it offers a range of undergraduate, postgraduate, and doctoral programs across various disciplines.</p>
              
            </div>
          </div>
          <div class="item">
            <img src="css&js/images/bhu.jpg" alt="">
            <div class="down-content">
              <h4>Banaras Hindu University</h4>
              <p>Banaras Hindu University (BHU) is a renowned public university located in Varanasi, India. Founded in 1916 by Madan Mohan Malaviya, it offers a diverse range of undergraduate, postgraduate, and research programs across various disciplines.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section contact" data-section="section6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-6">
         <form id="contact-form" action="index.php" method="post">
            <div class="row">
              <div class="col-md-6">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" name="contact_submit" id="form-submit" class="button">Send Message Now</button>
                  

                </fieldset>
              </div>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </section>

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

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="css&js/js/isotope.min.js"></script>
    <script src="css&js/js/owl-carousel.js"></script>
    <script src="css&js/js/lightbox.js"></script>
    <script src="css&js/js/tabs.js"></script>
    <script src="css&js/js/video.js"></script>
    <script src="css&js/js/slick-slider.js"></script>
    <script src="css&js/js/custom.js"></script>
    <script>
      $('.nav li:first').addClass('active');
  
      var showSection = function showSection(section, isAnimate) {
          var direction = section.replace(/#/, ''),
              reqSection = $('.section').filter('[data-section="' + direction + '"]'),
              reqSectionPos = reqSection.offset().top - 0;
  
          if (isAnimate) {
              $('body, html').animate({
                  scrollTop: reqSectionPos
              }, 800);
          } else {
              $('body, html').scrollTop(reqSectionPos);
          }
      };
  
      var checkSection = function checkSection() {
          $('.section').each(function () {
              var $this = $(this),
                  topEdge = $this.offset().top - 80,
                  bottomEdge = topEdge + $this.height(),
                  wScroll = $(window).scrollTop();
              if (topEdge < wScroll && bottomEdge > wScroll) {
                  var currentId = $this.data('section'),
                      reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                  reqLink.closest('li').addClass('active').
                  siblings().removeClass('active');
              }
          });
      };
  
      $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if ($(e.target).hasClass('external')) {
              return;
          }
          e.preventDefault();
          var href = $(this).attr('href');
          if (href === "adminlog.html" || href === "stulog.html") {
              window.location.href = href; // Redirect to admin or student login page
          } else {
              $('#menu').removeClass('');
              showSection(href, true);
          }
      });
  
      $(window).scroll(function () {
          checkSection();
      });
  </script>
  
</body>
</html>