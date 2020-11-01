<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    error_log($_SESSION['username']);
}
if ($_SESSION['username'] == '') {
    header('Location:main.php');
    error_log($_SESSION['username']);
    die();
}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
require("connection.php");

?>
<style>
    .bg-purple {
        background-color: darkgrey;
    }
</style>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="https://www.creativefabrica.com/wp-content/uploads/2019/02/Monogram-AW-Logo-Design-by-Greenlines-Studios-580x386.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            Awk-Word
        </a>
        <a class="navbar-brand" href="#">
            Welcome  <?php echo $username ?>          
        </a>
        <a href="signout.php">Logout</a>
    </nav>
    <div class="container">

        <?php

        $personId = $_GET['personId'];
        $_SESSION['personId'] = $personId;
        $statement = $connect->prepare('SELECT * FROM person WHERE Id = :personId');
        $statement->bindValue(':personId', $personId);
        $statement->execute();
        $tempuser = '';
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $id      = $row['id'];
            $user    = $row['username'];
            $tempuser = $user;
            echo "    <div class=\"d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm\">
        <img class=\"mr-3\" src=\"https://www.creativefabrica.com/wp-content/uploads/2019/02/Monogram-AW-Logo-Design-by-Greenlines-Studios-580x386.jpg\" alt=\"\" width=\"48\" height=\"48\">
        <div class=\"lh-100\">
          <h6 class=\"mb-0 text-white lh-100\">$user</h6>
        </div>
      </div>";
        }
        // execute another query to get food data
        // display name and favorite food
        ?>


        <form action="../addQuestion.php" method="POST">
            <div class="input-group">

                <textarea class="form-control" aria-label="With textarea" name="question"></textarea>
                <div class="input-group-prepend">
                    <input type="hidden" name="personId" value="<?php $personId ?>" />
                    <span class="input-group-text"><button type="submit" class="btn btn-secondary btn-sm">Ask Question!</button></span>
                </div>
            </div>

        </form>


    </div>

    <?php

    //$personId = $_GET['personId'];
    $statement2 = $connect->prepare("SELECT * FROM questions");
    //$statement->bindValue(':personId', $personId);
    $statement2->execute();
    while ($row = $statement2->fetch(PDO::FETCH_ASSOC)) {
        $id         = $row['id'];
        $userId     = $row['user_id'];
        $question   = $row['question'];
        $date       = $row['added'];


        $users = $connect->prepare("SELECT username FROM person WHERE ID = $userId");
        $users->execute();
        while ($URow = $users->fetch(PDO::FETCH_ASSOC)) {
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






    <script src="" async defer></script>
</body>

</html>