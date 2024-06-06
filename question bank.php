
<?php
session_start();

// Check if user is logged in and session variables are set
if(isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['profile'])) {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $profile_pic = $_SESSION['profile'];
} else {
    // Redirect user to login page if session variables are not set
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>


   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      .question{
         position: relative;
         margin-left: 20px;
      }
      .pic{
        width: 80%;
        height: 70%;
        position: relative;
        left: 200px;
      }
      .inline-btn{
         position: relative;
         left: 210px;
      }
      h3,span{
         margin-left: 210px;

      
      

      }
      .question1{
         height: 409px;
         width: 409px;
         /* border: 1px solid red; */

      }
      body{
         padding-left: 0rem;
      }

   </style>
</head>
<body>

<header class="header">
   
   <section class="flex">
      <img src="images/logo.jpg" class="image" alt="" width="48px" height="48px">
      <a href="home.html" class="logo">TheStudyPartner</a>

      <!-- <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." max-length="100">
         <button type="submit" class="fas fa-search"></button>
      </form> -->

      <div class="icons">
         <!-- <div id="menu-btn" class="fas fa-bars"></div> -->
         <!-- <div id="search-btn" class="fas fa-search"></div> -->
         <!-- <div id="user-btn" class="fas fa-user"></div> -->
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/somi.jpg" class="image" alt="">
         <h3 class="name">somi kumari</h3>
         <p class="role">student</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.html" class="option-btn">login</a>
            <a href="register.html" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<!-- <div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div> -->

   <!-- <div class="profile">
      <img src="images/somi.jpg" class="image" alt="">
      <h3 class="name" style="margin-left: 10px;">somi kumari</h3>
      <p class="role">student</p>
      <a href="profile.html" class="btn">view profile</a>
   </div> -->

   <!-- <nav class="navbar">
      <a href="home.html"><i class="fas fa-home"></i><span style="margin-left: 10px;">home</span></a>
      <a href="about.html"><i class="fas fa-question"></i><span style="margin-left: 10px;">about</span></a> -->
      <!-- <a href="courses.html"><i class="fas fa-graduation-cap"></i><span style="margin-left: 10px;">courses</span></a> -->
      <!-- <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span style="margin-left: 10px;">teachers</span></a> -->
      <!-- <a href="contact.html"><i class="fas fa-headset"></i><span style="margin-left: 10px;">contact us</span></a> -->
      <!-- <a href="question bank.html"><i class="fas fa-clipboard-question"></i><span style="margin-left: 10px;">Interview question</span></a> -->

   <!-- </nav>  -->

   <!-- </div> -->

<section class="question">

   <h1 class="heading">Interview question</h1>

   <div class="box-container">

      <div class="box">
         <div class="question1">
            <img src="images/html.jpeg" alt="" height="100%" width="100%">
            <div class="info">
               <h3 style="margin-left: 10px;">HTML</h3>
               <span style="margin-left: 10px;">PDF</span>
            </div>
         </div>
         
         <a href="question.html"  class="inline-btn" style="margin-top: 40px; margin-left: -200px;">VIEW</a>
      </div>
        <div class="box1">
         <div class="question">
            <img src="images/CSS.JPG" class="pic" >
            <div class="info">
               <h3>CSS</h3>
               <SPAN>PDF</SPAN>
            </div>
         
         </div>
         <a href="question1.html" class="inline-btn">VIEW</a>

        </div>
        </div>
      </body>
      </html>
   