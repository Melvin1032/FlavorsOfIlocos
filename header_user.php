<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/header_user.css">

       <!-- ICONS -->
       <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

</head>
<body>

<div class="top-bar">
        <span><i class='bx bxs-phone' ></i> Call us: (09) 2934-1923</span>
        <span><i class='bx bxl-gmail'></i>: flavors_of_ilocos@gmail.com</span>
        <ul>
            <li><a href="#"><i class='bx bxl-facebook-circle' ></i></a></li>
            <li><a href="#"><i class='bx bxl-instagram-alt' ></i></a></li>
            <li><a href="#"><i class='bx bxl-twitter' ></i></a></li>
            <li><a href="#"><i class='bx bxl-youtube' ></i></a></li>
            <li><a href="#"><i class='bx bxl-linkedin-square'></i></a></li>
        </ul>
    </div>


    <nav>
            <div class="logo">
               <a href="home.php"> <img src="logo/Logo5.png" alt="Logo"> </a>
            </div>
        <div class="toggle"><i class='bx bx-menu'></i></div>
        <ul class="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="recipes.php">Recipes</a></li>
            <li><a href="accounts.php">Accounts</a></li>
        </ul>
    </nav>


<!--    
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div> -->

<script>

const toggle = document.querySelector('.toggle');
const menu = document.querySelector('.menu');

toggle.addEventListener('click', () => {
    menu.classList.toggle('active');
});

</script>

</body>






</html>