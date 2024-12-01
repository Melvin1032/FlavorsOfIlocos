<?php
session_start(); 

include 'conn/conn.php';
include('assets/modal.php');

if (!isset($_SESSION['user_name'])) {
    header('location:login.php');
    exit; 
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<?php include 'header_user.php'; ?>


    <section id="category">

    

        <!-- Category Area -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="image/breakfast.jpg" class="card-img-top" alt="..." style="height: 240px">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Breakfast Recipes</strong></h5>
                            <a class="btn btn-dark btn-block" data-toggle="modal" data-target="#breakfastModal">View List</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="image/lunch.jpg" class="card-img-top" alt="..." style="height: 240px">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Lunch Recipes</strong></h5>
                            <a class="btn btn-dark btn-block" data-toggle="modal" data-target="#lunchModal">View List</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="image/dinner.jpg" class="card-img-top" alt="..." style="height: 240px">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Dinner Recipes</strong></h5>
                            <a class="btn btn-dark btn-block" data-toggle="modal" data-target="#dinnerModal">View List</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="image/appetizer.jpg" class="card-img-top" alt="..." style="height: 240px">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Appetizer Recipes</strong></h5>
                            <a class="btn btn-dark btn-block" data-toggle="modal" data-target="#appetizerModal">View List</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="image/dessert.jpeg" class="card-img-top" alt="..." style="height: 240px">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Dessert Recipes</strong></h5>
                            <a class="btn btn-dark btn-block" data-toggle="modal" data-target="#dessertModal">View List</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="image/fastfood.jpg" class="card-img-top" alt="..." style="height: 240px">
                        <div class="card-body">
                            <h5 class="card-title text-center"><strong>Fast Food Recipes</strong></h5>
                            <a class="btn btn-dark btn-block" data-toggle="modal" data-target="#fastFoodModal">View List</a>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
        
    </section>

    <section id="food">
    <div class="card card-food-list">
        <h1 class="text-center mb-4"><strong>Ilocano Dishes That Define Northern Philippine Cuisine</strong></h1>
        
        <!-- Search Section -->
        <div class="mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Search Input Box -->
            <div class="input-group">
                <input class="form-control p-4" type="text" id="searchInput" placeholder="Search for recipes..." style="border-radius: 20px; font-size: 1rem; margin-right: 1rem;">
                <div class="input-group-append">
                    <button class="btn btn-dark" type="button" style="border-radius: 30px;">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

        <br>

        <!-- Food List Table -->
        <table id="foodListTable" class="table table-hover table-bordered table-striped mt-4" style="text-align:center; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 8px;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="width: 20%;">Recipe Image</th>
                    <th scope="col" style="width: 15%;">Recipe Name</th>
                    <th scope="col" style="width: 15%;">Category</th>
                    <th scope="col" style="width: 15%;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $stmt = $conn->prepare("
                    SELECT * 
                    FROM 
                        `tbl_recipe`
                    LEFT JOIN
                        `tbl_category` ON
                        `tbl_recipe`.`tbl_category_id` = `tbl_category`.`tbl_category_id`
                ");
                $stmt->execute();

                $result = $stmt->fetchAll();

                foreach ($result as $row) {
                    $recipeID = $row['tbl_recipe_id'];
                    $categoryName = $row['category_name'];
                    $recipeImage = $row['recipe_image'];
                    $recipeName = $row['recipe_name'];
                    $recipeIngredients = $row['recipe_ingredients'];
                    $recipeProcedure = $row['recipe_procedure'];
                    ?>

                    <tr>
                        <td id="recipeImage-<?= $recipeID ?>" style="padding: 15px;">
                            <img src="http://localhost/Flavors of Ilocos/uploads/<?php echo $recipeImage ?>" class="img-fluid" style="height: 180px; width: 280px; border-radius: 8px;" alt="Recipe Image">
                        </td>
                        <td id="recipeName-<?= $recipeID ?>" style="padding: 15px; padding-top: 5rem; font-weight: bold;"><?php echo $recipeName ?></td>
                        <td id="categoryName-<?= $recipeID ?>" style="padding: 15px; padding-top: 5rem; font-weight: bold; " ><?php echo $categoryName ?></td>
                        <td id="recipeIngredients-<?= $recipeID ?>" hidden><?php echo $recipeIngredients ?></td>
                        <td id="recipeProcedure-<?= $recipeID ?>" hidden><?php echo $recipeProcedure ?></td>
                        <td style="padding: 15px;">
                            <button type="button" class="btn btn-info btn-sm" onclick="view_recipe('<?php echo $recipeID ?>')" title="View Recipe" style="font-size: 15px; font-weight: bold; border-radius: 5px; margin-top: 4rem">View Recipe</button>
                        </td>
                    </tr>

                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</section>

<!-- Add some custom CSS for styling -->

</style>



    
    
    <script src="assets/script.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>



</body>
</html>
