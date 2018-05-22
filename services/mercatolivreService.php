
<?php 

function getProductList($word = null){
	$user= 'root';
	$pass ='troiswa';

	$db = new PDO('mysql:host=localhost;dbname=mercadolivre', $user, $pass);

	

	if ($word){
		$sql ="SELECT*FROM product WHERE name LIKE'%word% OR description LIKE'%word'";
	} else{
		$sql ="SELECT*FROM product";
	}
	
	$products=[];
	$statment = $db->prepare($sql);
	$statment->execute();

	$products = $statment->fetchAll(\PDO::FETCH_ASSOC);

	return $products;
}

// function addProduct(){
// 	$user ='root'
// 	$pass ='troiswa';
// 	$db = new PDO('mysql:host=localhost;dbname=mercadolivre', $user, $pass);

// }


// code julien
// <?php
// function getProductList() {
// 	$user = 'root';
// 	$password = 'troiswa';
// 	$db = new PDO('mysql:host=localhost;dbname=bananastore', $user, $password);
// 	$sql = "SELECT * FROM product";
// 	$statement = $db->query($sql, \PDO::FETCH_ASSOC);
// 	$products = [];
// 	foreach ($statement as $product)  {
// 		$products[] = $product;
// 	}
// 	return $products;
// }
// $list = getProductList();
// print_r($list);