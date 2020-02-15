    <?php
        session_start();
    ?>
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
        $tempuser = '';
        while($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
        $id      = $row['id'];
        $user    = $row['username'];
        $tempuser = $user;
        echo "<h1> Welcome Back $user </h1>";
        $_SESSION['personId'] = $id;
        }
        // execute another query to get food data
        // display name and favorite food
        ?>
         
         
        <form action="../addQuestion.php" method="POST">
            <div class="input-group">
                <div class="input-group-prepend">
                    <input type="hidden" name="personId" value="<?php $personId ?>"/>  
                    <span class="input-group-text">New Question:</span>
                </div>
                <textarea class="form-control" aria-label="With textarea" name="question"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary btn-sm" >Ask Question!</button>
        </form>
         

		</div>
   
        <?php





        //$personId = $_GET['personId'];
        echo"<h1>hello</h1>";
        $statement = $db->prepare('SELECT * FROM question');
        echo"$statement";
        //$statement->bindValue(':personId', $personId);
        $statement->execute();
        while($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            echo"this is working";
            $id         = $row['id'];
            $userId     = $row['user_id'];
            $question   = $row['question'];
            $date       = $row['added'];


            $users = $db->prepare("SELECT username FROM person WHERE ID = $userId");
            $users->execute();
            while ($URow = $users->fetch(PDO::FETCH_ASSOC))
            {
            $username = $URow['username'];
            }



            echo "<form action=\"question.php\" method=\"POST\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\"> Question from: $username - $date  </h5>
                            <p class=\"card-text\"> $question </p>
                            <a href=\"question.php\" class=\"btn btn-primary\">Answer Qestion</a>
                        </div>
                    </div>
                </form>";
        }

        ?>


        




        <script src="" async defer></script>
    </body>
</html>