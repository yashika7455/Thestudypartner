<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>ThestudyPartner</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style2.css">
      <!-- <link rel="stylesheet" type="text/css" href="css/style1.css"> -->
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="header_bg">
            <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <img src="images/logo.jpg" class="image" alt="" width="48px" height="48px">
                  <a href="home.html" class="logo" >TheStudyPartner</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">About</a>
                        </li>
                        <!-- <li class="nav-item">
                           <a class="nav-link" href="services.html">Services</a>
                        </li> -->
                        <!-- <li class="nav-item">
                           <a class="nav-link" href="blog.html">Blog</a>
                        </li> -->
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                     </ul>
                     <div class="call_section">
                     <div class="quote_bt">
        <?php

        // Check the session email and provide appropriate link
        if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
            echo '<a href="home.php">Dashboard</a>';
        } else {
            echo '<a href="login.html">Login</a>';
        }
        ?>
    </div>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      <!--banner section start -->
      <div class="banner_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">Welcome To The Study Partner</h1>
                              <p class="banner_text">"The Study Partner" is an educational website designed to facilitate collaborative learning and enhance study efficiency through AI-driven tools</p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="#">About Us</a></div>
                                 <!-- <div class="quote_bt"><a href="#">Get A Quote</a></div> -->
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/img-1.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">Welcome To The Study Partner</h1>
                              <p class="banner_text">"The Study Partner" is an educational website designed to facilitate collaborative learning and enhance study efficiency through AI-driven tools</p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="#">About Us</a></div>
                                 <!-- <div class="quote_bt"><a href="#">Get A Quote</a></div> -->
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/img-1.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="banner_taital_main">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">Welcome To The Study Partner</h1>
                              <p class="banner_text">"The Study Partner" is an educational website designed to facilitate collaborative learning and enhance study efficiency through AI-driven tools</p>
                              <div class="btn_main">
                                 <div class="about_bt active"><a href="#">About Us</a></div>
                                 <!-- <div class="quote_bt"><a href="#">Get A Quote</a></div> -->
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="image_1"><img src="images/img-1.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" style="font-size:24px"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
            <i class="fa fa-arrow-right" style="font-size:24px"></i>
            </a>
         </div>
      </div>
      <!--banner section end -->
      </div>
      <!--header section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital"><span style="color: #fcce2d">Our</span> Courses</h1>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-6" id="col-md-6-edit">
                     <div class="image_main">
                        <img src="images/html.jpg" class="image_8">
                        <div class="text_main">
                           <div class="seemore_text">HTML</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6" id="col-md-6-edit">
                     <div class="image_main">
                        <img src="images/php.jpg" class="image_8">
                        <div class="text_main">
                           <div class="seemore_text">PHP</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6" id="col-md-6-edit">
                     <div class="image_main">
                        <img src="images/bootstrap.jpg" class="image_8">
                        <div class="text_main">
                           <div class="seemore_text">Bootstrap</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6" id="col-md-6-edit">
                     <div class="image_main">
                        <img src="images/jquery.jpg" class="image_8">
                        <div class="text_main">
                           <div class="seemore_text">JQuery</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>            
      </div>
      <!-- services section end -->
      <!-- about section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <h1 class="news_taital">Our About</h1>
            <p class="news_text">"An interactive platform for collaborative learning and cognitive skill enhancement."
            </p>
            <div class="news_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="news_taital_box">
                        <p class="date_text">01 Jan 2024</p>
                        <h4 class="make_text">Make it Simple</h4>
                        <p class="lorem_text">StudyPartner is an educational website designed to foster collaboration and learning among students. It offers a range of tools and resources to help users study more effectively, including study groups, flashcards, and interactive quizzes.
                        <p class="post_text">Post By : Yashika</p>
                     </div>
                  </div>
                  <div class="col-md-6" id="#col-md-6-edit">
                     <img src="images/img-6.png" class="image_6">
                     <h6 class="plus_text">+</h6>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
            <h1 class="news_taital">Our Blog</h1>
            <p class="news_text">"Your go-to educational hub, offering comprehensive tutorials, insightful blogs, and interactive learning tools for students."</p>
            <div class="blog_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <img src="images/img-7.png" class="image_7" style="width:100%">
                  </div>
                  <div class="col-md-6">
                     <h4 class="classes_text">Best Classes and study</h4>
                     <p class="ipsum_text">StudyPartner is an educational website offering best-in-class study resources and classes. It's designed for students seeking to enhance their learning experience with quality materials and expert guidance. StudyPartner provides a comprehensive and interactive platform for academic success.</p>
                  </div>
               </div>
            </div>
            <div class="read_bt"><a href="#">Read More</a></div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="client_taital">Testimonial</h1>
                     <div class="client_section_2">
                        <div class="client_left">
                           <div><img src="images/client-img.png" class="client_img"></div>
                        </div>
                        <div class="client_right">
                           <h3 class="client_name">TheStudyPartner</h3>
                           <p class="client_text">StudyPartner is an innovative educational website designed to enhance learning experiences through collaborative study sessions and tailored tutoring. It offers diverse resources and real testimonials highlight its effectiveness in improving academic performance.





                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="client_taital">Testimonial</h1>
                     <div class="client_section_2">
                        <div class="client_left">
                           <div><img src="images/client-img.png" class="client_img"></div>
                        </div>
                        <div class="client_right">
                           <h3 class="client_name">TheStudyPartner</h3>
                           <p class="client_text">StudyPartner is an innovative educational website designed to enhance learning experiences through collaborative study sessions and tailored tutoring. It offers diverse resources and real testimonials highlight its effectiveness in improving academic performance.





                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <h1 class="client_taital">Testimonial</h1>
                     <div class="client_section_2">
                        <div class="client_left">
                           <div><img src="images/client-img.png" class="client_img"></div>
                        </div>
                        <div class="client_right">
                           <h3 class="client_name">TheStudyPartner</h3>
                           <p class="client_text">StudyPartner is an innovative educational website designed to enhance learning experiences through collaborative study sessions and tailored tutoring. It offers diverse resources and real testimonials highlight its effectiveness in improving academic performance.





                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
             <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
             <i class="fa fa-angle-right" style="font-size:24px"></i>
            </a>
         </div>
      </div>
      <!-- client section end -->
      <!-- newsletter section start -->
      <div class="newsletter_section layout_padding">
         <div class="container">
            <div class="newsletter_main">
               <h1 class="newsletter_taital">Get<br> Your free consulting </h1>
               <div class="get_quote_bt"><a href="#">Get A Quote</a></div>
            </div>
            <p class="dolor_text">"StudyPartner offers free consulting to enhance your learning journey. Access personalized advice and resources to boost your academic performance. Start improving today!" </p>
         </div>
      </div>
      <!-- newsletter section end -->

      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 padding_left0">
                  <div class="mail_section">
                     <div class="contact_img">
                        <h1 class="contact_taital">Best Educations In World Here</h1>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="map_main"><img src="images/map-img.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            <input type="text" class="email_text" placeholder="Enter Your Email" name="Enter Your Email">
            <div class="footer_section_2">
               <div class="row">
                  <div class="col-lg-3 margin_top">
                     <div class="call_text"><a href="#"><img src="images/call-icon1.png"><span class="padding_left_15">Call Now +91 8307104446</span></a></div>
                     <div class="call_text"><a href="#"><img src="images/mail-icon1.png"><span class="padding_left_25">yashika@gmail.com</span></a></div>
                  </div>
                  <div class="col-lg-3">
                     <div class="information_main">
                        <h4 class="information_text">Information</h4>
                        <p class="many_text">StudyPartner is an educational website offering a wide range of courses and innovative teaching methods, designed to enhance learning.</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="information_main">
                        <h4 class="information_text">Helpful Links</h4>
                        <div class="footer_menu">
                           <ul>
                              <li><a href="index.html">Home</a></li>
                              <li><a href="about.html">About</a></li>
                              <!-- <li><a href="services.html">Services</a></li> -->
                              <li><a href="blog.html">Blog</a></li>
                              <li><a href="news.html">News</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="information_main">
                        <div class="footer_logo"><a href="index.html">TSP</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2024 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

