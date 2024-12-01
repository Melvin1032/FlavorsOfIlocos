<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){


   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);


   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['username'];
         header('location: admin/home_admin.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['username'];
         header('location:home.php');

      }
     
   }else{
      $error[] = 'Incorrect Email or Password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>LOGIN | Flavors of Ilocos</title>

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
<body>
<?php include 'header.php'; ?>

<div class="flex-container-login">


<div class="login-container">
    <h1>Hey there!</h1>
    <p>Log in to explore the authentic flavors of Ilocos!</p>

    <?php
if (isset($error)) {
    foreach ($error as $error) {
        echo '<span class="error-msg">' . $error . '</span>';
    }
}
?>

    <form action="" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="name@domain.com" required>

        <label for="password">Password</label>
        <div class="password-wrapper">
            <input type="password" name="password" placeholder="Enter your password" required>
            <i class="password-togsgle"></i>
        </div>
        <br>
        <button type="submit" name="submit" value="login now" class="login-btn">Log In</button>
            <br> <br>
            <p>Don't have an account? <a href="signup.php"><b>Register now!</b></a></p>
            <br><br>
            <br><br>
            <img src="logo/logo3.png" alt="">
    </form>
</div>

<div class="food-images">
    <img src="images/dish images.png" alt="">
</div>

</div>

<?php include 'footer.php'; ?>
</body>
</html>