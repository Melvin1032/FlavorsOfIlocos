<?php

session_start();
include('../config.php');


if (!isset($_SESSION['admin_name'])) {
    header('location:login.php');
    exit(); 
}

// Fetch user details from the database
$admin_name = $_SESSION['admin_name'];  // Assuming the session stores the username

$sql = "SELECT * FROM user_form WHERE username = '$admin_name'";  // Adjust column names if needed
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    // Now you have the user's data, you can use $row['column_name']
    $full_name = $row['full_name'];
    $email = $row['email'];
    $contact = $row['contact'];
} else {
    // Handle the case where no data is found (if any)
    $full_name = $email = $address = $contact = "No details available";
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

<?php include 'header_admin.php'; ?>


<section class="w-full overflow-hidden dark:bg-gray-900">
    <div class="w-full mx-auto">
        <!-- User Cover IMAGE -->
        <img src="/Flavors of Ilocos/images/food.jpg"
                class="w-full xl:h-[20rem] lg:h-[22rem] md:h-[16rem] sm:h-[13rem] xs:h-[9.5rem]" />

        <!-- User Profile Image -->
        <div class="w-full mx-auto flex justify-center">
            <img src="/Flavors of Ilocos/images/user.png" alt="User Profile"
                    class="rounded-full object-cover xl:w-[10rem] xl:h-[10rem] lg:w-[16rem] lg:h-[16rem] md:w-[12rem] md:h-[12rem] sm:w-[10rem] sm:h-[10rem] xs:w-[8rem] xs:h-[8rem] outline outline-2 outline-offset-2 outline-white-500 shadow-xl relative xl:bottom-[7rem] lg:bottom-[8rem] md:bottom-[6rem] sm:bottom-[5rem] xs:bottom-[4.3rem]" />
        </div>

        <div
            class="xl:w-[80%] lg:w-[90%] md:w-[94%] sm:w-[96%] xs:w-[92%] mx-auto flex flex-col gap-4 justify-center items-center relative xl:-top-[6rem] lg:-top-[6rem] md:-top-[4rem] sm:-top-[3rem] xs:-top-[2.2rem]">
            <!-- FullName -->
            <div class="flex items-center space-x-2 bg-gray-100 rounded-lg shadow-md p-5">
       <div class="text-3xl font-semibold text-gray-600">
        Welcome Admin, <span class="text-gray-900"><?php echo $_SESSION['admin_name'] ?></span>!
       </div>
   </div>

            <!-- About -->
            <p class="w-full text-gray-700 dark:text-gray-400 text-lg text-pretty sm:text-center xs:text-justify">Discover the vibrant flavors and culinary traditions of Ilocos with our website dedicated to showcasing the unique and delectable dishes of the region. 
Whether you're a seasoned cook or just beginning your culinary journey, you'll find authentic recipes and inspiring ideas to bring the tastes of Ilocano cuisine into your own kitchen. 
Join us in celebrating the rich heritage of Ilocos and elevate your cooking with these incredible, flavorful dishes!

                praesentium?</p>

                <br>
                <a href="/Flavors of Ilocos/logout.php" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-20 rounded shadow-md transition duration-200">Logout</a>


        </div>
    </div>

</section>
<h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">User Account Information</h2>
<section class="py-8 px-6 flex justify-center">

    <div class="space-y-5">
        <div class="flex items-center">
            <label class="w-40 text-sm font-medium text-gray-600">Full Name:</label>
            <p class="text-lg text-gray-800 font-semibold"><?php echo $full_name; ?></p>
        </div>
        <div class="flex items-center">
            <label class="w-40 text-sm font-medium text-gray-600">Email:</label>
            <p class="text-lg text-gray-800 font-semibold"><?php echo $email; ?></p>
        </div>
        <div class="flex items-center">
            <label class="w-40 text-sm font-medium text-gray-600">Contact No.</label>
            <p class="text-lg text-gray-800 font-semibold"><?php echo $contact; ?></p>
        </div>
    </div>
</section>



<br><br>
<?php include 'footer.php'; ?>
</body>
</html>

