<?php 
session_start();
$username = $_POST['username'];
$pass = $_POST['password'];
$badLogin = false;

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
if ($dbData){
    $row = $statement->fetch();
    $hashedPasswordFromDB = $row['password'];

    // now check to see if the hashed password matches
    if (password_verify($password, $hashedPasswordFromDB))
    {
        // password was correct, put the user on the session, and redirect to home
        $_SESSION['username'] = $username;
        header("Location: home.php");
        die(); // we always include a die after redirects.
    }
    else
    {
        $badLogin = true;
    }

}
else
{
    $badLogin = true;
}
/* if ($username != $dbData['username']) {
    $message = "Please check your username";
    header("Location: signin.php");
    die();

} */
?>