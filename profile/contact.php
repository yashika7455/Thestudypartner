<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      body{
         padding-left: 0rem;
      }
   </style>
</head>
<body>

<header class="header">
   
   <section class="flex">
      <a href="home.html" class="logo">TheStudyPartner</a>
      <div class="menu">
      <a href="about.html">About</a>
      <a href="courses.html">Courses</a>
      <a href="contact.html">Contact</a>
      <a href="teachers.php">Teachers</a>
      <a href="question bank.html">InterviewQuestions</a>

      </div>
      

      <div class="icons">
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>
   </section>

</header>   



<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="" method="post">
         <h3>get in touch</h3>
         <input type="text" placeholder="enter your name" name="name" required maxlength="50" class="box">
         <input type="email" placeholder="enter your email" name="email" required maxlength="50" class="box">
         <input type="number" placeholder="enter your number" name="number" required maxlength="50" class="box">
         <textarea name="msg" class="box" placeholder="enter your message" required maxlength="1000" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" class="inline-btn" name="submit">
      </form>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <a href="tel:6206021428">620-602-1428</a>
         <a href="tel:8901828558">890-182-8558</a>
      </div>
      
      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <a href="mailto:kumarisomi2698@gmail.com@gmail.com">kumarisomi2698@gmail.come</a>
         <a href="mailto:ankitvatsofficial31@gmail.com">ankitvatsofficial31@gmail.come</a>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>office address</h3>
         <a href="#">Chandigrah university mohali ,punjab</a>
      </div>

   </div>

</section>


<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>