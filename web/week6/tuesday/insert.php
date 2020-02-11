<?php
$first = $_POST["first"];
$last = $_POST["last"];
$food = $_POST["food"];


require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INCSRT INTO w6_user (first_name, last_name, food_type) VALUES (:first, :last, :food)';
	$statement = $db->prepare($query);
	$statement->bindValue(':first',$first);
	$statement->bindValue(':last',$last);
	$statement->bindValue(':food',$food);
	$statement->execute();
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: display.php/?personId=$userId");

die(); 
?>
