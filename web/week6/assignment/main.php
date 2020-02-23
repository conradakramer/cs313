
    
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <?php
	    require_once("dbConnect.php");
	    $db = get_db();
    ?>
    <body>
    <form action="register.php" method="POST"class="form-signin">
    <h1 class="h3 mb-3 font-weight-normal">Awk-Word</h1>
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="username" class="form-control" placeholder="username" name="username" required="" autofocus="">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="password" class="form-control" placeholder="Password" name="password" required="">
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">© 2020</p>
    </form>

        <script src="" async defer></script>
    </body>
</html>




