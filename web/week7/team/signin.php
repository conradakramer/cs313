<?php

session_start();

$badLogin = false;

if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{
	// they have submitted a username and password for us to check
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];

	// Connect to the DB
	require("connection.php");
	//$db = get_db();

	$query = 'SELECT password FROM login WHERE username=:username';

	$statement = $connect->prepare($query);
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
    <?php
                    if ($badLogin)
                    {
                        echo "Incorrect username or password!<br /><br />\n";
                    }
                    ?>
    <div class="card mb-3" style="width: rem;">
        <div class="login-form">
            <form action="signin.php" method="POST">
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