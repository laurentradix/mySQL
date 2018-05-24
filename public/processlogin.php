<?php

session_start();   

include '../services/tools.php';
include'../services/listService.php';


pre($_POST);

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email LIKE '$email'";
echo $sql;


$db = new PDO('mysql:host=localhost;dbname=bananastore', 'root', 'troiswa');



$statement = $db->prepare($sql);
$statement->execute();
$user = $statement->fetch(\PDO::FETCH_ASSOC);

 pre($user);

if ($user == null) {
	echo "Email inconnu";
} else {

	if ($password == $user['password']) {
		echo 'Youpi, on est identififié';

		$_SESSION['firstname'] = $user['firstname'];

		header('Location: home.php');
		exit;
	} else {
		echo "mot de passe incorrect";
	}
}


