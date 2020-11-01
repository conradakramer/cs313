<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    error_log($_SESSION['username']);
}
if ($_SESSION['username'] == '') {
    header('Location:main.php');
    error_log($_SESSION['username']);
    die();
}
?>

<?php
require("connection.php");
//$db = get_db();

$userId = $_POST['userId'];
$personId = $_POST['personId'];
$user = $_SESSION['username'];
$question_id = $_POST['questionId'];
$answer = $_POST['question'];
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
	$query = 'INSERT INTO answer (user_id, question_id, answer) VALUES (:personId, :question_id, :answer)';
	$statement = $connect->prepare($query);
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
$p = $personId;
$q = $question_id;
$p = str_replace(" ", "", $p);
$q = str_replace(" ", "", $q);
$p = (int)$p;
$q = (int)$q;

header("Location: question.php/?questionId=$q");

die(); 
?>
