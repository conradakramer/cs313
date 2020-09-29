<?php
$name = $_POST['name'];
$email = $_POST['email'];
$major = $_POST['major'];
$comment = $_POST['comment'];
$continent = $_POST['continent'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body class="m-auto pt-3">
    <div class="card m-auto" style="width: 55rem;">
        <div class="card-header">
            <h2>03 Teach : Team Activity - The Responce</h2>
            <div class="card-body">
                <div class="container">
                            <h4>Name:</h4>
                            <p><?php echo $name; ?></p>
                            <h4>Email:</h4><p><?php echo $email; ?></p>
                            <h4>Major:</h4><p><?php echo $major; ?></p>
                            <h4>Your Comment:</h4><p><?php echo $comment; ?></p>
                    <h4>Continents</h4>

                    <?php

                    $continents = array("AF" => "Africa", "AN" => "Antartica", "AS" => "Asia", "AU" => "Australia", "EU" => "Europe", "NA" => "North America", "RU" => "Rusia", "SA" => "South America");

                    if (empty($continent)) {
                        echo "you did not select a continent";
                    } else {
                        $x = count($continent);
                        echo "You selected $x continents: ";
                        echo "<ul>";
                        foreach ($continent as $continentSelected) {
                            echo "<li>" . $continents[$continentSelected] . "</li>";
                        }
                        echo "</ul>";
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>