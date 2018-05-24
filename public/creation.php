<?php 
session_start();
include '../services/tools.php';
include'../services/mercatolivreService.php';

      
include '../view/header.phtml';
include'../view/list.phtml';


$products = getProductList();
      
      










