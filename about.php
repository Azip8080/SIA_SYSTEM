<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/css.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>


<div class="heading">
   <h3>About Us</h3>
   <p><a href="home.php">Home</a> <span> / About</span></p>
</div>


<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Why Choose Us?</h3>
         <p>At Grow A Kitchen, we bring together quality kitchen tools and premium seeds to help you grow and cook with ease. We offer durable products, fresh high-germination seeds, fast delivery, and a trusted shopping experience for home cooks and plant lovers. Everything you need for a greener, smarter kitchen—all in one place.</p>
         <a href="menu.php" class="btn">Our Items</a>
      </div>

   </div>

</section>


<section class="steps">

   <h1 class="title">Simple Steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Choose a Product</h3>
         <p>Choose an item and click check out.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>Our delivery is fast and on point.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Receive Item</h3>
         <p>And lastly recieve the item!</p>
      </div>

   </div>

</section>



<section class="reviews">

   <h1 class="title">Customer's Reviews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/allen.jpg" alt="">
            <p>“Impressed with Grow A Kitchen! The basil and rosemary sprouted quickly, and the plants look so healthy. Perfect for anyone starting a small kitchen garden.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Allen S.</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/jmm.jpg" alt="">
            <p>Really satisfied! The knives are sharp, balanced, and cut through vegetables effortlessly. Makes prep time so much easier.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jan M.</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/jm.png" alt="">
            <p>“I didn’t expect to love this pan as much as I do. The non-stick coating is truly impressive—nothing sticks, even when I’m frying eggs.And it's easy to clean</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jm U.</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/jed.jpg" alt="">
            <p>These chili seeds exceeded my expectations! They sprouted quickly, and the plants are already producing bright, healthy chilis. </p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jed T.</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/nicholas.jpg" alt="">
            <p>This cutting board looks and feels premium. It’s thick, sturdy, and doesn’t slide around while chopping. I love how natural and clean it looks on my countertop.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Nich L.</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/bato.png" alt="">
            <p>I’m so glad I bought this spice organizer—it instantly made my kitchen look more organized. It’s easy to rotate, fits all my spices, and saves a ton of counter space.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Bato B.</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>






<?php include 'components/footer.php'; ?>



<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});
</script>

</body>
</html>