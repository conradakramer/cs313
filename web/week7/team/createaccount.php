<?php

$username = $_POST['username'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];

$checkPassword = checkPassword($pass);
$checkPassword2 = checkPassword($pass2);

if (!isset($username) || $username == ""
    || !isset($pass) || $pass == ""
    || !isset($pass2) || $pass2 == "")
{
	header("Location: signup.php");
	die(); // we always include a die after redirects.
}

if ($pass != $pass2) {
    header("Location: signup.php");
	die(); // we always include a die after redirects.
}
$hashedPass = password_hash($pass, PASSWORD_DEFAULT);
require("connection.php");
$query = 'INSERT INTO "login" (username, pass) VALUES(:username, :pass)';
$stmt = $connect->prepare($query);
$stmt->bindValue(":username", $username);
$stmt->bindValue(":pass", $hashedPass);
$stmt->execute();

header("Location: home.php");
die();

function checkPassword($pass)
{
    $pattern = '/[a-zA-Z][0-9]{7}$/';
    return preg_match($pattern, $pass);
}

?>