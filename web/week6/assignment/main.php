<?php

session_start();

$badLogin = false;

if (isset($_POST['username']) && isset($_POST['pass']))
{
  // they have submitted a username and password for us to check
  $username = $_POST['username'];
  $password = $_POST['pass'];

  // Connect to the DB
  require("connection.php");
  //$db = get_db();

  $query = 'SELECT password FROM person WHERE username=:username';

  $statement = $connect->prepare($query);
  $statement->bindValue(':username', $username);

    $result = $statement->execute();
    error_log("getting result-------");
    error_log($result);
if ($result){
    $row = $statement->fetch();
    $hashedPasswordFromDB = $row['password'];

    // now check to see if the hashed password matches
    if (password_verify($password, $hashedPasswordFromDB))
    {
      $query = 'SELECT id FROM person WHERE username=:username';
      $statement2 = $connect->prepare($query);
      $statement2->bindValue(':username', $username);
      $result2 = $statement2->execute();




        // password was correct, put the user on the session, and redirect to home
        $_SESSION['username'] = $username;
        $_SESSION['personId'] = $result2;
        error_log("getting result2 ------------------------- ");
        error_log($result2);
        header("Location: home.php");
        die(); // we always include a die after redirects.
    }
    else
    {
        $badLogin = true;
        error_log("bad Password");
    }

}
else
{
    $badLogin = true;
    error_log("bad Result");
}
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>Signin</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    html,
    body {
      height: 100%;
    }

    body {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }

    .form-signin .checkbox {
      font-weight: 400;
    }

    .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }

    .form-signin .form-control:focus {
      z-index: 2;
    }

    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
</head>

<body class="text-center">
  <form action="main.php" method="POST" class="form-signin">
    <img class="mb-4" src="https://www.creativefabrica.com/wp-content/uploads/2019/02/Monogram-AW-Logo-Design-by-Greenlines-Studios-580x386.jpg" alt="" width="85" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Dont Be Awk-Word and sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" id="username" class="form-control" placeholder="Username" name="username" autofocus="">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="pass" class="form-control" placeholder="Password" name="pass" >
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
  </form>
  <script src="" async defer></script>
</body>

</html>