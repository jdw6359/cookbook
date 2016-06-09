<?php
include "classes/recipe.php";

$recipe1 = new Recipe();
$recipe1->setSource('Sage Auburn');
$recipe1->setYield('lots of food');
$recipe1->setTitle('mac and cheese');
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 3.5, "cup");

echo $recipe1->displayRecipe();
echo $recipe1->getTitle();

foreach($recipe1->getIngredients() as $ing)
{
	echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
}

$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");

echo implode(", ", $recipe1->getInstructions());

$recipe1->addTag('TASTY');
$recipe1->addTag('Easy Bake Oven Material');

echo implode(", ", $recipe1->getTags());

echo $recipe1->getYield();
echo $recipe1->getSource();
?>