
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
	    require_once("dbConnect.php");
	    $db = get_db();
    ?>
    <body>



    <?php

        
        $questionId = $_POST['questionId'];
        $personId = $_POST['userId']; 
        

        $statement2 = $db->prepare("SELECT * FROM questions WHERE ID = $questionId");
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
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\"> Question from: $username - $date  </h5>
                            <p class=\"card-text\" name=\"question\"> $question </p>
                        </div>
                    </div>
                </form>";
        }
        $statement = $db->prepare("SELECT * FROM answer WHERE ID = $questionId");
        //echo"<H1>Question: </H1>";
        
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
                            <h5 class=\"card-title\"> $username   </h5>
                            <p class=\"card-text\"> $answer </p>
                        </div>
                    </div>";
        }


        echo"userid:$userId questionid:$id  personid:$personId ";
        echo "<form action=\"postAnswer.php\" method=\"POST\">
        <div class=\"card w-100\">
            <div class=\"card-body\">
            <textarea class=\"form-control\" aria-label=\"With textarea\" name=\"question\"></textarea>
            <input type=\"hidden\" name=\"userId\" value=\" $userId \">
            <input type=\"hidden\" name=\"questionId\" value=\" $id \">
            <input type=\"hidden\" name=\"personId\" value=\" $personId \">
            <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
            </div>
        </div>
    </form>";
    ?>
    
        <script src="" async defer></script>
    </body>
</html>