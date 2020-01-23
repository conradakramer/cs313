<?php
   // Start the session
   session_start();
?>
<!DOCTYPE html>
<html>
   <body>
      <?php
         // remove previous session variable
         // Set session variables
         // echo that variables have been set
         $_SESSION["favecolor"] = "green";
         $_SESSION["animal"] = "dog";
         
         echo "Session variable has been set";
?>
      <a href="thursdaySession2.php">Check the variables on another page</a>

      <?php // set session variables using a form ?>
   </body>
</html>