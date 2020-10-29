<?php 
session_start();

$badLogin = false;

if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{
	// they have submitted a username and password for us to check
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];

	// Connect to the DB
	require("dbConnect.php");
	$db = get_db();

	$query = 'SELECT password FROM login WHERE username=:username';

	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);

	$result = $statement->execute();
if ($dbData){
    $row = $statement->fetch();
    $hashedPasswordFromDB = $row['pass'];

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
}
/* if ($username != $dbData['username']) {
    $message = "Please check your username";
    header("Location: signin.php");
    die();

} */
?>