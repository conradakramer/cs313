<?php 

$host = "ec2-54-157-234-29.compute-1.amazonaws.com"; 
$user = "gtzdzarqmlvbsn"; 
$pass = "3d6f747b67fb6b0b6e81955555816ba5018945ff8ae36145810a83d437bb1102"; 
$db = "d3psci9ggadgm5"; 

$con = pg_connect("host=$host port=5432 dbname=$db user=$user password=$pass sslmode=require")
    or die ("Could not connect to server\n"); 

$query = "SELECT * FROM notes"; 

$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");

while ($row = pg_fetch_assoc($rs)) {
    echo $row['noteId'] . " " . $row['noteTitle'] . " " . $row['noteContent'];
    echo "\n";
}

pg_close($con);
?>