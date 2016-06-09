<?php

class Recipe
{
	private $title;
	public $ingredients = array();
	public $instructions = array();
	public $tag = array();
	public $yield;
	public $source = 'Josh Woodward';

	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = ucwords($title);
	}

	public function displayRecipe()
	{
		return $this->title . ' by ' . $this->source;
	}

}

$recipe1 = new Recipe();
$recipe1->setTitle('mac and cheese');

echo $recipe1->displayRecipe();
echo $recipe1->getTitle();
?>