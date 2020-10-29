 <?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
if ($_SESSION['username'] == ''){
    header('Location:signin.php');
    die();
}
?>
<html>
<body>
    <h1>Welcome, <?php echo $username ?></h1>
    <a href="signout.php">Logout</a>
</body>
</html>