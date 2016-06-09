<?php

class Render
{
	public static function listIngredients($ingredients)
	{
		$output = "";
		foreach($ingredients as $ing)
		{
			$output .= $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
			$output .= "\n";
		}
		return $output;
	}

	public static function displayRecipe($recipe)
	{
		$output = "";
		$output .= $recipe->getTitle() . " by " . $recipe->getSource() . "\n";
		$output .= implode(", ", $recipe->getTags()) . "\n\n";
		$output .= self::listIngredients($recipe->getIngredients());
		$output .= "\n";
		$output .= implode("\n", $recipe->getInstructions()) . "\n";
		$output .= $recipe->getYield() . "\n";
		return $output;
	}
}

?>