<?php

class Recipe
{
	public $title;
	public $ingredients = array();
	public $instructions = array();
	public $tag = array();
	public $yield;
	public $source = 'Josh Woodward';

}

$recipe1 = new Recipe();

# access object property
echo $recipe1->source;
$recipe1->source = 'New Source';
echo $recipe1->source;

$recipe1 = new Recipe();
$recipe2->source = 'Betty Crocker';
?>