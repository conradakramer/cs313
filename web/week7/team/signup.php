

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>

    <h1>Create a new Account</h1>

    <form action="createaccount.php" method="post">
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