<?php
session_start();


$userid = $_SESSION["userId"];
$user = $_SESSION["username"];
$question = strval($_POST["question"]);
$qdate = strval(date("Y-m-d"));
echo "userid: $userid and user: $user";

require("dbConnect.php");
$db = get_db();





/*id SERIAL NOT NULL PRIMARY KEY,
user_id INT NOT NULL REFERENCES person(id),
question VARCHAR(2000) NOT NULL,
added DATE NOT NULL*/

try
{
	$query = 'INSERT INTO questions (user_id, question, added) VALUES (:userid, :question, :qdate)';
	$statement = $db->prepare($query);
	$statement->bindValue(':userid',$userid);
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
