<?php
$user = $_POST["username"];
$pass = $_POST["password"];



require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INCSRT INTO public.user (username, password) VALUES (:user, :pass)';
	$statement = $db->prepare($query);
	$statement->bindValue(':first',$first);
	$statement->bindValue(':last',$last);
	$statement->execute();


	$userId = $db->lastInsertId("public.user_id_seq");
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
header("Location: home.php/?personId=$userId");

die(); 
?>
