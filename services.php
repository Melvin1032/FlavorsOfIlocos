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
   <title>SERVICES | Flavors of Ilocos</title>
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
<body>
<?php include 'header.php'; ?>

<section class="career-section">
    <h2>OUR <span>SERVICES</span></h2>
    <p>We offer a variety of services to bring the authentic flavors of Ilocos into your kitchen, from recipe sharing to culinary workshops.</p>
    <div class="career-container">
        <div class="career-card">
            <div class="icon"><i class="material-icons">local_dining</i></div>
            <h3>Recipe Sharing</h3>
            <p>Focus: Providing you with authentic Ilocano recipes to try at home.</p>
            <a href="#">DISCOVER MORE</a>
        </div>
        <div class="career-card">
            <div class="icon"><i class="material-icons">restaurant_menu</i></div>
            <h3>Authentic Ilocano Recipes</h3>
            <p>Focus: Offering authentic recipes to master traditional Ilocano dishes.</p>
            <a href="#">DISCOVER MORE</a>
        </div>
        <div class="career-card">
    <div class="icon"><i class="material-icons">star</i></div>
    <h3>Showcasing Ilocano Cuisine</h3>
    <p>Focus: Highlighting the authenticity and rich history of traditional Ilocano dishes.</p>
    <a href="#">DISCOVER MORE</a>
</div>

    </div>
</section>


<style>
    .career-section {
    text-align: center;
    padding: 50px;
    margin: 10px 0 0 0;
}

.career-section h2 {
    font-size: 36px;
    color: black;
    margin-bottom: 10px;
    font-weight: bold;
}

.career-section h2 span {
    color:  rgb(196, 164, 132); /* Red color for "career" */
}

.career-section p {
    font-size: 16px;
    color: black;
    margin-bottom: 40px;
}

.career-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
}

.career-card {
    background-color: #fff;
    border-radius: 10px;
    width: 400px;
    padding: 20px;
    text-align: left;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.career-card:hover {
    transform: translateY(-10px);
}

.career-card .icon {
    width: 60px;
    height: 60px;
    background-color:  rgb(196, 164, 132); /* Red color for icons */
    margin-bottom: 20px;
    border-radius: 8px;
    text-align: center;
}

.career-card .icon .material-icons {
    color: rgb(255, 255, 255);
    margin-top: 15px;
}

.career-card h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.career-card p {
    font-size: 14px;
    color: #666;
    margin-bottom: 20px;
}

.career-card a {
    color: black;
    font-weight: bold;
    text-decoration: none;
    transition: color 0.3s ease;
}

.career-card a:hover {
    color: #e64a19; /* Darker red on hover */
}
</style>


    <br><br>
<?php include 'footer.php'; ?>
</body>
</html>