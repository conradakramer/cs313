    <?php
        session_start();
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
	    require("dbConnect.php");
	    $db = get_db();
    ?>
    <style>
    .card{
        padding: 20px;
    }
    </style>
    <body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
        <img src="https://www.creativefabrica.com/wp-content/uploads/2019/02/Monogram-AW-Logo-Design-by-Greenlines-Studios-580x386.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        Awk-Word
        </a>
    </nav>
    <div class="container">
    <?php

        $personId = $_GET['personId'];
        $_SESSION['personId'] = $personId;
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
        $statement2 = $db->prepare("SELECT * FROM questions");
        //$statement->bindValue(':personId', $personId);
        $statement2->execute();
        while($row = $statement2->fetch(PDO::FETCH_ASSOC))
        {
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



            echo "<form action=\"../question.php\" method=\"POST\">
                    <div class=\"card bg-light mb-3\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$username - $date  </h5>
                            <p class=\"lead\" name=\"question\"> $question </p>
                            <input type=\"hidden\" name=\"userId\" value=\"$userId\">
                            <input type=\"hidden\" name=\"questionId\" value=\"$id\">
                            <button type=\"submit\" class=\"btn btn-primary\">Answer Qestion</button>
                        </div>
                    </div>
                </form>";
        }
//<a href=\"../question.php/?personId=$personId?questionId=$id\" class=\"btn btn-primary\">Answer Qestion</a>
        ?>


        



<div class="container">
  <div class="jumbotron mt-3">
    <h1>Bottom Navbar example</h1>
    <p class="lead">This example is a quick exercise to illustrate how the bottom navbar works.</p>
    <a class="btn btn-lg btn-primary" href="/docs/4.4/components/navbar/" role="button">View navbar docs »</a>
  </div>
</div>
        <script src="" async defer></script>
    </body>
</html>