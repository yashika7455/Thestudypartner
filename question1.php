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
   <style>
    h3,p{
        font-size: 20px;
    }
   </style>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.html" class="logo">TheStudyPartner</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <form action="search.html" method="post" class="search-form">
            <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
            <button type="submit" class="fas fa-search"></button>
         </form>
   
         <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
            <div id="toggle-btn" class="fas fa-sun"></div>
         </div>
   
         <div class="profile">
            <img src="images/somi.jpg" class="image" alt="">
            <h3 class="name">Somi kumari</h3>
            <p class="role">student</p>
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
        <a href="about.html"><i class="fas fa-question"></i><span>about</span></a>
        <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
        <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
        <a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>
        <a href="question bank.html"><i class="fas fa-clipboard-question"></i><span>Interview question</span></a>
     </nav>
  
  </div>
  <section class="Question">
  
      <h1 class="heading">Interview Question</h1>
   
      <div class="box-container">
           
         <div class="box">
          <div class="question">
            <h3>css</h3>
            <p>Get interview question.</p>
             <embed src="images/Css question bank.pdf"  width="1200" height="700" >
          
             </div>
             
              </div>
              </section>
              </body>
              </html>
    
    