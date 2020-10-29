<?php
try {
    $connection = "dbname=d21mudpnktt1pq host=ec2-34-233-43-35.compute-1.amazonaws.com port=5432 user=pbwhjtpmsxjqrm password=389e50cbd7adabb3d3d594461762a15661f1bae8fa1fe65dbfb3983a5d07e2eb sslmode=require";
    $connect = new PDO("pgsql:$connection");
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
    <main>
        <section>
            <h2>Scriptures Resources</h2>
<?php
foreach ($connect->query($sql) as $row) 
{
    $result = "<p><strong>".$row['book']. " " .$row['chapter']. ":" .$row['verse']. "</strong>";
    $result .= " - " .$row['verse_content']. " </p>";
    echo $result;    
}
?>
    </section>
</main>
</body>
</html>