<?php
session_start();


$userId = $_SESSION["userId"];
$user = $_SESSION["username"];
$question = $_POST["question"];
$qdate = date("Y-m-d");


require("dbConnect.php");
$db = get_db();





/*id SERIAL NOT NULL PRIMARY KEY,
user_id INT NOT NULL REFERENCES person(id),
question VARCHAR(2000) NOT NULL,
added DATE NOT NULL*/

try
{
	$query = 'INSERT INTO question (user_id, question) VALUES (:userId, :question , :qdate)';
	$statement = $db->prepare($query);
	$statement->bindValue(':userId',$userId);
    $statement->bindValue(':question',$question);
    $statement->bindValue(':qdate',$qdate);
	$statement->execute();


	$userId = $db->lastInsertId("question_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: home.php/?personId=$userId");

die(); 
?>
