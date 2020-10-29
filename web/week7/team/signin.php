<?php

session_start();
include 'connection.php';

$username = $_POST['username'];
$pass = $_POST['password'];

if (empty($username) || empty($password)) {
    $message = "You must complete all the fields";
}

function dbData()
{
    require('connection.php');
    $query = 'SELECT * FROM users';
    $statement = $link->prepare($query);
    $statement->execute();
    $dbData = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    return $dbData;
}
$dbData = dbData();

if ($username != $dbData['username']) {
    $message = "Please check your username";
}

$checkHash = password_verify($password, $dbData['password']);

if (!$checkHash) {
    $message = "Please check your password";
}

$_SESSION['logged'] = TRUE;
array_pop($dbData);
$_SESSION['dbData'] = $dbData;
if ($_SESSION['logged']) {
    header('Location: home.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>
    <div class="card mb-3" style="width: rem;">
        <div class="login-form">
            <form action="signin.php" method="post">
                <h2 class="text-center">Log in</h2>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
                </div>
            </form>
            <p class="text-center"><a href="signup.php">Create an Account</a></p>
        </div>
    </div>
</body>

</html>