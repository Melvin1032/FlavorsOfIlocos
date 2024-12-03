<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HOME | Flavors of Ilocos</title>
   <link rel="icon" href="logo/Logo1.png">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">

       <!-- ICONS -->
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

</head>
<body>

<?php include 'header_user.php'; ?>

<div class="main-container">
  <video autoplay loop muted class="background-video">
    <source src="videos/webbg.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="content">
    <h1>Welcome To</h1>
    <h2>FLAVORS OF ILOCOS!</h2>
    <p>
      Flavors of Ilocos is an online recipe platform dedicated to highlighting<br>
      the rich culinary traditions of Ilocano cuisine. It offers easy-to-follow<br>
      recipes and cultural insights, making it simple to recreate authentic Ilocano<br>
      flavors at home.
    </p>
  </div>
</div>

<br><br>

<div class="about-section">
  <h2>About Us</h2>
  <p>
    Flavors of Ilocos is more than just a recipe platform. It's a celebration of Ilocano culture and heritage. We aim to preserve and promote traditional Ilocano cooking methods while making them accessible to everyone. Join us in savoring the true essence of Ilocos through its culinary wonders.
  </p>
</div>

<div class="blog-section">
  <div class="blog-posts">
    <div class="post">
      <h3>Discovering the Secrets of Bagnet</h3>
      <p>Explore the crispy and flavorful world of Bagnet, a signature Ilocano dish. Learn the history and techniques to prepare this culinary masterpiece.</p>
      <a href="#">Read More</a>
    </div>
    <div class="post">
      <h3>The Art of Making Empanada</h3>
      <p>Dive into the vibrant streets of Ilocos and discover the joy of making the famous orange-hued Ilocos Empanada. Perfectly crispy and deeply satisfying!</p>
      <a href="#">Read More</a>
    </div>
    <div class="post">
      <h3>Paksiw na Bangus: A Taste of Comfort</h3>
      <p>Unravel the tangy, savory flavors of Paksiw na Bangus, a dish that feels like home. See why it's a staple on Ilocano dining tables.</p>
      <a href="#">Read More</a>
    </div>
  </div>
</div>

<br><br>

<?php include 'footer.php'; ?>
</body>
</html>

</div>