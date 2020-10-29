<?php

session_start();

$username = $_POST['username'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];


$checkPassword = checkPassword($pass);
$checkPassword2 = checkPassword($pass2);

if (empty($username) || empty($pass) || empty($checkPassword) || empty($checkPassword2)) {
    $message = "You must complete all the fields";
}
if ($pass != $pass2) {
    $message = "The passwords must match";
}

$hashedPass = password_hash($pass, PASSWORD_DEFAULT);

function register($username, $hashedPass)
{
    require("connection.php");
    $query = 'INSERT INTO login(username, pass) VALUES(:username, :pass)';

    $stmt = $db->prepare($query);
    $stmt->bindValue(":username", $username, PDO::PARAM_STR);
    $stmt->bindValue(":pass", $hashedPass, PDO::PARAM_STR);
    $stmt->execute();
    $countRows = $stmt->rowCount();
    $stmt->closeCursor();
    return $countRows;
}

$register = register($username, $hashedPass);
if ($register === 1) {
    $_SESSION['message'] = "Thanks for register $username";
    header('Location: login.php');
} else {
    $message = "There was an error in your registration";
}

function checkPassword($pass)
{
    $pattern = '/[a-zA-Z][0-9]{7}$/';
    return preg_match($pattern, $pass);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>

    <h1>Create a new Account</h1>

    <form action="action_page.php" method="post">
        <div class="imgcontainer">
        </div>
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" required>

            <label for="psw"><b>Confirm Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass2" required>

            <button type="submit">Sign Up</button>
        </div>
    </form>


</body>

</html>