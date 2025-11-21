<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
}

include 'components/add_cart.php';

// GET product ID
if(isset($_GET['pid'])){
   $pid = $_GET['pid'];
} else {
   header('location: menu.php');
   exit;
}

// Fetch product info
$select_product = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
$select_product->execute([$pid]);

if($select_product->rowCount() == 0){
   echo "<p class='empty'>Product not found!</p>";
   exit;
}

$fetch_product = $select_product->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quick View</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/css.css">

   <style>
      .quick-view {
         max-width: 900px;
         margin: 2rem auto;
         display: grid;
         grid-template-columns: 1fr 1fr;
         gap: 2rem;
         padding: 2rem;
         background: #fff;
         border-radius: 10px;
         box-shadow: 0 0 15px rgba(0,0,0,0.1);
      }

      .quick-view img {
         width: 100%;
         border-radius: 10px;
         object-fit: cover;
      }

      .quick-view .details {
         display: flex;
         flex-direction: column;
         gap: 1rem;
      }

      .quick-view .price {
         font-size: 1.5rem;
         color: #c00;
      }

      .quick-view .qty {
         width: 70px;
         padding: .5rem;
      }

      .back-btn {
         margin: 2rem auto;
         text-align: center;
      }
   </style>

</head>
<body>

<?php include 'components/user_header.php'; ?>

<div class="heading">
   <h3>Product Details</h3>
   <p><a href="menu.php">MENU</a> <span> / QUICK VIEW</span></p>
</div>

<section class="quick-view">

   <img src="uploaded_img/<?= $fetch_product['image']; ?>" alt="">

   <div class="details">

      <h2><?= $fetch_product['name']; ?></h2>

      <p class="price"><span>₱</span><?= $fetch_product['price']; ?></p>

      <p><strong>Category:</strong> <?= $fetch_product['category']; ?></p>

      <p>
         <?= !empty($fetch_product['description']) 
            ? nl2br(htmlspecialchars($fetch_product['description'])) 
            : 'No description available.'; ?>
      </p>

      <form action="" method="post">
         <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
         <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
         <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
         <input type="hidden" name="image" value="<?= $fetch_product['image']; ?>">

         <div style="display:flex; align-items:center; gap:1rem;">
            <input type="number" name="qty" class="qty" min="1" max="99" value="1">
            <button type="submit" class="btn" name="add_to_cart">Add to Cart</button>
         </div>
      </form>

   </div>

</section>

<div class="back-btn">
   <a class="btn" href="menu.php">Back to Menu</a>
</div>

<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
