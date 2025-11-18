<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};

$fetch_profile_stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$fetch_profile_stmt->execute([$user_id]);
$fetch_profile = $fetch_profile_stmt->fetch(PDO::FETCH_ASSOC);

$avatar = $fetch_profile['image'] ? 'images/'.$fetch_profile['image'] : 'images/user-icon.png';

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/css.css">

</head>
<style>
   .user-details{
   background-color: #fff;
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
</style>
<body>
   
<?php include 'components/user_header.php'; ?>


<section class="user-details">

   <div class="user">
      <?php
         
      ?>
      <img src="<?= $avatar; ?>" alt="User Avatar">
      <p><i class="fas fa-user"></i><span><span><?= $fetch_profile['name']; ?></span></span></p>
      <p><i class="fas fa-phone"></i><span><?= $fetch_profile['number']; ?></span></p>
      <p><i class="fas fa-envelope"></i><span><?= $fetch_profile['email']; ?></span></p>
      <a href="update_profile.php" class="btn">Update Info</a>
      <p class="address"><i class="fas fa-map-marker-alt"></i><span><?php if($fetch_profile['address'] == ''){echo 'please enter your address';}else{echo $fetch_profile['address'];} ?></span></p>
      <a href="update_address.php" class="btn">Update Address</a>
   </div>

</section>

<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>