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
         <p>Customers would eat at Grill Thrill Burger for the mouthwatering blend of premium ingredients and sizzling flavors that ignite the senses with every bite.</p>
         <a href="menu.php" class="btn">Our Menu</a>
      </div>

   </div>

</section>


<section class="steps">

   <h1 class="title">Simple Steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Choose Order</h3>
         <p>Choose different foods and click check out.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>Our delivery is fast and on point.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Enjoy Food</h3>
         <p>And lastly enjoy our delicious foods!</p>
      </div>

   </div>

</section>



<section class="reviews">

   <h1 class="title">Customer's Reviews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/allen.jpg" alt="">
            <p>Grill Thrill Burger is fantastic! The mushroom Swiss burger was delicious, with juicy mushrooms and creamy Swiss cheese. The drinks are refreshing.</p>
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
            <img src="images/archer.jpg" alt="">
            <p>Grill Thrill Burger is my new favorite! The Thrill Burger is packed with incredible flavors, and the sweet potato fries are a must-try.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Archer Z.</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/paul.jpg" alt="">
            <p>Grill Thrill Burger’s veggie burger is fantastic! It’s flavorful and perfectly grilled with fresh ingredients. The cozy atmosphere is a plus.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Paul L.</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/anilov.jpg" alt="">
            <p>Absolutely loved my meal at Grill Thrill Burger! The chicken burger was tender and flavorful, with a delightful crunch from the fresh veggies.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Anilov P.</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/jordan.jpg" alt="">
            <p>Grill Thrill Burger exceeded my expectations! The bacon cheeseburger was mouth-watering, with crispy bacon and melted cheese.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jordan C.</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/roland.jpg" alt="">
            <p>Impressed with Grill Thrill Burger! The double cheeseburger was perfectly cooked, and the toppings were fresh and delicious. The atmosphere is great for a casual meal.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Roland D.</h3>
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