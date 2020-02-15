<?php
session_start();
require("dbConnect.php");
$db = get_db();

$personId = $_SESSION['personId'];
$user = $_SESSION['username'];
$question = $_POST['question'];
$qdate = date('Y-m-d');
echo "userid: $personId and user: $user";



try
{
	$query = 'INSERT INTO questions (user_id, question, added) VALUES (:personId, :question, :qdate)';
	$statement = $db->prepare($query);
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
header("Location: home.php/?personId=$personId");

die(); 
?>
