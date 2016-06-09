<?php
include "classes/recipe.php";
include "classes/render.php";

$recipe1 = new Recipe();
$recipe1->setSource('Sage Auburn');
$recipe1->setYield('lots of food');
$recipe1->setTitle('mac and cheese');

$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 3.5, "cup");

$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");

$recipe1->addTag('TASTY');
$recipe1->addTag('Easy Bake Oven Material');

echo Render::displayRecipe($recipe1);
?>