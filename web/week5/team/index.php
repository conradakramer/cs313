<?php
try {
    $connection = "dbname=d21mudpnktt1pq host=ec2-34-233-43-35.compute-1.amazonaws.com port=5432 user=pbwhjtpmsxjqrm password=389e50cbd7adabb3d3d594461762a15661f1bae8fa1fe65dbfb3983a5d07e2eb sslmode=require";
    $connect = new PDO("pgsql:$connection");
    echo "Connected";
  }catch (PDOException $e) {
  echo "Error : " . $e->getMessage() . "<br/>";
  }

  $sql = 'SELECT * FROM scriptures.scriptures;';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scriptures</title>
</head>
<body>
<table>
    <tr>
<?php
foreach ($connect->query($sql) as $row) 
{
    $result = "";
    $result .= "";
    $result .= "";
    $result .= "";
    $result .= "";
    $result .= "";
    $result .= "";
    $result .= "";
    $result .= "";
    echo $result;    
    
print $row['id'] . " ";
print $row['book'] . "-->";
}
?>
</tr>

</table>
    
</body>
</html>