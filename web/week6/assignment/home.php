    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
	    require("dbConnect.php");
	    $db = get_db();
    ?>
    <body>
    <div class="container">
         <?php



            $personId = $_GET['personId'];
            $statement = $db->prepare('SELECT * FROM person WHERE Id = :personId');
            $statement->bindValue(':personId', $personId);
            $statement->execute();
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