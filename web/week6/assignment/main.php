    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <?php
	    require_once("dbConnect.php");
	    $db = get_db();
    ?>
    <body>
        
    <form action="register.php" method="POST">
        <div class="form-group" >
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
            <div class="form-group form-check">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

        <script src="" async defer></script>
    </body>
</html>