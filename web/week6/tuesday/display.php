<?php
	require("dbConnect.php");
	$db = get_db();
?>
	<body>
		<div class="container">
         <?php
            // retrieve url parameter
            $personId = $_GET('perconId');
            // execute query to pull up data from that id
            $statement = $db->prepare('SELECT * FROM public.user WHERE ID =  :personId');
            $statement->bindvalue(':personId', $personId);
            $statement->execuite();
            while($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
               $id      = $row['id'];
               $first   = $row['first_name'];
               $last    = $row['last_name'];
               $food      = $row['food_type'];
               $statement = $db->prepare('SELECT food FROM w6_food WHERE ID = $food_id');
               $statement ->execute();
               while($fRow = $statement->fetch(PDO::FETCH_ASSOC))
               {
                  $food = $fRow['food'];
               }
               echo "<h1>$first $last's faveorate food is $food</h1>";
            }
            // execute another query to get food data
            // display name and favorite food
         ?>

		</div>
	</body>
</html>