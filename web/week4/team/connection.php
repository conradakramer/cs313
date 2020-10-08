<?php
   $host        = "host = ec2-54-157-234-29.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d3psci9ggadgm5";
   $credentials = "user = gtzdzarqmlvbsn password=3d6f747b67fb6b0b6e81955555816ba5018945ff8ae36145810a83d437bb1102";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>