<?php
$user = $_POST["username"];
$pass = $_POST["password"];



require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO person (username, password) VALUES (:user, :pass)';
	$statement = $db->prepare($query);
	$statement->bindValue(':user',$user);
	$statement->bindValue(':pass',$pass);
	$statement->execute();


	$userId = $db->lastInsertId("user_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: home.php/?personId=$userId");

die(); 
?>
