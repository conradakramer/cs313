<?php
session_start();
require("dbConnect.php");
$db = get_db();

$userId = $_POST['userId'];
$personId = $_SESSION['personId'];
$user = $_SESSION['username'];
$question_id = $_POST['questionId'];
$qdate = date('Y-m-d');
echo"userid: $userId  personId: $personId question_id: $question_id";
//echo "userid: $personId and user: $user";

/*
CREATE TABLE answer(
    id SERIAL NOT NULL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES person(id),
    question_id INT NOT NULL REFERENCES questions(id),
    answer VARCHAR(2000) NOT NULL
);*/

try
{
	$query = 'INSERT INTO questions (user_id, question_id, answer) VALUES (:personId, :question_id, :answer)';
	$statement = $db->prepare($query);
	$statement->bindValue(':personId',$personId);
    $statement->bindValue(':question_id',$question_id);
    $statement->bindValue(':answer',$answer);

    $statement->execute();

}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: question.php/?personId=$userId?questionId=$question_id");

die(); 
?>
