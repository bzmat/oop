<?php 

session_start();


$dbhost = "localhost";

$dbname = "login_register";

$dbuser = "root";

$dbpass = "root";




try {
	
	//create PDO connection
	$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $dbuser, $dbpass);

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

	//show error
	echo $e->getMessage();

	
}

include ('classes/user.php');

$user = new User($db);

 ?>