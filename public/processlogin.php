<?php
session_start();   
include '../services/tools.php';

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

		header('Location: creation.php');
		exit;
	} else {
		echo "mot de passe incorrect";
	}
}

// function getUsers($users = null){
// 	$user= 'root';
// 	$pass ='troiswa';

// 	$db = new PDO('mysql:host=localhost;dbname=mercadolivre', $user, $pass);

	

// 	if ($users){
// 		$sql ="SELECT*FROM user WHERE email LIKE'$email'";
// 	} else{
// 		$sql ="SELECT*FROM name";
// 	}
	
// 	$user=[];
// 	$statment = $db->prepare($sql);
// 	$statment->execute();

// 	$user = $statment->fetch(\PDO::FETCH_ASSOC);

// 	return $user;
// }
