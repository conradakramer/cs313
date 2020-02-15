    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
	    require("dbConnect.php");
	    $db = get_db();
    ?>
    <body>
    <div class="container">
         <?php
            // retrieve url parameter
            $personId = $_GET('personId');
            // execute query to pull up data from that id
            $statement = $db->prepare('SELECT * FROM user WHERE ID =  :personId');
            $statement->bindvalue(':personId', $personId);
            $statement->execuite();
            while($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
               $id      = $row['id'];
               $user   = $row['username'];
               $pass    = $row['password'];

               $statement ->execute();
              
               echo "<h1>$user your password is $pass</h1>";
            }
            // execute another query to get food data
            // display name and favorite food
         ?>

		</div>
   








        <script src="" async defer></script>
    </body>
</html>