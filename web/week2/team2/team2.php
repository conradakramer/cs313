<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <?php for ($i=0; $i < 11; $i++) { 
          echo '<div';
          if($i/2){
            echo 'class=even';
          }
          echo '>This is div #' + $i + '</div>';
        } ?>
        <script src="" async defer></script>
    </body>
</html>



<!-- Generate 10 divs with a Loop -->
<!-- Even Number make different font color (add a class the even numbered divs) -->
<!-- For Loop -->
<?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
?>


<!-- Foreach -->
<?php   
     foreach($ as $)
          {
             ?>
                  <div class="">
                       <img src="<?php echo $file ?>">
                       <p>Dylan Miller</p>
                  </div>
              <?php
          }
?>    