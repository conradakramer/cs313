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
      <h3> just for kicks lets do this  with a form</h3>
      <form action="" method="post">
         <input type="text" name="picture">
         <input type="submit" name="Submit" value="Submit!">
      </form>


      <?php 
      if(isset($_POST['Submit'])){
         $_SESSION['pictureUrl'] = $_POST
      }
      ?>
   </body>
</html>