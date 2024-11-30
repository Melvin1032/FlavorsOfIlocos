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
  <video autoplay loop muted>

  <source src="videos/webbg.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <h1>Welcome To</h1>
  <h2>FLAVORS OF ILOCOS!</h2>
  <p>Flavors of Ilocos is an online recipe platform dedicated to highlighting <br>
  the rich culinary traditions of Ilocano cuisine. It offers easy-to-follow <br>
  recipes and cultural insights, making it simple to recreate authentic Ilocano <br>
  flavors at home.</p>
</div>

<?php include 'footer.php'; ?>
</body>
</html>

</div>