<?php
session_start();
include 'connection.php';
if (isset($_SESSION['logged'])) {
    $username = $_SESSION['userData']['username'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, <?php echo $username ?></title>
</head>
<body>
    
</body>
</html>