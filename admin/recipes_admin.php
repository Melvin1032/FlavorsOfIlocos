<?php
session_start(); 

include('../conn/conn.php');
include('assets/modal.php');

if (!isset($_SESSION['admin_name'])) {
    header('location:login.php');
    exit(); 
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes | ADMIN</title>
    <link rel="icon" href="/Flavors of Ilocos/logo/Logo1.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="/Flavors of Ilocos/assets/style.css">
    

</head>
<body>
<?php include 'header_admin.php'; ?>


<section id="food">
    <div class="card card-food-list">
        <h1 class="text-center"><strong>Food Lists</strong></h1>
        <div class="mt-4">
            <div class="row">
                <div class="col-md-2 mr-auto">
                    <button type="button" class="btn btn-add-food btn-secondary" data-toggle="modal" data-target="#addRecipeModal">Add Recipe</button>
                </div>
                <div class="col-md-2">
                    <input class="form-control p-4" type="text" id="searchInput" placeholder="Search...">
                </div>
            </div>
        </div>

        <!-- Table without table-responsive class -->
        <table id="foodListTable" class="table mt-4" style="text-align:center; width: 100%;">
            <thead>
                <tr>
                    <th scope="col" style="width: 5%;">Food ID</th>
                    <th scope="col" style="width: 10%;">Recipe Image</th>
                    <th scope="col" style="width: 25%;">Recipe Name</th>
                    <th scope="col" style="width: 25%;">Category</th>
                    <th scope="col" style="width: 10%;">Action</th>
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
                    $categoryID = $row['tbl_category_id'];
                    $categoryName = $row['category_name'];
                    $recipeImage = $row['recipe_image'];
                    $recipeName = $row['recipe_name'];
                    $recipeIngredients = $row['recipe_ingredients'];
                    $recipeProcedure = $row['recipe_procedure'];
                    ?>

                    <tr>
                        <th id="recipeID-<?= $recipeID ?>"><?php echo $recipeID ?></th>
                        <td id="recipeImage-<?= $recipeID ?>"><img src="http://localhost/Flavors of Ilocos/uploads/<?php echo $recipeImage ?>" class="img-fluid" style="height: 50px; width: 90px" alt="Recipe Image"></td>
                        <td id="recipeName-<?= $recipeID ?>"><?php echo $recipeName ?></td>
                        <td id="categoryName-<?= $recipeID ?>"><?php echo $categoryName ?></td>
                        <td id="recipeIngredients-<?= $recipeID ?>" hidden><?php echo $recipeIngredients ?></td>
                        <td id="recipeProcedure-<?= $recipeID ?>" hidden><?php echo $recipeProcedure ?></td>
                       
                        <td>
                            <button type="button" onclick="view_recipe('<?php echo $recipeID ?>')" title="View"><i class="fa-solid fa-list p-1"></i></button>
                            <button type="button" onclick="update_recipe('<?php echo $recipeID ?>')" title="Edit"><i class="fa-solid fa-pencil p-1"></i></button>
                            <button type="button" onclick="delete_recipe('<?php echo $recipeID ?>')" title="Delete"><i class="fa-solid fa-trash p-1"></i></button>
                        </td>
                    </tr>

                    <?php
                }
                ?>
                
            </tbody>
        </table>
    </div>
</section>


    <br><br>
    
    <script src="assets/script.js"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


           

</body>
</html>