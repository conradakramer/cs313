
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
  <form action="createaccount.php" method="POST" class="form-signin">
    <img class="mb-4" src="https://www.creativefabrica.com/wp-content/uploads/2019/02/Monogram-AW-Logo-Design-by-Greenlines-Studios-580x386.jpg" alt="" width="85" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Dont Be Awk-Word and sign up now</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" id="username" class="form-control" placeholder="Username" name="username" autofocus="">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="pass" class="form-control" placeholder="Password" name="pass" >
    <label for="inputPassword" class="sr-only">Confirm Password</label>
    <input type="password" id="pass2" class="form-control" placeholder="Confirm Password" name="pass2" >
    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button><br>
    <p class="message">Already registered? <a href="main.php">Sign In</a></p>
    <p class="mt-5 mb-3 text-muted">© 2020</p>
  </form>
    
  <script src="" async defer></script>
</body>

</html>