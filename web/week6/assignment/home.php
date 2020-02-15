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
        $user    = $row['username'];
        $pass    = $row['password'];
        echo "<h1> Welcome Back $user </h1>";
        }
        // execute another query to get food data
        // display name and favorite food
        ?>
         
         
        <form action="postQuestion.php">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">New Question:</span>
                </div>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary btn-sm" >Ask Question!</button>
        </form>
         

		</div>
   








        <script src="" async defer></script>
    </body>
</html>