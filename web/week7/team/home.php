 <?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
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