<?php
session_start();
require("connection.php");
//$db = get_db();

$personId = $_SESSION['personId'];
$user = $_SESSION['username'];
$question = $_POST['question'];
$qdate = date('Y-m-d');
echo "userid: $personId and user: $user and post: $question";







/*id SERIAL NOT NULL PRIMARY KEY,
user_id INT NOT NULL REFERENCES person(id),
question VARCHAR(2000) NOT NULL,
added DATE NOT NULL*/

try
{
	$query = 'INSERT INTO questions (user_id, question, added) VALUES (:personId, :question, :qdate)';
	$statement = $connect->prepare($query);
	$statement->bindValue(':personId',$personId);
    $statement->bindValue(':question',$question);
    $statement->bindValue(':qdate',$qdate);
    $statement->execute();

}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: home.php");
die(); 
?>
