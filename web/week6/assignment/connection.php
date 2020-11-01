<?php
 try {
    $connection = "dbname=d21mudpnktt1pq host=ec2-34-233-43-35.compute-1.amazonaws.com port=5432 user=pbwhjtpmsxjqrm password=389e50cbd7adabb3d3d594461762a15661f1bae8fa1fe65dbfb3983a5d07e2eb sslmode=require";
    $connect = new PDO("pgsql:$connection");
  }catch (PDOException $e) {
  echo "Error : " . $e->getMessage() . "<br/>";
  }
?>