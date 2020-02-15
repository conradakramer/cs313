
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
	    require_once("dbConnect.php");
	    $db = get_db();
    ?>
    <body>



    <?php
        $questionId = $_POST["questionId"];
        $personId = $_POST["personId"]; 
        echo"<H1>QuestionId: $questionId </H1>";
        $statement = $db->prepare("SELECT * FROM answer WHERE ID = $questionId");
        echo"<H1>Question: </H1>";
        
        $statement->execute();
        while($row = $statement->fetch(PDO::FETCH_ASSOC))
        {
            $id         = $row['id'];
            $userId     = $row['user_id'];
            $question   = $row['question_id'];
            $answer     = $row['answer'];


            $users = $db->prepare("SELECT username FROM person WHERE ID = $userId");
            $users->execute();
            while ($URow = $users->fetch(PDO::FETCH_ASSOC))
            {
                $username = $URow['username'];
            }
            echo "
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\"> Question from: $username   </h5>
                            <p class=\"card-text\"> $answer </p>
                        </div>
                    </div>";
        }
    ?>
    <form action="addAnswer.php" method="POST">
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