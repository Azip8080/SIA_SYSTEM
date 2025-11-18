<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Orders</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/css.css">

   <style>
      /* .Orders{
         background-color: #fff;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      } */

      /* Example styles for the order boxes */
      .order_box {
         background-color: #fff;
         border: 1px solid #ccc;
         padding: 20px;
         margin-bottom: 20px;
         font-size: 2rem;
         box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.5);
      }
      .order_box p {
         margin: 5px 0;
         font-family: 'Rubik', sans-serif;

      }
      .order_box span {
         font-weight: bold;
      }
      .order_box .status {
         font-weight: bold;
         color: green; /* Assume green for paid, red for pending */
      }
      .empty {
         text-align: center;
         font-style: italic;
         color: #e74c3c;
      }

      /* .box img{
         float: left;
         width: 25%;
         height: 25rem;
         
      } */
   </style>

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>ORDERS</h3>
   <p><a href="html.php">HOME</a> <span> / orders</span></p>
</div>

<section class="Orders">

   <h1 class="title">YOUR ORDERS</h1>

   <div class="box-container">

   <?php
      if($user_id == ''){
         echo '<p class="empty">Please Login To See Your Orders</p>';
      }else{
         $select_orders = $conn->prepare("SELECT * FROM `orders` WHERE user_id = ?");
         $select_orders->execute([$user_id]);
         if($select_orders->rowCount() > 0){
            while($fetch_orders = $select_orders->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="order_box">
      <p>Placed on: <span><?= $fetch_orders['placed_on']; ?></span></p>
      <p>Name: <span><?= $fetch_orders['name']; ?></span></p>
      <p>Email: <span><?= $fetch_orders['email']; ?></span></p>
      <p>Number: <span><?= $fetch_orders['number']; ?></span></p>
      <p>Address: <span><?= $fetch_orders['address']; ?></span></p>
      <p>Payment Method: <span><?= $fetch_orders['method']; ?></span></p>
      <p>Your Orders: <span><?= $fetch_orders['total_products']; ?></span></p>
      <p>Total Price: <span>$<?= $fetch_orders['total_price']; ?>/-</span></p>
      <p>Payment Status: <span class="status" style="color:<?php echo ($fetch_orders['payment_status'] == 'pending') ? 'red' : 'green'; ?>"><?= $fetch_orders['payment_status']; ?></span></p>
      
   </div>
   <?php
      }
      }else{
         echo '<p class="empty">No Orders Placed Yet</p>';
      }
      }
   ?>

   </div>

</section>

<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->

<script src="js/script.js"></script>

</body>
</html>
