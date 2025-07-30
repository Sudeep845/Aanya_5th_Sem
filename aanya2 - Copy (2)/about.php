<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about.jpg" alt="">
         <!-- <h3>why choose us?</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, a quod, quis alias eius dignissimos pariatur laborum dolorem ad ullam iure, consequatur autem animi illo odit! Atque quia minima voluptatibus.</p> -->
         <!-- <a href="contact.php" class="btn">contact us</a> -->
      </div>
      <div class="box" >
         <!-- <img src="images/about-img-2.png" alt=""> -->
            <!-- <div class="about__item"> -->
            <h3>Why Aa:nya?</h3>
            <p>Aanya is more than an online shopping platform; it's your gateway to a world of great deals and quality products. With a commitment to user satisfaction,we offer an intuitive and seamless shopping experience. Our chosen collection is made just for your needs, ensuring every click brings you closer to satisfaction.</p>
            <!-- </div> -->
            <!-- <div class="about__item"> -->
            <h3>Our Mission</h3>
            <p>Our mission is simple yet powerful to provide you with a seamless and enjoyable online shopping journey. We strive to bring you a curated selection of products, unbeatable deals, and a user-friendly platform that makes your satisfaction our top priority.</p>
            <!-- </div> -->
            <!-- <div class="about__item"> -->
            <h3>Our Vision</h3>
            <p>We envision more than just a digital platform. Aanya is a catalyst for positive change, where every interaction is an opportunity to elevate your online shopping journey.</p>
            <!-- </div> -->
            <h3>Meet our team</h3>
         <!-- <a href="shop.php" class="btn">our shop</a> -->
      </div>
   </div>


   



   
</section>

<!-- <section class="reviews">

   <h1 class="title">Group Members</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/bish.jpg" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/ku.jpg" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/ku.jpg" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/sudeep.jpg" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et voluptates sit earum, neque non cupiditate amet deserunt aperiam quas ex.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

</section> -->

<section class="team">
    
        <div class="team2">
            <!-- Team members -->
            
            <div class="team3">
                <div class="team__item">
                    <img src="images/bish.jpg" alt="">
                    <h4>Bishesh Maharjan</h4>
                    <span>Designer</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="images/ku.jpg" alt="">
                    <h4>Kumari Puspanjali Upadhyaya</h4>
                    <span>Quality Assurance</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="images/sudeep.jpg" alt="">
                    <h4>Sudeep Shrestha</h4>
                    <span>Manager</span>
                </div>
            </div>
        </div>
        
    
</section>







<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>