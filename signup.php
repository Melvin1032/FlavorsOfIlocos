<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $full_name = $_POST['full_name'];
   $contact = $_POST['contact'];
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'Password not matched!';
      }else{
         $insert = "INSERT INTO user_form(username, email, full_name, contact, password, user_type) 
         VALUES('$username','$email','$full_name', '$contact', '$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }
   

};


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SIGNUP | Flavors of Ilocos</title>

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
    <h1>Create Account</h1>
    <p>Create Account to explore the authentic flavors of Ilocos!</p>

    <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

    <form action="" method="post">
        <label for="username">Username</label>
        <input type="username" name="username" placeholder="Enter your username" required>
        
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="name@gmail.com" required>
        
        <label for="full_name">Full Name</label>
        <input type="full_name" name="full_name" placeholder="Full Name" required>


        <label for="contact">Contact Number</label>
        <input type="contact" name="contact" placeholder="Contact Number" required>

        <label for="password">Password</label>
        <div class="password-wrapper">
            <input type="password" name="password" placeholder="Enter your password" required>
            <i class="password-toggle"></i>
        </div>

        <label for="cpassword">Confirm Password</label>
        <input type="cpassword" name="cpassword" placeholder="Confirm your password" required>

        <select name="user_type" hidden>
        <option value="user" selected>user</option>
        </select>

        <br><br><br>

          <!-- <div class="profile_pic">
             <label class="form-label">Profile Picture</label>
            <input type="file" class="form-control" name="profile_pic">
          </div> -->

        <button type="submit" name="submit" value="register now" class="login-btn">Register</button>
         <p>Already have an account? <a href="login.php"><b>Login now!</b></a></p>
    </form>
</div>

<div class="food-images">
    <img src="images/dish images.png" alt="">
</div>

</div>

<?php include 'footer.php'; ?>
</body>
</html>


