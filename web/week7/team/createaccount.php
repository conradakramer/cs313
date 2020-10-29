<?php

$username = $_POST['username'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];

error_log("break 1");
$checkPassword = checkPassword($pass);
$checkPassword2 = checkPassword($pass2);

if (!isset($username) || $username == ""
    || !isset($pass) || $pass == ""
    || !isset($pass2) || $pass2 == "")
{
	header("Location: signup.php");
	die(); // we always include a die after redirects.
}
error_log("break 2");

if ($pass != $pass2) {
    header("Location: signup.php");
	die(); // we always include a die after redirects.
}
error_log("break 3");
$hashedPass = password_hash($pass, PASSWORD_DEFAULT);
require("connection.php");
$query = 'INSERT INTO "login" (username, pass) VALUES(:username, :pass)';
$stmt = $db->prepare($query);
$stmt->bindValue(":username", $username, PDO::PARAM_STR);
$stmt->bindValue(":pass", $hashedPass, PDO::PARAM_STR);
$stmt->execute();

error_log("break 4");
header("Location: signin.php");
die();

function checkPassword($pass)
{
    $pattern = '/[a-zA-Z][0-9]{7}$/';
    return preg_match($pattern, $pass);
}

?>