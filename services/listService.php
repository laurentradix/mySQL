<?php 	
		
function getProductList ($word = null){
	$user= 'root';
	$pass ='troiswa';

	$db = new PDO('mysql:host=localhost;dbname=bananastore', $user, $pass);

	

	if ($word){
		$sql ="SELECT*FROM product WHERE name LIKE'%word%'OR description LIKE'%word'";
	} else{
		$sql ="SELECT*FROM product";
	}
	
	$products=[];
	$statment = $db->prepare($sql);
	$statment->execute();

	$products = $statment->fetchAll(\PDO::FETCH_ASSOC);

	return $products;
}


function getProductById($id){
	$user= 'root';
	$pass ='troiswa';

	$db = new PDO('mysql:host=localhost;dbname=bananastore', $user, $pass);

	$sql = "SELECT * FROM product WHERE id = $id"; 

    $statment = $db->prepare($sql);
	$statment->execute();
	$product = $statment->fetch(\PDO::FETCH_ASSOC);

	return $product;
}
