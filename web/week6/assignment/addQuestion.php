<?php
session_start();


$userId = $_SESSION["userId"];
$user = $_SESSION["username"];
$question = $_POST["question"];
$date = date("Y-m-d");


require("dbConnect.php");
$db = get_db();





id SERIAL NOT NULL PRIMARY KEY,
user_id INT NOT NULL REFERENCES person(id),
question VARCHAR(2000) NOT NULL,
added DATE NOT NULL

try
{
	$query = 'INSERT INTO question (userId, question) VALUES (:user, :pass)';
	$statement = $db->prepare($query);
	$statement->bindValue(':user',$user);
	$statement->bindValue(':pass',$pass);
	$statement->execute();


	$userId = $db->lastInsertId("person_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: home.php/?personId=$userId");

die(); 
?>
