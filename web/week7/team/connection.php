<?php
  $server = 'host=ec2-34-233-43-35.compute-1.amazonaws.com';
  $dbname = 'd21mudpnktt1pq';
  $username = 'pbwhjtpmsxjqrm';
  $password = '389e50cbd7adabb3d3d594461762a15661f1bae8fa1fe65dbfb3983a5d07e2eb';
  $connection = "pgsql:dbname=$dbname host=$server port=5432 user=$username password=$password sslmode=require";
  $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  // Create the actual connection object and assign it to a variable
  try {
    $link = new PDO($connection, $username, $password, $options);
    return $link;
  } catch (PDOException $e) {
    include "500.php";
    exit;
  }