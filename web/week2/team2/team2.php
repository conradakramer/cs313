<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Yay team</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="team2.css">
    </head>
    <body>
    <?php session_start(); ?>
    <h1>PHP Team Activity</h1>
    <!-- loop -->
    <?php for ($i = 0; $i < 10; $i++) { ?>

        <div id=“<?php echo $i; ?>” class=“numberedDivs”

            <?php if($i % 2 == 0){echo “style=‘color:red’”;} ?>>

            This is div #<?php echo $i; ?></div>

         <?php } ?>
        <script src="" async defer></script>
    </body>
</html>



<!-- Generate 10 divs with a Loop -->
<!-- Even Number make different font color (add a class the even numbered divs) -->
<!-- For Loop -->
