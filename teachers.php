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
   <title>teachers</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">
      <img src="images/logo.jpg" class="image" alt="" width="48px" height="48px">
      <a href="home.html" class="logo">TheStudyPartner</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <!-- <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div> -->
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">shaikh anas</h3>
         <p class="role">studen</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.html" class="option-btn">login</a>
            <a href="register.html" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">shaikh anas</h3>
      <p class="role">studen</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
      <!-- <a href="about.html"><i class="fas fa-question"></i><span>about</span></a> -->
      <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <!-- <a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a> -->
      <a href="question bank.html"><i class="fas fa-clipboard-question"></i><span>Interview question</span></a>
   </nav>

</div>

<section class="teachers">

   <h1 class="heading">expert teachers</h1>

   <form action="" method="post" class="search-tutor">
      <input type="text" name="search_box" placeholder="search tutors..." required maxlength="100">
      <button type="submit" class="fas fa-search" name="search_tutor"></button>
   </form>

   <div class="box-container">

      <div class="box offer">
         <h3>become a tutor</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, itaque ipsam fuga ex et aliquam.</p>
         <a href="register.html" class="inline-btn">get started</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.html" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/anjaul sir.jpg" alt="">
            <div>
               <h3>Anjul bhardwaj</h3>
               <span> python developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.html" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/SACHIN CHAWLA .jpg" alt="">
            <div>
               <h3>Sachin chawala</h3>
               <span>Html</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.html" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Ajay Yadav</h3>
               <span>CSS</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.html" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/SACHIN CHAWLA .jpg" alt="">
            <div>
               <h3>Rajan shaluja</h3>
               <span>php</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.html" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Reet </h3>
               <span>Bootstrap</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.html" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-8.jpg" alt="">
            <div>
               <h3>john deo</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.html" class="inline-btn">view profile</a>
      </div>

   </div>

</section>


<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>