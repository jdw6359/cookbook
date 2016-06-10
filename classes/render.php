<?php

class Render
{

	public function __toString()
	{
		$output = "\n";
		$output .= "This file is stored in in " . basename(__FILE__) . " at " . __DIR__ . ".\n";
		$output .= "This display is from line:" . __LINE__ . " in method:" . __METHOD__ . ".\n";
		$output .= "The following methods are available on the class " . __CLASS__ . ".\n";
		$output .= implode("\n", get_class_methods(__CLASS__)) . "\n";
		return $output;
	}

	public static function listShopping($ingredients)
	{
		ksort($ingredients);
		return implode("\n", array_keys($ingredients));
	}

	public static function listRecipes($titles)
	{
		asort($titles);
		$output = "";
		foreach($titles as $key => $title) {
			if ($output != "") {
				$output .= "\n";
			}
			$output .= "[$key] $title";
		}
		return $output;
	}

	public static function listIngredients($ingredients)
	{
		$output = "";
		foreach($ingredients as $ing) {
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