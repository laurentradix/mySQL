<?php include'../services/mercatolivreService.php';
      include '../view/header.phtml';

$products = getProductList();
      
      include'../view/list.phtml';
$addproduct = addProducList();









