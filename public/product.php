<?php
session_start();
include '../services/tools.php';
include'../services/listService.php';

$productId = $_GET['id'];

$product = getProductById($productId);
?>

<?php include '../view/header.phtml' ?>

<table>
	<tr>
		<td>nom: <?= $product["name"]?></td>
		<td>prix: <?= $product["price"]?> cents</td>
		<td><img src= "<?= $product["photo"]?>" ></td>
		<td>description: <?= $product["description"]?></td>
		<td>quantités: <?= $product["quantity"]?></td>
		<td>stock: <?= $product["is_active"]?></td>
		</td>
	</tr>
</table>

<?php include '../view/footer.phtml' ?>


