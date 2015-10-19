<?php
class Product{
	private $article;
	private $name;
	private $description;
	private $image;
	private $priceOpt;
	private $price;
	private $priceDiscount;
	private $atribute;
	private $instock;
	
	
	function __construct()
	{
		
	}
	
	public function getProducts($category)
	{
		$additional = 	array(
							array(
								'article' => '1',
								'name' => '',
								'description' => '',
								'image' => '',
								'priceOpt' => '',
								'price' => '',
								'priceDiscount' => '',
								'atribute' => '',
								'instock' => '',
							),
							array(
								'article' => '1',
								'name' => '',
								'description' => '',
								'image' => '',
								'priceOpt' => '',
								'price' => '',
								'priceDiscount' => '',
								'atribute' => '',
								'instock' => '',
							),
							array(
								'article' => '1',
								'name' => '',
								'description' => '',
								'image' => '',
								'priceOpt' => '',
								'price' => '',
								'priceDiscount' => '',
								'atribute' => '',
								'instock' => '',
							),
							array(
								'article' => '1',
								'name' => '',
								'description' => '',
								'image' => '',
								'priceOpt' => '',
								'price' => '',
								'priceDiscount' => '',
								'atribute' => '',
								'instock' => '',
							),																					
							);
		
		
		
		return $products;
	}
}