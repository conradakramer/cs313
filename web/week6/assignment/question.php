    <?php
        session_start();
    ?>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
	    require("dbConnect.php");
	    $db = get_db();
    ?>
    <body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
        <img src="https://www.creativefabrica.com/wp-content/uploads/2019/02/Monogram-AW-Logo-Design-by-Greenlines-Studios-580x386.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        Awk-Word
        </a>
    </nav>


    <?php
        $questionId = $_POST['questionId'];
        $personId = $_SESSION['personId'];
        //$personId = $_POST['userId']; 
        if ($questionId == ''){
            $questionId = $_GET['questionId'];
        }

            
        //echo"questionid:$questionId  personid:$personId ";

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
                    <div class=\"card bg-light mb-3\">
                        <div class=\"card-body\">
                            <h1 class=\"card-text\" name=\"question\"> $question </h1>
                            <h5 class=\"card-title\"> $username - $date  </h5>
                        </div>
                    </div>
                </form>";
        }
        $statement = $db->prepare("SELECT * FROM answer WHERE question_id = $questionId ");
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
                    <div class=\"card bg-light mb-3\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\"> $username   </h5>
                            <p class=\"card-text\"> $answer </p>
                        </div>
                    </div>";
        }


        //echo"userid:$userId questionid:$id  personid:$personId ";
        echo "<form action=\"postAnswer.php\" method=\"POST\">
        <div class=\"input-group\">
            <textarea class=\"form-control\" aria-label=\"With textarea\" name=\"question\"></textarea>
            <div class=\"input-group-prepend\">
                <input type=\"hidden\" name=\"userId\" value=\" $userId \">
                <input type=\"hidden\" name=\"questionId\" value=\" $questionId \">
                <input type=\"hidden\" name=\"personId\" value=\" $personId \">
                <span class=\"input-group-text\"><button type=\"submit\" class=\"btn btn-primary\">Submit</button></span>
            </div>
            </div>
    </form>";
    ?>
 
        <script src="" async defer></script>
    </body>
</html>