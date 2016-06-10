<?php
include "classes/recipe.php";
include "classes/render.php";
include "classes/recipecollection.php";
include "inc/recipes.php";

$cookbook = new RecipeCollection("Treehouse Recipes");
$cookbook->addRecipe($belgian_waffles);
$cookbook->addRecipe($dried_mushroom_ragout);
$cookbook->addRecipe($rabbit_catalan);
$cookbook->addRecipe($grilled_salmon_with_fennel);
$cookbook->addRecipe($pistachio_duck);
$cookbook->addRecipe($lemon_chicken);
$cookbook->addRecipe($granola_muffins);
$cookbook->addRecipe($pepper_casserole);
$cookbook->addRecipe($silver_dollar_cakes);
$cookbook->addRecipe($french_toast);
$cookbook->addRecipe($corn_beef_hash);
$cookbook->addRecipe($granola);
$cookbook->addRecipe($spicy_omelette);
$cookbook->addRecipe($scones);

$breakfast = new RecipeCollection("Dank Breakfasts");
foreach($cookbook->filterByTag("breakfast") as $recipe) {
	$breakfast->addRecipe($recipe);
}



$week1 = new RecipeCollection("Meal Plan - Week 1");
$week1->addRecipe($cookbook->filterById(2));
$week1->addRecipe($cookbook->filterById(7));
$week1->addRecipe($cookbook->filterById(4));
echo Render::listRecipes($week1->getRecipeTitles());


echo Render::listShopping($week1->getCombinedIngredients());

//echo "*****BREAKFAST FOODS*****\n";

//echo "\nbreakfast shopping list:\n";
//echo Render::listShopping($breakfast->getCombinedIngredients());
?>