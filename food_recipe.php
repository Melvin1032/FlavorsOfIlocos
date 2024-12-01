<!-- View Recipe Modal -->
<div class="modal fade mt-5" id="viewRecipeModal" tabindex="-1" aria-labelledby="viewRecipe" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="viewRecipe"><strong>My Recipe</strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

        <div class="card">
            <div class="d-flex justify-content-center align-items-center">
                <img src="" id="viewRecipeImage" class="card-img-top mt-2" alt="Recipe" style="max-width: 300px">
            </div>
            <div class="card-body text-center">
                <h6 class="card-title"><strong id="viewRecipeName"></strong></h6>
                <p class="text-muted">Category: <span class="card-subtitle text-muted" id="viewCategoryName"></span></p>
            </div>
            <div class="row text-center mb-5 p-3">
                <div class="col">
                    <h5><strong>Ingredients:</strong></h5>
                    <p id="viewRecipeIngredients"></p>
                </div>
                <div class="col">
                    <h5><strong>Procedure:</strong></h5>
                    <p id="viewRecipeProcedure"></p>
                </div>
            </div>
        </div>

        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>