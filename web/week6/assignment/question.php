
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
	    require_once("dbConnect.php");
	    $db = get_db();
    ?>
    <body>

    
    




    <?php
        $questionId = $_POST["questionId"];
        $personId = $_POST["personId"]; 

        $statement = $db->prepare("SELECT * FROM answer");
        echo"<H1>Question: </H1>";
        
        $statement->execute();
        while($row = $statement2->fetch(PDO::FETCH_ASSOC))
        {
            $id         = $row['id'];
            $userId     = $row['user_id'];
            $question   = $row['question_id'];
            $answer       = $row['answer'];


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
                            <a href=\"../question.php/?personId=$personId?questionId=$id\" class=\"btn btn-primary\">Answer Qestion</a>
                        </div>
                    </div>
                </form>";
        }
    ?>
    <form action="addQuestion.php" method="POST">
        <div class="card w-100">
            <div class="card-body">
            <textarea class="form-control" aria-label="With textarea" name="question"></textarea>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
        <script src="" async defer></script>
    </body>
</html>