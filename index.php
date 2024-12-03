<?php

session_start();
@include 'config.php';

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

   <!-- custom tailwind cdn file link  -->
   <script src="https://cdn.tailwindcss.com"></script>

   <!-- GOOGLE FONTS -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

</head>
<body>

<?php include 'header.php'; ?>


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


<section class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.indigo.100),white)] opacity-20"></div>
  <div class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center"></div>
  <div class="mx-auto max-w-2xl lg:max-w-4xl">
    <img class="mx-auto h-28" src="logo/logo4.png" alt="">
    <figure class="mt-10">
      <blockquote class="text-center text-xl/8 font-semibold text-gray-900 sm:text-2xl/9">
      <p>“The recipes shared on this site are fantastic! I love how the dishes looks and how easy it is to follow the instructions. It's a great way to learn about Ilocano cuisine, and I can't wait to try more recipes!”</p>
      </blockquote>
      <figcaption class="mt-10">
        <img class="mx-auto size-20 rounded-full" src="images/melvin.png" alt="">
        <div class="mt-4 flex items-center justify-center space-x-3 text-base">
          <div class="font-semibold text-gray-900">John Melvin Macabeo  </div>
          <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-gray-900">
            <circle cx="1" cy="1" r="1" />
          </svg>
          <div class="text-gray-600">CEO of MLVZ.psd</div>
        </div>
      </figcaption>
    </figure>
  </div>
</section>




<?php include 'footer.php'; ?>

</body>
</html>