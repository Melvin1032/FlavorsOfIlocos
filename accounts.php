<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login.php');
    exit(); 
}

// Fetch user details from the database
$user_name = $_SESSION['user_name'];  // Assuming the session stores the username

$sql = "SELECT * FROM user_form WHERE username = '$user_name'";  // Adjust column names if needed
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
<?php include 'header_user.php'; ?>

<section class="bg-gray-10 text-white">
    <!-- User Cover IMAGE -->
    <div class="relative w-full">
        <img src="/Flavors of Ilocos/images/food.jpg" alt="Cover Image" class="w-full h-[20rem] object-cover rounded-b-lg" />
        
        <!-- User Profile Image -->
        <div class="absolute bottom-[-6rem] left-1/2 transform -translate-x-1/2">
            <img src="/Flavors of Ilocos/images/user.png" alt="User Profile" 
                class="w-[12rem] h-[12rem] rounded-full border-4 border-white shadow-xl object-cover" />
        </div>
    </div>

    <div class="max-w-screen-lg mx-auto px-4 pb-8 pt-32 text-center">
        <!-- Welcome Message -->
        <div class="bg-gray-200 rounded-lg py-4 px-6 shadow-md">
            <h1 class="text-2xl font-semibold text-gray-900 mb-4">Welcome, <span class="text-gray-900"><?php echo $_SESSION['user_name']; ?></span>!</h1>
        </div>

        <!-- About Section -->
        <div class="bg-gray-200 rounded-lg py-6 px-8 mt-8 shadow-md text-lg text-gray-900">
            <p class="mb-4">
                Discover the vibrant flavors and culinary traditions of Ilocos with our website dedicated to showcasing the unique and delectable dishes of the region.
                Whether you're a seasoned cook or just beginning your culinary journey, you'll find authentic recipes and inspiring ideas to bring the tastes of Ilocano cuisine into your own kitchen.
                Join us in celebrating the rich heritage of Ilocos and elevate your cooking with these incredible, flavorful dishes!
            </p>
        </div>

        <!-- Logout Button -->
        <a href="/Flavors of Ilocos/logout.php" class="bg-red-500 text-white font-semibold py-3 px-8 mt-6 rounded-lg shadow-md hover:bg-red-600 transition duration-300">
            Logout
        </a>
    </div>
</section>

<!-- User Account Information Section -->
<section class="bg-gray-50 py-8">
    <div class="max-w-screen-lg mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">User Account Information</h2>
        
        <!-- Account Information Card -->
        <div class="bg-white shadow-lg rounded-lg p-6 space-y-6">
            <!-- Full Name -->
            <div class="flex items-center justify-between">
                <label class="w-40 text-sm font-medium text-gray-700">Full Name:</label>
                <p class="text-lg text-gray-800 font-semibold"><?php echo $full_name; ?></p>
            </div>

            <!-- Email -->
            <div class="flex items-center justify-between">
                <label class="w-40 text-sm font-medium text-gray-700">Email:</label>
                <p class="text-lg text-gray-800 font-semibold"><?php echo $email; ?></p>
            </div>

            <!-- Contact No -->
            <div class="flex items-center justify-between">
                <label class="w-40 text-sm font-medium text-gray-700">Contact No.:</label>
                <p class="text-lg text-gray-800 font-semibold"><?php echo $contact; ?></p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</body>
</html>

