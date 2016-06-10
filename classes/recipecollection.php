<?php

class RecipeCollection
{
	private $title;
	private $recipes = array();

	public function __construct($title)
	{
		$this->setTitle($title);
	}

	public function setTitle($title = null)
	{
		if (empty($title)) {
			$this->title = null;
		} else {
			$this->title = $title;
		}
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function addRecipe($recipe)
	{
		$this->recipes[] = $recipe;
	}

	public function getRecipes()
	{
		return $this->recipes;
	}

	public function getRecipeTitles()
	{
		$titles = array();
		foreach($this->recipes as $recipe) {
			$titles[] = $recipe->getTitle();
		}
		return $titles;
	}

	public function filterByTag($tag)
	{
		$taggedRecipes = array();
		foreach($this->recipes as $recipe) {
			if (in_array(strtolower($tag), $recipe->getTags())) {
				$taggedRecipes[] = $recipe;
			}
		}
		return $taggedRecipes;
	}

	public function getCombinedIngredients()
	{
		$ingredients = array();
		foreach($this->recipes as $recipe) {
			foreach($recipe->getIngredients() as $ingredient) {
				$item = $ingredient["item"];
				if (strpos($item, ",")) {
					// splits $item based on first occurrence of ", "
					// true parameter will return first half, omitting
					// flag will return second half of string after split
					$item = strstr($item, ",", true);
				}

				if (in_array($item."s", $ingredients)) {
					$item.="s";
				} else if (in_array(substr($item, 0, -1), $ingredients)) {
					$item = substr($item, 0, -1);
				}
				$ingredients[$item] = array(
					$ingredient["amount"],
					$ingredient["measure"]
				);
			}
		}
		return $ingredients;
	}

	public function filterById($id)
	{
		return $this->recipes[$id];
	}
}
?>