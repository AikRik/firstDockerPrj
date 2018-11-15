<?php
header("Content-Type:application/json");
require_once('product.php');

$product = new Product;
$products = $product->get_products();
execute($products);

function execute($data)
{
	if ($data) {
		$json_response = json_encode($data);
		echo $json_response;
	} else {
		header("HTTP/1.1 ". 400);
	}
}
