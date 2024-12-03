<?php
@include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>OBJECTIVES | Flavors of Ilocos</title>
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

<main class="obj-con">
    <section class="title-obj">
        <h1>OUR OBJECTIVES</h1>
        <p>We aim to bring the authentic taste of Ilocos to your kitchen and make it easy to explore and master its culinary delights.</p>
    </section>
    <section class="contents-obj">
        <div class="obj-box">
            <div class="obj-content">
                <h2>Celebrate Ilocos Food Heritage</h2>
                <hr>
                <p>We strive to share the rich history and culture of Ilocano cuisine, preserving its authenticity and passing down generations of flavors.</p>
            </div>
        </div>
        <div class="obj-box">
            <div class="obj-content">
                <h2>Accessible Ingredients & Instructions</h2>
                <hr>
                <p>Our goal is to provide easy access to a list of ingredients and detailed, step-by-step cooking instructions for every dish.</p>
            </div>
        </div>
        <div class="obj-box">
            <div class="obj-content">
                <h2>Empower Users with Recipe Search</h2>
                <hr>
                <p>By offering a dynamic search tool, users can find recipes based on ingredients they have at hand, making cooking simple and fun.</p>
            </div>
        </div>
        <div class="obj-box">
            <div class="obj-content">
                <h2>Simple and Enjoyable Viewing Experience</h2>
                <hr>
                <p>We ensure that users can easily navigate the site, view recipes, save favorites, and print instructions for later use.</p>
            </div>
        </div>
    </section>
</main>



<style>
/* Global Font and Layout */
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    color: #333;
}

/* Main container */
.obj-con {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 50px 20px;
    box-shadow: 0 0 0 rgba(0, 0, 0, 0);
}

.title-obj {
    text-align: center;
    margin-bottom: 40px;
}

.title-obj h1 {
    font-size: 3rem;
    color: #2a2a2a;
    font-weight: 700;
    margin-bottom: 10px;

}

.title-obj p {
    font-size: 1.2rem;
    color: #555;
    max-width: 800px;
    margin: 0 auto;
}

/* Objective content container */
.contents-obj {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* Two cards per row */
    gap: 30px;
    width: 100%;
    max-width: 1200px;
}

/* Individual objective box */
.obj-box {
    display: flex;
    justify-content: center;
}

.obj-content {
    background-color: #fff;
    padding: 25px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    transition: transform 0.3s ease-in-out;
}

.obj-content:hover {
    transform: translateY(-10px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
}

/* Title and content within each objective box */
.obj-content h2 {
    font-size: 1.5rem;
    color: #2a2a2a;
    margin-bottom: 20px;
    font-weight: bold;
}

.obj-content p {
    font-size: 1.1rem;
    color: #555;
    line-height: 1.6;
}

/* Styling for horizontal line (divider) */
.obj-content hr {
    border: 0;
    height: 2px;
    background-color: #f4a261; /* Light accent color */
    width: 50px;
    margin: 15px auto;
}

/* Responsive layout tweaks */
@media (max-width: 768px) {
    .obj-con {
        padding: 40px 20px;
    }
    .title-obj h1 {
        font-size: 2.5rem;
    }
    .contents-obj {
        grid-template-columns: 1fr; /* Stacks the content on small screens */
    }
}

</style>

<?php include 'footer.php'; ?>
</body>
</html>