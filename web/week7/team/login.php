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
    $result = $statement->execute();
    return $result;
}
$dbData = dbData($username);
error_log($dbData);
/* if ($username != $dbData['username']) {
    $message = "Please check your username";
    header("Location: signin.php");
    die();

} */

$checkHash = password_verify($pass, $dbData['password']);

if (!$checkHash) {
    $message = "Please check your password";
    header("Location: signin.php");
    die();

}

$_SESSION['logged'] = TRUE;
array_pop($dbData);
$_SESSION['dbData'] = $dbData;
?>