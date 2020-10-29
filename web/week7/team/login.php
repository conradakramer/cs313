<?php 
session_start();
$username = $_POST['username'];
$pass = $_POST['password'];

if (empty($username) || empty($password)) {
    $message = "You must complete all the fields";
}

function dbData($username)
{
    require('connection.php');
    $query = 'SELECT * FROM users WHERE username = :username';
    $statement = $connect->prepare($query);
    $statement->bindValue(":username", $username);
    $statement->execute();
    $dbData = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    return $dbData;
}
$dbData = dbData($username);

if ($username != $dbData['username']) {
    $message = "Please check your username";
}

$checkHash = password_verify($pass, $dbData['password']);

if (!$checkHash) {
    $message = "Please check your password";
}

$_SESSION['logged'] = TRUE;
array_pop($dbData);
$_SESSION['dbData'] = $dbData;
?>