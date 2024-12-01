// switching section
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

function view_recipe(id) {
    $("#viewRecipeModal").modal("show");

    let viewRecipeName = $("#recipeName-" + id).text();
    let viewCategoryName = $("#categoryName-" + id).text();
    let viewRecipeImage = $("#recipeImage-" + id).find('img').attr('src');
    let viewRecipeIngredients = $("#recipeIngredients-" + id).text();
    let viewRecipeProcedure = $("#recipeProcedure-" + id).text();

    // Update modal content with the fetched data
    $("#viewRecipeName").text(viewRecipeName);
    $("#viewCategoryName").text(viewCategoryName);
    $("#viewRecipeImage").attr('src', viewRecipeImage);

    // Process Ingredients
    let ingredientsList = viewRecipeIngredients.split('\n'); // Split by newline
    $("#viewRecipeIngredients").empty();  // Clear existing content
    ingredientsList.forEach(function(ingredient) {
        if (ingredient.trim() !== "") {
            // Append each ingredient as a list item
            $("#viewRecipeIngredients").append('<li>' + ingredient.trim() + '</li>');
        }
    });

    // Process Procedure
    let procedureList = viewRecipeProcedure.split('\n');  // Split by newline
    $("#viewRecipeProcedure").empty();  // Clear existing content
    procedureList.forEach(function(step) {
        if (step.trim() !== "") {
            // Append each step as a list item
            $("#viewRecipeProcedure").append('<li>' + step.trim() + '</li>');
        }
    });
}



function update_recipe(id) {
    $("#updateRecipeModal").modal("show");

    let updateRecipeID = $("#recipeID-" + id).text();
    let updateCategoryName = $("#categoryName-" + id).text();
    let updateRecipeImage = $("#recipeImage-" + id).find('img').attr('src');
    let updateRecipeName = $("#recipeName-" + id).text();
    let updateRecipeIngredients = $("#recipeIngredients-" + id).text();
    let updateRecipeProcedure = $("#recipeProcedure-" + id).text();

    $("#updateRecipeID").val(updateRecipeID);
    $("#updateRecipeCategory option").each(function() {
        let category = $(this).text();
        if (category === updateCategoryName) {
            $(this).prop("selected", true);
            return false;
        }
    });
    $("#updateRecipeName").val(updateRecipeName);
    $("#updateRecipeIngredients").val(updateRecipeIngredients);
    $("#updateRecipeProcedure").val(updateRecipeProcedure);
    $("#updateRecipeImage").html(updateRecipeImage);
}

// delete recipe
function delete_recipe(id) {

    if (confirm("Do you confirm to delete this recipe?")) {
        window.location = "endpoint/delete-recipe.php?recipe=" + id
    }
}

// search
function performSearch() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toLowerCase();
    table = document.getElementById("foodListTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        var nameColumn = tr[i].getElementsByTagName("td")[1]; // Column for Recipe Name
        var categoryColumn = tr[i].getElementsByTagName("td")[2]; // Column for Category

        if (nameColumn || categoryColumn) {
            var nameText = nameColumn.textContent || nameColumn.innerText;
            var categoryText = categoryColumn.textContent || categoryColumn.innerText;

            if (nameText.toLowerCase().indexOf(filter) > -1 || categoryText.toLowerCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function printRecipe() {
    var printContent = document.querySelector('#viewRecipeModal .modal-body').innerHTML;
    var printWindow = window.open('', '', 'height=600,width=800');
    
    printWindow.document.write('<html><head><title>Recipe Details</title>');
    printWindow.document.write('<style>body { font-family: Arial, sans-serif; padding: 20px; }</style>');
    printWindow.document.write('</head><body>');
    printWindow.document.write(printContent);
    printWindow.document.write('</body></html>');
    
    printWindow.document.close(); // Necessary for IE >= 10
    printWindow.print();
}


// Attach an event listener to the search input field
document.getElementById("searchInput").addEventListener("keyup", performSearch);



