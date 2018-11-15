<?php
class Product
{
	function get_products()
	{
		$productsArray = ['books'=>20,'pen'=>10,'pencil'=>5];
		$products = ['products'=>$productsArray];
		return $products;
	}
}
